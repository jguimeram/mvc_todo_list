<?php

namespace Debian\MvcTemplate\Controllers;

use Exception;
use Debian\MvcTemplate\Models\Model;
use Debian\MvcTemplate\Routes\Router;

class Controller
{
    protected array $task;
    protected $model;

    public static function index(Router $router)
    {
        $router->render('home/index');
    }
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function setTask(array $newTask)
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
    }

    public function find()
    {
        $this->model->select();
    }
}