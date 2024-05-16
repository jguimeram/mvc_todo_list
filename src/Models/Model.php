<?php

namespace Debian\MvcTemplate\Models;

use PDO;
use Debian\MvcTemplate\Database\Connection;

class Model
{

    protected string $table = "Tasks";
    protected string $query;
    protected $pdo;

    protected array $args;
    public function __construct()
    {
        $db = new Connection;
        $this->pdo = $db->database();
    }

    public function save($args)
    {
        $this->args = $args;

        $columns = $this->setColumns();

        $values = $this->setValues();

        $this->query = "INSERT INTO $this->table ($columns) VALUES ($values)";

        var_dump($this->execute());
    }
    public function update($args)
    {
        $this->args = $args;
        foreach ($this->args as $key => $value) {
            $values[] = "{$key}='{$value}'";
        }
        $this->query = "UPDATE $this->table SET ";
        $this->query .= join(', ', $values);
        $this->query .= " WHERE id = 1";
        echo $this->query;
        $this->execute();
    }

    public function all(): array
    {
        $this->query = "SELECT * from $this->table";
        $stmt = $this->pdo->prepare($this->query);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete()
    {
        $this->query = "DELETE FROM $this->table WHERE id = 1 LIMIT 1";
        return $this->execute();
    }
    public  function execute(): bool
    {
        $stmt = $this->pdo->prepare($this->query);
        return $stmt->execute();
    }

    protected function setColumns(): string
    {

        return implode(", ", array_keys($this->args));
    }

    protected function setValues(): string
    {
        return "'" . implode("', '", array_values($this->args)) . "'";
    }
}