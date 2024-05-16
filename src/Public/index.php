<?php
require_once("../../vendor/autoload.php");

use Debian\MvcTemplate\Routes\Router;

use Debian\MvcTemplate\Controllers\TaskController;

$router = new Router;

$router->get("/", [TaskController::class, 'index']);
$router->post("/create", [TaskController::class, 'create']);
$router->run();