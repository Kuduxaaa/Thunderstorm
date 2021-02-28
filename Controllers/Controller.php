<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package App
 */

namespace App;
use App\Modules\Router;

class Controller
{
	public static function index(Router $router)
	{
		return $router->render_template('index.html.twig', ['msg' => 'Thunderstorm v1.4']);
	}
}
