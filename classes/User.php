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

    public function addChild(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO children (username, firstName, parentId, score, ubicode) VALUES (:username, :firstName, :parentId, :score, :ubicode)");
        $statement->bindValue(":username", $_POST['username']); 
        $statement->bindValue(":firstName", $_POST['firstname']);
        $statement->bindValue(":parentId", $_SESSION['email']);
        $statement->bindValue(":score", 0);
        $statement->bindValue(":ubicode", ab123);
        return $statement->execute(); 
    }
}

