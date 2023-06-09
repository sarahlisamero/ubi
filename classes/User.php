<?php
include_once("bootstrap.php");

class User{
    private $email;
    private $password;
    private $username;

    public function setEmail($email){
        if(strpos($email, '@') === false || empty($email)){
            throw new Exception("Email is not valid.");
            return false;
        }
        else{ 
        $this->email = $email;
        }
        
    }
    public function getEmail(){
        return $this->email;
    }
   
    public function setPassword($password){
        if(strlen($password) <= 5 || empty($password)){
            throw new Exception("Password is not valid.");
            return false;
        }
        else{
        $options = [
            'cost' => 12,
            ];
        $this->password = password_hash($password, PASSWORD_DEFAULT, $options);
        }
    }

    public function getPassword(){
        return $this->password;
    }

    public function canLogin($email, $password) {
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT email, password FROM users WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        $row = $statement->fetch();

        if ($row) {
            return password_verify($password, $row['password']);
        }

        return false;
    }

    public function setUsername($username){
        if(empty($username)){
            throw new Exception("Username is not valid.");
            return false;
        }
        else{
        $this->username = $username;
        }
    }
    public function getUsername(){
        return $this->username;
    }
    
    public function save(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO users (email, password, username) VALUES (:email, :password, :username)");
        $statement->bindValue(":email", $this->getEmail()); 
        $statement->bindValue(":password", $this->getPassword());
        $statement->bindValue(":username", $this->getUsername());
        return $statement->execute(); 
    }

    public function getAllUser(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(":email", $_SESSION['email']);
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function addChild($parentId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO children (username, firstName, parentId, score, ubicode, avatar) VALUES (:username, :firstName, :parentId, :score, :ubicode, :avatar)");
        $statement->bindValue(":username", $_POST['username']); 
        $statement->bindValue(":firstName", $_POST['firstname']);
        $statement->bindValue(":parentId", $parentId);
        $statement->bindValue(":score", 0);
        $statement->bindValue(":ubicode", "ab123");
        $statement->bindValue(":avatar", "img/avatar1.png");
        return $statement->execute(); 
    }


    public function waterAmount($childId, $selectedValue){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO water (childId, amount) VALUES (:childId, :amount)");
        $statement->bindValue(":childId", $childId); 
        $statement->bindValue(":amount", $selectedValue); 
        return $statement->execute(); 
    }

    function assignTask($childId, $taskId, $time, $weekdays, $usersId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO taskchildren (children_id, task_id, task_time, weekday, users_id) VALUES (:children_id, :task_id, :task_time, :weekday, :users_id)");
        $statement->bindValue(":children_id", $childId); 
        $statement->bindValue(":task_id", $taskId); 
        $statement->bindValue(":task_time", $time); 
        $statement->bindValue(":weekday", $weekdays); 
        $statement->bindValue(":users_id", $usersId); 
        return $statement->execute(); 
    }

    public function getAllMornings($parentId, $childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.users_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.users_id = :users_id WHERE taskchildren.task_time = :task_time AND taskchildren.children_id = :children_id");
        $statement->bindValue(":task_time", "ochtend");
        $statement->bindValue(":users_id", $parentId); 
        $statement->bindValue(":children_id", $childId); 
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function getAllMiddays($parentId, $childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.users_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.users_id = :users_id WHERE taskchildren.task_time = :task_time AND taskchildren.children_id = :children_id");
        $statement->bindValue(":task_time", "middag"); 
        $statement->bindValue(":users_id", $parentId);
        $statement->bindValue(":children_id", $childId); 
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function getAllEvenings($parentId, $childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT DISTINCT taskchildren.*, task.taskName, taskchildren.users_id, task.icon, task.background_color FROM taskchildren INNER JOIN task ON taskchildren.task_id = task.id INNER JOIN children ON taskchildren.users_id = :users_id WHERE taskchildren.task_time = :task_time AND taskchildren.children_id = :children_id");
        $statement->bindValue(":task_time", "avond"); 
        $statement->bindValue(":users_id", $parentId);
        $statement->bindValue(":children_id", $childId); 
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }

    public function bedtime($day, $end, $childId){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO bedtime (weekdayHour, weekendHour, child_id) VALUES (:weekdayHour, :weekendHour, :child_id)");
        $statement->bindValue(":weekdayHour", $day); 
        $statement->bindValue(":weekendHour", $end); 
        $statement->bindValue(":child_id", $childId); 
        return $statement->execute(); 
    }
}

