<?php
include_once("bootstrap.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Dashboard</title>
    <style>
        body{
            background-color: #FFECC3;
        }
        main{
            margin-top: 40%;
        }
        h2{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
            text-align: center;
        }
        h3{
            font-family: "sofia-pro", sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing:1px;
            text-align: center;
        }
        .kids{
            display: flex;
            justify-content: center;
            gap: 50px;
        }
        .kids div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img{
            max-width:150px;
            border-radius: 10px;
        }
        .parent{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .edit{
            display: flex;
            align-items: center;
        }
        .editbtn img{
            width: 40px;
            height: 40px;
        }
        .editbtn{
            align-self: flex-start;
        }
        @media (min-width: 800px){
            main{
                margin-top:20%;
            }
            img{
                max-width:200px;
            }
        }
    </style>
</head>
<body>
    <main>
    <h2>Wie ben jij?</h2>
    <div class="parent">
        <div class="edit">
            <a href=" passwordParents.php"><img src="uploads/profile.jpg" alt="#"></a>
            <a class= "editbtn" href="editDashboard.php"><img src="img/edit.png" alt="edit"></a>
        </div>
        <h3>Tanja Smeets</h3>
    </div>
    <div class="kids">
        <div>
            <a href="home.php"><img src="uploads/profile.jpg" alt="#"></a>
            <h3>Wolf Peeters</h3>
        </div>
        <div>
            <a href="home.php"><img src="uploads/profile.jpg" alt="#"></a>
            <h3>Margot Nootens</h3>
        </div>
    </div>
    </main>
</body>
</html>