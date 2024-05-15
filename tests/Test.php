<?php

namespace Tests;

use Debian\MvcTemplate\Models\Model;
use Debian\MvcTemplate\Models\Tasks;
use Debian\MvcTemplate\Database\Connection;
use Debian\MvcTemplate\Controllers\Controller;


class Test
{
    public static function main()
    {
        $date = date('Y-m-d', strtotime("12/31/2024"));

        $args = [
            "taskname" => "task1",
            "description" => "lorem ipsum dolor",
            "duedate" => $date,
            "priority" => "Medium",
            "status" => "Todo"
        ];

        //database
        $db = new Connection();

        //model
        $tasks = new Tasks($args);
        $tasks->setDatabaseConnection($db);

        //controller
        $cn = new Controller($tasks);
        $cn->setTask($args);
        $cn->saveTask();

        $args = [
            "taskname" => "task2",
            "description" => "lorem ipsum dolor",
            "duedate" => $date,
            "priority" => "Medium",
            "status" => "Todo"
        ];

        $cn->updateTask($args);

        $cn->deleteTask();
    }
}