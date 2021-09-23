<?php

namespace App\Factories;

use App\Models\TaskModel;

class TaskModelFactory
{
    public function __invoke()
    {
        $db = new \PDO ('mysql:host=127.0.0.1; dbname=to-do-list', 'root', 'password');
        return new TaskModel($db);
    }
}