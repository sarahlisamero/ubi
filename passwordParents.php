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
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        h3{
            font-family: "futura-pt", sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
        }
        p{
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing: 1px;
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
            margin-top: 2em;
            width: 450px;
        }
        .form input{
            width: 400px;
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
        @media (min-width: 550px){
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .next p{
                width: 300px;
            }
            .next{
                display: flex;
                justify-content: center;
            }
            .form{
                display: flex;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
            }
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
        <div>
            <p>
                Voeg hier je wachtwoord in
            </p>
        </div>
        <div>
            <form action="#" method="post">
                <input type="password" name="password">
                <button type="submit" name="">Ok</button>
            </form>
        </div>
    </div>
</body>
</html>