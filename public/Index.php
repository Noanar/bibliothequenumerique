<?php
define('BASE_PATH', dirname(__DIR__));
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once BASE_PATH . '/core/Router.php';
require_once BASE_PATH . '/core/Authentification.php';

$router = new Router();
$router->handleRequest();
