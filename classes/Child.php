<?php
class Child extends User {

    private $weekendHour;
    private $weekdayHour; 

    
    function getAllChild(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM children WHERE parentId = :parentId");
        $statement->bindValue(':parentId', $_SESSION["email"]);
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }
    function getChild($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM children WHERE id = :childId");
        $statement->bindValue(':childId', $childId);
        $statement->execute();
        $child = $statement->fetch(PDO::FETCH_ASSOC);
        return $child;    
    }
    function buyBoost($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE children SET score = score - :score WHERE id = :id");
        $statement->bindValue(":score", 5);
        $statement->bindValue(":id", $childId);
        $statement->execute();
    }
    public function checkIfCanBuy($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT score >= :score AS can_buy FROM children WHERE id = :id");
        $statement->bindValue(":score", 5);
        $statement->bindValue(":id", $childId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function setWeekendHour($weekendHour)
    {
        $this->weekendHour = $weekendHour;
        return $this;
    }
    public function getWeekendHour()
    {
        return $this->weekendHour;
    }

    public function getWeekdayHour()
    {
        return $this->weekdayHour;
    }
    public function setWeekdayHour($weekdayHour)
    {
        $this->weekdayHour = $weekdayHour;

        return $this;
    }
    public function save(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE bedtime SET weekdayHour = :weekdayHour AND weekendHour = :weekendHour WHERE childId = :childId");
        $statement->bindValue(":weekendHour", $this->getWeekendHour()); 
        $statement->bindValue(":weekdayHour", $this->getWeekdayHour());
        $statement->bindValue(":childId", $_GET['child_id']);
        return $statement->execute();
    }

    public function getTaskChild(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE bedtime SET weekdayHour = :weekdayHour AND weekendHour = :weekendHour WHERE childId = :childId");
        $statement->bindValue(":weekendHour", $this->getWeekendHour()); 
        $statement->bindValue(":weekdayHour", $this->getWeekdayHour());
        $statement->bindValue(":childId", $_GET['child_id']);
        return $statement->execute();
    }

    public function getAllMorning($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.children_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.children_id = :children_id WHERE taskchildren.task_time = :task_time");
        $statement->bindValue(":task_time", "ochtend");
        $statement->bindValue(":children_id", $childId); 
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function getAllMidday($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.children_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.children_id = :children_id WHERE taskchildren.task_time = :task_time");
        $statement->bindValue(":task_time", "middag"); 
        $statement->bindValue(":children_id", $childId);
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function getAllEveningy($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.children_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.children_id = :children_id WHERE taskchildren.task_time = :task_time");
        $statement->bindValue(":task_time", "avond"); 
        $statement->bindValue(":children_id", $childId);
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function completeTask($childId, $taskId) {
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO completed (child_id, users_id, task_id, time_completed) VALUES (:child_id, :users_id, :task_id, NOW())");
        $statement->bindValue(":child_id", $childId);
        $statement->bindValue(":users_id", $_SESSION['email']);
        $statement->bindValue(":task_id", $taskId);
        return $statement->execute();
    } 

    public function addPoints($childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE children SET children.score = children.score + 5 WHERE children.id = :id");
        $statement->bindValue(":id", $childId);
        $statement->execute();
    }
    
    public function updateScore() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_SESSION['child_id'])) {
                $childId = $_SESSION['child_id'];
                $this->addPoints($childId);
            }
        }
    }
}