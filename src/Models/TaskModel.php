<?php

namespace App\Models;

use App\Controllers\HomepageController;

class TaskModel {

    private \PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getTasks(): array
    {
        $query = $this->db->prepare("SELECT `task` FROM `to-do-list` WHERE `completed`=0");
        $query->execute();
        return $query->fetchAll();
    }

    public function addTask($task) {
        if($task !== '') {
            $query = $this->db->prepare("INSERT INTO `to-do-list` (`task`, `completed`) VALUES (:task, 0)");
            $query->bindParam(':task', $task);
            $query->execute();
        }
    }

    public function markAsCompleted($completedTasks) {
        foreach ($completedTasks['completedTasks'] as $completedTask) {
            $query = $this->db->prepare("UPDATE `to-do-list` SET `completed` = 1 WHERE `task` = :completedTask");
            $query->bindParam(':completedTask', $completedTask);
            $query->execute();
        }}

    public function getCompletedTasks(): array
    {
        $query = $this->db->prepare("SELECT `task` FROM `to-do-list` WHERE `completed`=1");
        $query->execute();
        return $query->fetchAll();
    }

    public function removeTasks($tasksToDelete) {
        foreach ($tasksToDelete['tasksToDelete'] as $taskToDelete) {
            $query = $this->db->prepare("DELETE FROM `to-do-list` WHERE `task` = :taskToDelete");
            $query->bindParam(':taskToDelete', $taskToDelete);
            $query->execute();
        }}
}