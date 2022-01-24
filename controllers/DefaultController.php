<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 */

namespace Thunderstorm\Controllers;

use Thunderstorm\Router;

class DefaultController
{
    public static function index(Router $router)
    {
        // var_dump($router->request->get('admin'));
        // $router->response->render_template('index.html');
        // $router->response->render_json(['hello', 'world']);
        // $router->response->render_json(['hello', 'world'], 200);
        $router->response->render_template('index.html');
    }
}
