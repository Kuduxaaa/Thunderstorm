<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';
include_once dirname(__DIR__) . '/config.php';

use Thunderstorm\Application;
use Thunderstorm\Router;

$app = new Application($config);
$app->run();
