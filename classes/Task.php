<?php

class Task {

    public function getTaskUrl($taskId) {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT taskchildren.*, task.url FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id WHERE task_id = :task_id");
        $statement->bindValue(":task_id", $taskId);
        $statement->execute();
        $task = $statement->fetch(PDO::FETCH_ASSOC);
        
        if ($task) {
            return $task['url'];
        } else {
            return null; // or handle the case when the task ID doesn't exist
        }
    }

    public function getAllTask(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM task");
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }
}


