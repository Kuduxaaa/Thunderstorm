<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package NSec
 */

namespace Thunderstorm;
use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use Exception;

class Router
{
	private $requestMethod;
	private $requestURI;
	private $routeList;
	public $requestedHeaders;
	public $database;

	public function __construct ($database)
	{
		$this->requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
		$this->requestURI = parse_url($_SERVER['REQUEST_URI'])['path'];
		$this->database = $database;
	}

	public function add ($route, $func, $method)
	{
		$route = preg_replace('/\//', '\\/', $route);
		$route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
		$route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
		$route = '/^' . $route . '$/i';
		
		if (is_array($method))
		{
			foreach($method as $meth)
			{
				$meth = strtolower($meth);
				$this->routeList[$meth][$route] = $func;
			}
		}
		else
		{
			$method = strtolower($method);
			$this->routeList[$method][$route] = $func;
		}
	}


	public static function renderTemplate ($template, $args = [])
	{
		$loader = new FilesystemLoader(dirname(__DIR__) . '/Views/');
		$twig = new Environment($loader);
		echo $twig->render($template, $args);
	}


	public function run ()
	{
		$page_found = false;
		if (isset($this->routeList[$this->requestMethod]))
		{
			foreach ($this->routeList[$this->requestMethod] as $route => $func)
			{
				if (preg_match($route, $this->requestURI, $matches))
				{

					array_shift($matches);
					$page_found = true;
					$parameters_array = array_merge([$this], $matches);
					call_user_func_array($func, $parameters_array);
					break;
				}
			}
		}
		else
		{
			$this->renderError(405, "Method Not Allowed");
		}

		if (!$page_found)
		{
			$this->renderError(404);
		}
	}

	public function renderError($code=404, $msg='Not Found')
	{
		http_response_code ((int) $code);
		$this->renderTemplate ('err.html.twig', [
	        'code' => (int) $code,
	        'msg' => $msg
	  	]);
	  	exit;
	}

	public function getAllRoute ()
	{
		return $this->routeList;
	}


	public function getRequestHeaders () 
	{
	    foreach($_SERVER as $key => $value) 
	    {
	        if (substr($key, 0, 5) <> 'HTTP_') 
	        {
	            continue;
	        }

	        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
	        $this->requestedHeaders[$header] = $value;
	    }

	    return $this->requestedHeaders;
	}
}