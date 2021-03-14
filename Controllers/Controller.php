<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm\Controllers;
use Thunderstorm\Router;

class Controller
{

	public static function index (Router $router)
	{
		$requested_headers = $router->getRequestHeaders();
		$registered_routes = $router->getAllRoute();
		$database = $router->database;
		$router->renderTemplate('index.html.twig', [
			'msg' => 'Thunderstorm v1.4'
		]);
	}
}