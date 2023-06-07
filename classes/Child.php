<?php
class Child extends User {

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
}