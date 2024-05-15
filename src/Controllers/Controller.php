<?php

namespace Debian\MvcTemplate\Controllers;

use Debian\MvcTemplate\Models\Model;
use Exception;

class Controller
{
    protected array $task;
    protected $model;

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