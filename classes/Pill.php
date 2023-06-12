<?php
    include_once("bootstrap.php");
    class Pill{
        private $pillName;
        private $image;
        private $weekday;
        private $time;
        private $childId;
        private $parentId;

        public function setPillName($pillName){
            if(empty($pillName)){
                throw new Exception("Pill name is not valid.");
                return false;
            }
            else{
            $this->pillName = $pillName;
            }
        }
        public function getPillName(){
            return $this->pillName;
        }

        public function setImage($image){
            if(empty($image)){
                throw new Exception("Image is not valid.");
                return false;
            }
            else{
            $this->image = $image;
            }
        }
        public function getImage(){
            return $this->image;
        }

        public function setWeekday($weekday){
            if(empty($weekday)){
                throw new Exception("Weekday is not valid.");
                return false;
            }
            else{
            $this->weekday = $weekday;
            }
        }
        public function getWeekday(){
            return $this->weekday;
        }

        public function setTime($time){
            if(empty($time)){
                throw new Exception("Time is not valid.");
                return false;
            }
            else{
            $this->time = $time;
            }
        }
        public function getTime(){
            return $this->time;
        }
        public function setChild($childId){
            if(empty($childId)){
                throw new Exception("Child is not valid.");
                return false;
            }
            else{
            $this->childId = $childId;
            }
        }
        public function getChild(){
            return $this->childId;
        }
        public function setParent($parentId){
            if(empty($parentId)){
                throw new Exception("Child is not valid.");
                return false;
            }
            else{
            $this->parentId = $parentId;
            }
        }
        public function getParent(){
            return $this->parentId;
        }

        public function save(){
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO pills (pillName, image, weekday, time, child_id, parentId) VALUES (:pillName, :image, :weekday, :time, :child_id, :parentId)");
            $statement->bindValue(":pillName", $this->getPillName()); 
            $statement->bindValue(":image", $this->getImage());
            $statement->bindValue(":weekday", $this->getWeekday());
            $statement->bindValue(":time", $this->getTime());
            $statement->bindValue(":child_id", $this->getChild());
            $statement->bindValue(":parentId", $this->getParent());
            return $statement->execute();
        }

        public static function getAll($childId){
            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM pills where child_id = :child_id");
            $statement->bindValue(":child_id", $childId); 
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function getPills($parentId){
            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM pills where parentId = :parentId");
            $statement->bindValue(":parentId", $parentId); 
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>