<?php

define('DB_PASSWORD', ''); // მონაცემთა ბაზის პაროლი
define('DB_USERNAME', 'root'); // მონაცემთა ბაზის მომხმარებლის სახელი
define('DB_NAME', 'app'); // მონაცემთა ბაზის სახელი

// Debug რეჟიმი. 1: ჩართული; 2: გამორთული
// როდესაც Debug რეჟიმი ჩართულია მოხდება
// ყველა შეცდომის რეპორტი ხოლო როცა გამორთულია
// ყველა შეცდომა დაიფარება
define('DEBUG_MODE', '1');

ini_set('display_errors', DEBUG_MODE);
ini_set('display_startup_errors', DEBUG_MODE);
error_reporting(((DEBUG_MODE == 1) ? E_ALL : 0));