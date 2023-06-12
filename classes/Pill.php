<?php
    include_once("bootstrap.php");
    class Pill{
        private $pillName;
        private $image;
        private $weekday;
        private $time;
        private $childId;

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

        public function save(){
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO pills (pillName, image, weekday, time, child_id) VALUES (:pillName, :image, :weekday, :time, :child_id)");
            $statement->bindValue(":pillName", $this->getPillName()); 
            $statement->bindValue(":image", $this->getImage());
            $statement->bindValue(":weekday", $this->getWeekday());
            $statement->bindValue(":time", $this->getTime());
            $statement->bindValue(":child_id", $this->getChild());
            return $statement->execute();
        }

        public static function getAll(){
            $conn = Db::getInstance();
            $statement = $conn->prepare("SELECT * FROM pills");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>