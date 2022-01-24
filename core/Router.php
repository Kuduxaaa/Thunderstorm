<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm;

class Router
{
    public static array $routes = array(
        'get' => array(),
        'post' => array(),
        'head' => array(),
        'put' => array(),
        'delete' => array()
    );

    public Request $request;
    public Database $database;
    public Response $response;
    
    /**
     * Router constructor
     * 
     * @param Request
     */
    public function __construct()
    {
        $this->request = new Request();
        $this->database = new Database();
        $this->response = new Response();
    }

    /**
     * @param $route
     * @param $func
     * @param string $method
     */
    public static function add($route, $func, string $method = 'get')
    {

        if ($func === false)
        {
            $this->not_found();
        }

        $method = strtolower($method);
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
        $route = '/^' . $route . '$/i';

        self::$routes[$method][$route] = $func;
    }
    
    public function resolve()
    {
        $page_found = false;
        $method = $this->request->method();

        if (isset(self::$routes[$method]))
        {
            foreach (self::$routes[$method] as $route => $func)
            {
                if (preg_match($route, $this->request->path(), $matches))
                {
                    $page_found = true;
                    array_shift($matches);
                    $parameters_array = array_merge([$this], $matches);

                    if (is_string($func) && strpos('@', $func) === false)
                    {
                        $func = explode('@', $func);
                        $class = $func[0];
                        $method = $func[1];

                        $class = '\\Thunderstorm\\Controllers\\' . $class;
                        $class = new $class();
                        $class->$method(...$parameters_array);
                    }
                    else if (is_array($func))
                    {
                        call_user_func_array($func, $parameters_array);
                    }
                    else
                    {
                        $this->not_found();
                    }

                    break;
                }
            }
        }

        if (!$page_found)
        {
            $this->not_found();
        }
    }

    public function not_found(): bool
    {
        $this->response->render_template('errors/404.html')->status_code(404);
        return true;
    }
}