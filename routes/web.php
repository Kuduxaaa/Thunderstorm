<?php

use Thunderstorm\Controllers\DefaultController;
use Thunderstorm\Database;
use Thunderstorm\Router;

$db = new Database();
$router = new Router($db);

$router->add('/', [DefaultController::class, 'index'], 'GET');
$router->resolve();
