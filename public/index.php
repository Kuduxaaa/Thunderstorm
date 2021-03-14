<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Thunderstorm\Router;
use Thunderstorm\Database;
use Thunderstorm\Firewall;
use Thunderstorm\Controllers\Controller;

$waf = new Firewall();
$waf->run();

$db = new Database();
$router = new Router($db);

$router->add('/', [Controller::class, 'index'], 'GET');
$router->Run();