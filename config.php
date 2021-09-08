<?php

define('SITE_NAME', 'Thunderstom');

define('DB_HOST', 'localhost');
define('DB_NAME', 'nsec');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_PORT', '3306');

define('DEBUG_MODE', '1');

ini_set('display_errors', DEBUG_MODE);
ini_set('display_startup_errors', DEBUG_MODE);

error_reporting(((DEBUG_MODE == 1) ? E_ALL : 0));
