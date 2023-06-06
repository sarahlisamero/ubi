<?php
  include_once("bootstrap.php");

    session_start();
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user = new User();
    
        $email = $_SESSION['email'];
        $password = $_POST["password"];
    
        $user->setEmail($email);
        $user->setPassword($password);
    
        if ($user->canLogin($email, $password)) {
            $_SESSION['email'] = $email;
            header("Location: homeParents.php");
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
    <title>password parrents</title>
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 120px;
        }
        h3{
            font-family: "futura-pt", sans-serif;
            font-weight: bold;
        }
        p{
            font-family: "futura-pt", sans-serif;
        }
        .next{
            display: flex;
        }
        .next img {
            width: 200px;
        }
        .form{
            background-color: #BEEEE0;
            padding: 10px 20px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form input{
            width: 80%;
            height: 2em;
            margin-bottom: 1em;
            border-radius: 10px;
            border: none;
        }
        .form button{
            background-color: #95C53D;
            border: none;
            color: #F6F6F6;
            padding: 8px 10px;
            border-radius: 10px
        }
    </style>
</head>
<body>
    <div class="next">
        <div>
            <img src="img/avatar1.png" alt="">
        </div>
        <div>
            <h3>Hey!</h3>
            <p>Geef hieronder het wachtwoord in van je profiel. We doen dit als extra beveiliging,
                zodat er geen veranderingen gebeuren zonder toezicht. 
            </p>
        </div>
    </div>

    <div class="form">
        <p>
            Voeg hier je wachtwoord in
        </p>
        <div>
            <form action="#" method="post">
                <input type="password" name="password">
                <button type="submit" name="">Ok</button>
            </form>
        </div>
    </div>
</body>
</html>