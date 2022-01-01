<?php
define('BASE_PATH', __DIR__);
define('BASE_APP', BASE_PATH.'/mvc');
define('UPLOAD_DIR', BASE_PATH.'/public/uploads/');
define('BASE_URL', 'http://chien-enpii.com/first-project');

require_once BASE_APP."/Middleware.php";
session_set_cookie_params(0, "/"); 
session_start();

$server = new Server();
?>
