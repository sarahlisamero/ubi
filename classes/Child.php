<?php
class Child extends User {

    function getAllChild(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("SELECT * FROM children");
        $statement->execute();
        $children = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $children;
    }
}