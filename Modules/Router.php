<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package App
 */

namespace App\Modules;

class Router
{
	private $method;
	private $croute;
	private $routes;
	public $db = null;

	function __construct(Database $db)
	{
		$this->routes = array();
		$this->method = strtolower($_SERVER['REQUEST_METHOD']);
		$this->croute = parse_url($_SERVER['REQUEST_URI'])['path'];
		$this->db = $db;
	}

	public function add($route, $func, $method)
	{
		$method = strtolower($method);
		$route = preg_replace('/\//', '\\/', $route);
		$route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);
		$route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
		$route = '/^' . $route . '$/i';
		$this->routes[$method][$route] = $func;
	}

	public function run()
	{
		$route_found = false;
		foreach ($this->routes[$this->method] as $route => $func) {
			if(preg_match($route, $this->croute, $matches))
			{
				$route_found = true;
				array_shift($matches);
				$parameters_array = array_merge([$this], $matches);
				call_user_func_array($func, $parameters_array);
				break;
			}
		}

		if (!$route_found)
		{
			$this->render_error(404, 'Not Found!');
		}
	}

	// Without twig
	// public static function render_view($view_name, $_DATA = [])
	// {
	// 	ob_start();
	// 	$title = self::$title;
	// 	include_once __DIR__ . "/../views/$view_name.php";
	// 	$content = ob_get_clean();
	// 	include_once __DIR__ . '/../views/layouts/_Main.php';
	// }

	public static function render_error($code, $msg='Error')
	{
		self::render_template('layouts/_Error.html.twig',
								['code' => $code, 'msg' => $msg]);
	}

	public static function render_code_error($_DATA)
	{
		http_response_code(500);
		include_once __DIR__ . '/../views/layouts/_CodeError.php';
		exit;
	}

	// with twig
	public static function render_template($template, $args)
	{
		$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/Views/');
		$twig = new \Twig\Environment($loader);
		echo $twig->render($template, $args);
	}
}
