<?php
class Child extends User {

    function getAllChild(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM children");
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
}