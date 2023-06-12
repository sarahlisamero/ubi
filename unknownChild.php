<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    var_dump($email);
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }

    if(isset($_POST["toevoegen"])){
        $u = new User;
        $parentId = $_SESSION['email'];
        $u->addChild($parentId);
        header("Location: dashboard.php");
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
    <title>Add child</title>
    <style>
         body{
            margin-top:10%; /*nieuw: tijdelijke opl*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
            color:#95C53D;
        }
        label, input{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        .container{
            background-color: #f6f6f6;
            width:400px;
            border-radius: 10px;
        }
        h3{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            padding-left:40px;
            padding-top: 40px;
        }
        form{
            padding-left:40px;
            padding-right: 40px;
            padding-bottom: 40px;
        }
        input{
            border-radius: 10px;
            border: none;
            margin-top:15px;
            margin-bottom: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            width:320px;
        }
        .btn{
            background-color: #95C53D;
            color: #f5f5f5;
            font-weight: bold;
        }
        .ghostbtn{
            background-color: #ffffff;
            color: #95C53D;
            font-weight: bold;
            border-color: #95C53D;
            border: solid 4px;
        }
        a{
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            font-size: 14px;
            color: #95C53D;
            text-decoration: none;
            text-align: center;
        }
        header{
            display: flex;
            width:400px;
            margin-left: 20px;
            margin-top: 20px;
        }
        img{
            width:200px;
        }
        .help{
            display: flex;
            justify-content: center;
        }
        @media (min-width: 750px){
           .container, header{
               width: 600px;
           }
           header{
            align-items: center;
            justify-content: space-between;
           }
           header img{
               width: 300px;
           }
           input{
                width: 520px;
           }
        }
    </style>
</head>
<body>
    <header>
        <h1>Nieuw kind toevoegen</h1>
        <div>
            <img src="img/avatarcrop.png" alt="piep">
        </div>
    </header>
    <div class="container">
        <h3>Kind 1</h3>
        <form action="" method="post">
            <div>
                <label for="username">Maak een gebruikersnaam aan voor uw kind</label></br>
                <input type="text" id="username" name="username" placeholder="gebruikersnaam" required> 
            </div>
            <div>
                <label for="ubicode">Voornaam kind</label></br>
                <input type="text" id="ubicode" name="firstname" placeholder="voornaam" required>
            </div>
            <div class="help">
                <a>Hulp nodig?</a>
            </div>
            <div>
                <input class="ghostbtn" type="submit" value="Nog een kind toevoegen">
            </div>
            <div>
                <input class="btn" type="submit" value="Toevoegen" name="toevoegen">
            </div>
        </form>
    </div>
</body>
</html>