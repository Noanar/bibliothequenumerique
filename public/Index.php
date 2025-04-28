<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once '../core/Router.php';
require_once '../core/Authentification.php';

$router = new Router();
$router->handleRequest();
