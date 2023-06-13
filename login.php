<?php
 /*function canLogin($email, $password){
    require_once 'classes/Db.php'; 
    $conn = Db::getInstance();
    $statement = $conn->prepare("select * from users where email= :email");
    $statement->bindValue(":email", $email);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
    if(!$user){
      return false;
    }  
  
    $hash = $user['password'];
  
    if(password_verify($password, $hash) ){
      return true;
    } else{
      return false;
    }
  }
  
  if(!empty($_POST)){
    //er is verzonden
    $email= $_POST['email'];
    $password= $_POST['password'];
  
    if(canLogin($email, $password)){
      //inloggen
      session_start();
      $_SESSION['email'] = $email;
  
      header("Location: dashboard.php");
    } else{
      //error
      $error = true;
    }
  }*/

  include_once("bootstrap.php");

  $error_message = ""; // Variabele voor foutmelding


  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = new User();

    $email = $_POST["email"];
    $password = $_POST["password"];

    $user->setEmail($email);
    $user->setPassword($password);

    if ($user->canLogin($email, $password)) {
        session_start();
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
    } else {
        $error_message = "Invalid email address or password."; // Foutmelding toewijzen
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Login</title>
    <style>
      main{
        display:flex;
        justify-content: center;
      }
      .content{
        display: inline-block; 
        text-align: left;
      }
      .logoContainer{
        background-color: #f6f6f6;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-bottom: 80px;
      }
      .logo{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%; /*nieuw*/
        padding-top: 30px;
        padding-bottom: 30px;
      }
      h1{
        font-family: "futura-pt-bold", sans-serif;
        font-weight: 700;
        font-style: normal;
        color: #95C53D;
        font-size:32px;
      }
      p{
        font-family: "futura-pt", sans-serif;
        font-weight: 200;
        font-style: normal;
        font-size: 24px;
      }
      label, input, a{
        font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            margin-top:20px;
            margin-bottom:20px;
            color: #050505;
      }
      a{
        text-decoration: none;
        position: absolute;
        bottom: 10px;
      }
      strong{
        text-decoration: underline;
        color: #EDA713;
        font-weight: bold;
      }
      input{
        width:300px;
        padding:10px;
        border:none;
        border-radius: 10px;
        background-color: #f6f6f6;
      }
      .btn{
        background-color: #95C53D;
        color: #f5f5f5;
        font-family: "sofia-pro", sans-serif;
        font-weight: bold;
        width:320px;
      }
      @media (min-width: 500px){
        input{
          width:500px;}
        .btn{
          width:520px;
        }
      }
      @media (min-width: 900px){
        .logo{
          width: 20%;
        }
      }
    </style>
</head>
<body>
<div class="logoContainer">
    <img class="logo" src="img/logo.png" alt="logo">
</div>
<main>
    <div class="content">
        <form action="" method="post">
            <div class="login">
                <div>
                    <label for="email">Email</label></br>
                    <input type="text" id="email" name="email" placeholder="Email" required> 
                </div>
                <div>
                    <label for="password">Wachtwoord</label></br>
                    <input type="password" id="password" name="password" placeholder="Wachtwoord" required>
                </div>
            </div>
            <div>
                <input class="btn" type="submit" value="Log in">
            </div>
        </form>
        <a href="signup.php">Nog geen account? <strong> Registreer hier</strong></a>
    </div>
</main>
</body>
</html>