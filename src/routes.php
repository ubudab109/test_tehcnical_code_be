<?php

namespace Test;

use Test\Controllers\CalculateController;
use Test\Router;

$router = new Router();

$router->addRoute('/ganjil', CalculateController::class, 'bilanganGanjil', 'POST');
$router->addRoute('/prima', CalculateController::class, 'bilanganPrima', 'POST');
$router->addRoute('/segitiga', CalculateController::class, 'segitiga', 'POST');

