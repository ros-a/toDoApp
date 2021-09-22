<?php

namespace App\Models;

class TaskModel {

    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks(): array
    {
        $query = $this->db->prepare('SELECT `toDoTasks`, `completed` FROM `to-do-list`');
        $query->execute();
        return $query->fetchAll();
    }
}