<?php

namespace Debian\MvcTemplate\Controllers;

use Debian\MvcTemplate\Models\Tasks;
use Debian\MvcTemplate\Routes\Router;
use Debian\MvcTemplate\Controllers\Controller;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->model = new Tasks();
    }

    public function index(Router $router)
    {
        $data = $this->model->all();
        $router->render('home/index', $data);
    }

    public function create(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->save($_POST);
        }
    }

    public function redirect()
    {
        header('Location: /');
    }
}