<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");

require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
require 'src/routes.php';
$router->dispatch($uri, $method);