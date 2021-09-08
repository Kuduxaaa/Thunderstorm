<?php

/**
 * @author Kuduxaaa <nikakuduxashvili0@gmail.com>
 * @package Thunderstorm
 */

namespace Thunderstorm;

class Application
{
    public static $ROOT_DIR;
    public static Application $app;
    public Router $router;

    public function __constructor($root_path)
    {
        self::$app = $this;
        self::$ROOT_DIR = $root_path;

        $this->router = new Router($this->request);
    }

    public function run()
    {
        // ToDo
    }

    public function maintainfe()
    {

    }
}
