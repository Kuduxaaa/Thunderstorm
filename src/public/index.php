<?php

require_once dirname(__DIR__) . '/../vendor/autoload.php';

use Thunderstorm\Router;
use Thunderstorm\Database;
use Thunderstorm\Controllers\Controller;

$db = new Database();
$router = new Router($db);

$router->add('/', [Controller::class, 'index'], ['GET', 'POST']);
$router->Run();