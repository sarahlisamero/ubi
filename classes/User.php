<?php
include_once("bootstrap.php");

class User{
    private $email;
    private $password;

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

    public function save(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
        $statement->bindValue(":email", $this->getEmail()); 
        $statement->bindValue(":password", $this->getPassword());
        return $statement->execute(); 
        //email maar 1 gebruiken -> nog developen
    }
}
