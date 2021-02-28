<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Modules\Router;
use App\Modules\Database;
use App\Modules\ErrorHandler;
use App\Modules\Firewall;
use App\Controller;


$eh = new ErrorHandler();
$db = new Database();
$waf = new Firewall();
$waf->Run();


$router = new Router($db);
$router->add('/', [Controller::class, 'index'], 'get');
$router->run();