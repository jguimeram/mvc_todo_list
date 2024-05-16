<?php

namespace Debian\MvcTemplate\Controllers;

use Exception;
use Debian\MvcTemplate\Models\Model;
use Debian\MvcTemplate\Routes\Router;

class Controller
{
    protected $model;
    protected $task;

    public function createTask($task)
    {
        $this->task = $task;
        $this->model = new Model($this->task);
    }

    public function index(Router $router)
    {
        $this->model->all();
        $router->render('home/index');
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