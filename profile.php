<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }

    $parent = new User();
    $parents = $parent->getAllUser();

    $child = new Child();
    $children = $child->getAllChild();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Profiel</title>
</head>
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
        }
        header{
            display:flex;
            flex-direction: row;
            gap: 30px;
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
        .header .settings{
            height: 45px;
            margin-top: 1em;
        }
        section{
            background-color: #F6F6F6;
            border-radius: 10px;
            padding-left: 1em;
            padding-right: 1em;
            padding-bottom: 1em;
            padding-top: 1em;
            margin-top: 2em;
        }
        .info{
            display:flex;
            flex-direction: row;
        }
        .child img{
            width: 180px;
        }
        .stat{
            margin-left: 2em;
        }
        .stat img{
            width: 220px;
        }
        .child p{
            background-color: #CB97E2;
            padding-left: 0.8em;
            padding-right: 0.8em;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            border-radius: 10px;
            color: #F6F6F6;
        }
        ul{
            list-style-type: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
        }
        li{
            display: flex;
            flex-direction: row;
        }
        .pil{
            background-color: #BEEEE0;
            padding-left: 1em;
            padding-right: 1em;
            margin-left: -2.4em;
            border-radius: 10px;
            margin-top: 1em;
            margin-right: 1em;
        }
        .link a{
            background-color: #95C53D;
            color: #F5F5F5;
            font-weight: bold;
            padding-left:35%;
            padding-right:35%;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
            margin-top: 4em;
            border: none;
            text-decoration: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
        }
        .link{
            margin-bottom: 2em;
            margin-top: 2em;
        }
        .hidden{
            visibility: hidden;
        }
        #switch{
            background-color: #050505;
            display:inline-block;
            padding-top: 10px;
            padding-bottom: 15px;
            padding-left: 20px;
            padding-right: 20px;
            margin-left:20px;
            border-radius:10px;
            position: absolute;
            z-index: 1;
            margin-top: 70px;
        }
        #switch a{
            text-decoration: none;
            color: #f5f5f5;
            text-decoration: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
        }
        @media(min-width:650px){
            .info{
                display: flex;
                justify-content: center;
            }
            .list{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .list ul{
                margin-top: -1em;
            }
            .link{
                display: flex;
                justify-content: center;
                margin-top: -2em;
            }
        }
    </style>
<body>
    <header class="header">
        <?php foreach($parents as $p): ?>
            <h1><?php echo $p['username']; ?></h1>
        <?php endforeach; ?>

        <img src="img/arrowdown.svg" alt="arrow down">
        <img class="settings" src="img/settingsbw.png" alt="settings">
        <div id="switch" class="hidden">
            <a href="dashboard.php">Ga naar dashboard</a>
        </div>
    </header>

    <h2>Uw kind(eren)</h2>
    <?php foreach($children as $c): ?>
    <section>
        <div class="info">
            <div class="child">
                <h3><?php echo $c["firstName"]; ?></h3>
                <img src="img/pf.png" alt="">
                <p>Ubi-code: AB123</p>
            </div>
            <div class="stat">
                <h3>Deze week</h3>
                <img src="img/statistieken.png" alt="">
            </div>
        </div>
        <div class="list">
            <div>
                 <p>Vandaag:</p>
            </div>
            <div>
                <ul>
                    <li> <p class="pil">Pilletjes </p> <p> uur: 8:00u</p></li>
                </ul>
            </div>
        </div>
    </section>
    <?php endforeach; ?>
    <div class="link">
        <a href="addChild.php">Kind toevoegen</a>
    </div>
    <script src="js/profileChild.js"></script>
</body>
</html>