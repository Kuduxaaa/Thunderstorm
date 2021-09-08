<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm;

use Twig\Environment;
use Twig\Error\LoaderError as LoaderErrorAlias;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class Router
{
    protected array $routes = array(
        'get' => array(),
        'post' => array(),
        'head' => array(),
        'put' => array(),
        'delete' => array()
    );

    public Request $request;

    /**
     * Router constructor
     * 
     * @param Request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $route
     * @param $func
     * @param string $method
     */
    public function add($route, $func, string $method = 'get')
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

        $this->routes[$method][$route] = $func;
    }


    /**
     * @param $template
     * @param array $args
     */
    public function render_template($template, array $args = [])
    {
        $loader = new FilesystemLoader(dirname(__DIR__).'/views/');
        $twig = new Environment($loader);

        try {
            echo $twig->render($template, $args);
        } catch (LoaderErrorAlias | SyntaxError | RuntimeError $e) {
            die($e);
        }
    }

    public function resolve()
    {
        $page_found = false;
        $method = $this->request->method();

        if (isset($this->routes[$method]))
        {
            foreach ($this->routes[$method] as $route => $func)
            {
                if (preg_match($route, $this->request->path(), $matches))
                {
                    $page_found = true;
                    array_shift($matches);
                    $parameters_array = array_merge([$this], $matches);
                    call_user_func_array($func, $parameters_array);
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
        http_response_code(404);
        $this->render_template('errors/404.html');
        return true;
    }
}