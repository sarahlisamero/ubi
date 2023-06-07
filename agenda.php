<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Agenda</title>
    <style>
         body{
            margin-left: 20px;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
        }
        header{
            display: flex;
            margin-top: 20px;
        }
        header img{
            width:40px;
            height:40px;
        }
        header div{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            padding-left: 20px;
            padding-right: 20px;
            margin-right: 20px;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
        }
        h2, h3{
            font-family: "futura-pt-bold", sans-serif;
            font-style: normal;
            letter-spacing:1px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        .next a{
            text-decoration: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
            background-color: #95C53D;
            color: #F6F6F6;
            border-radius: 10px;
            margin-bottom: 1em;
            padding-top: 0.6em;
            padding-bottom: 0.8em;
            padding-left: 1em;
            padding-right: 1em;
        }
        a img{
            width: 25px;
        }

        .kalender{
            background-color: #CB97E2;
            margin-left: -1.2em;
            padding-left: 2em;
            margin-right: -1.27em;
            padding-right: 1.2em;
            padding-top: 2em;
            padding-bottom: 2em;
        }

        .next{
            display: flex;
            justify-content: space-between;
            margin-bottom: 1em;
        }
        .agenda img{
            width: 430px;
        }
        .agenda{
            margin-bottom: 2em;
        }
        ul{
            list-style-type: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
        }
        .planning li{
            background-color: #BEEEE0;
            padding-left: 1.5em;
            margin-left: -2.4em;
            padding-top: 0.8em;
            padding-bottom: 0.8em;
            border-radius: 10px;
        }
        .plus a{
            background-color: #CB97E2;
            border-radius: 50px;
            padding-top: 0.8em;
            padding-bottom: 0.6em;
            padding-left: 0.8em;
            padding-right: 0.8em;
            position: fixed;
            top: 90%;
            right: 0;
        }
        .plus{
            margin-bottom: 2em;
            margin-top: 1em;
            float: right;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="img/agendabw.png" alt="agenda icon">
        </div>
        <h1>Agenda</h1>
    </header>
    <div class="kalender">
        <div class="next">
            <h3>Juni 2023</h3>
            <a href="#">downloaden <img src="img/downloadFile.png" alt=""></a>
        </div>
        <div class="agenda">
            <img src="img/agendaJuni.png" alt="">
        </div>
    </div>
    <div class="planning">
        <div>
            <h2>Planning</h2>
        </div>
        <div>
            <h3>Ochtend</h3>
        </div>
        <ul>
            <li>Tanden poetsen</li>
        </ul>
    </div>
    <div class="plus">
        <a href="#"><img src="img/plusbw.png" alt=""></a>
    </div>
</body>
</html>