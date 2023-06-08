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
}