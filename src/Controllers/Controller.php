<?php

namespace Debian\MvcTemplate\Controllers;

use Exception;
use Debian\MvcTemplate\Models\Model;
use Debian\MvcTemplate\Routes\Router;

class Controller
{
    protected $model;
    protected $task;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function index(Router $router)
    {
        $data = $this->model->all();
        $router->render('home/index', $data);
    }

    public function create(Router $router)
    {
    }

    /* public function setTask(array $newTask)
    {
        $this->task = $newTask;
    }

    public function getTask(): array
    {
        return $this->task;
    }

    public function saveTask()
    {
        $this->model->save();
    }

    public function updateTask($args)
    {
        $this->model->update($args);
    }

    public function deleteTask()
    {
        $this->model->delete();
    } */
}