<?php

namespace Debian\MvcTemplate\Database;

use Debian\MvcTemplate\Interfaces\Services;
use PDO;
use PDOException;


class Connection
{

    private $pdo;
    private $dsn = 'mysql:host=localhost;dbname=todolist';
    private $username = 'root';
    private $password = 'admin84';


    public function database()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            // Additional configuration or setup if needed
        } catch (PDOException $e) {
            // Handle connection error
            die("Connection failed: " . $e->getMessage());
        }
        return $this->pdo;
    }
}