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
    <title>Dashboard</title>
    <style>
        body{
            background-color: #FFECC3;
        }
        main{
            margin-top: 40%;
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
        <img src="uploads/profile.jpg" alt="#">
        <h3>Tanja Smeets</h3>
    </div>
    <div class="kids">
        <div>
            <img src="uploads/profile.jpg" alt="#">
            <h3>Wolf Peeters</h3>
        </div>
        <div>
            <img src="uploads/profile.jpg" alt="#">
            <h3>Margot Nootens</h3>
        </div>
    </div>
    </main>
</body>
</html>