<?php

use Thunderstorm\Controllers\DefaultController;
use Thunderstorm\Router;

Router::add('/', 'DefaultController@index', 'GET');
