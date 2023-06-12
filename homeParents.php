<?php 
include_once("bootstrap.php");
    session_start();
    /*if(!isset($_SESSION['username'])){
        header("location: login.php");
    };*/
    //$allTasks = Task::getTasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Home</title>

    <style>
        form input{
            width:320px;
            border: none;
            background-color: #f5f5f5;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:40px;
        }
        form button{
            border: none;
            background-color: #f5f5f5;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:40px;
        }
        form{
            display:flex;
            align-items:center;
            justify-content: center;
            margin-top: 50px;
        }
        header{
            padding-top:20px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            font-family: "futura-pt", sans-serif;
            font-size:20px;
        }
        header img{
            width: 200px;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 70px;
        }
        .container li{
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content: flex-start;
            padding-left: 30px;
            width: 320px;
            height: 80px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .container img{
            width:50px;
        }
        .container a{
            padding-left: 20px;
        }
        .blue{
            background-color: #ECFFFA;
        }
        .yellow{
            background-color: #FFECC3;
        }
        .pink{
            background-color: #FFDED8;
        }
        a{
            text-decoration: none;
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
        }

        @media(min-width:450px){
            header img{
                width:300px;
            }
            form input{
                width:600px;
            }
            .container li{
                width: 600px;
            }
        }
    </style>
</head>
<body>
    <form>
        <input type="text" id="search" name="search">
        <button type="button" onclick="search()">Go</button>
    </form>
    <header>
        <img src="img/avatar1.png" alt="avatar">
        <p><strong>Kies een taak of les </br></strong> om te in te plannen</p>
    </header>
    <div class="container" class="search">
        <li class="blue">
            <img src="img/drugc.png" alt="drugs">
            <a href="uploadPills.php">Pilletjes</a>
        </li>
        <li class="pink">
            <img src="img/moonc.png" alt="bed">
            <a href="bedtimeParents.php">Bedtijd</a>
        </li>
        <li class="yellow">
            <img src="img/drinkc.png" alt="water">
            <a href="waterParents.php">Water drinken</a>
    </li>
    </div>
        <?php include_once("nav.php"); ?>
</body>
</html>