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

use Thunderstorm\API\Api;

class Application
{
    public static $config;
    public Router $router;

    public function __construct($config)
    {
        self::$config = $config;
        $this->router = new Router();

        if (self::config('DEBUG')) {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }

    public function run()
    {
        require_once self::get_root_dir() . '/routes/web.php';
        $this->router->resolve();
    }

    public static function get_root_dir()
    {
        return dirname(__DIR__);
    }

    public static function config($key)
    {
        return self::$config[$key] ?? null;
    }

    public function maintaince()
    {
        $loader = new FilesystemLoader(self::get_root_dir() . '/core/system/templates');
        $twig = new Environment($loader);

        try {
            echo $twig->render('maintaince.html', array(
                'title' => 'Maintaince',
                'message' => 'The site is under maintaince. Please come back later.'
            ));

        } catch (LoaderErrorAlias | SyntaxError | RuntimeError $e) {
            die($e);
        }
    }
}
