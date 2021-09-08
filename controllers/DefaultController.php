<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 */

namespace Thunderstorm\Controllers;

use Thunderstorm\Router as Request;

class DefaultController
{
    public static function index(Request $request)
    {
        $request->render_template('index.html');
    }
}
