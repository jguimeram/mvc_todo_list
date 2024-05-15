<?php
require_once("../../vendor/autoload.php");

use Debian\MvcTemplate\Routes\Router;

use Debian\MvcTemplate\Controllers\Controller;

$router = new Router;

$router->get("/", [Controller::class, 'index']);

$router->run();