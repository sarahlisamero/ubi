<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Profile</title>
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <style>
        header{
            display:flex;
            flex-direction: row;
            gap: 30px;
            margin-left: 30px;
        }
        h1{
            font-family: futura pt;
        }
        article{
            background-color: #ECFFFA;
            text-align: center;
            font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            color: #050505;
            padding-top: 50px;
            padding-bottom:150px;
        }
        .avatar{
            width:400px;
        }
        .head{
            display: flex;
            justify-content: center;
        }
        .head a{
            align-self: flex-end;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            text-decoration: none;
            color:#050505;
        }
        .scores{
            background-color: #95C53D;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
            padding:10px;
            border:none;
            border-radius: 10px;
            width: 200px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-left: auto;
            margin-right: auto ;
        }
        .scores a, #switch a{
            text-decoration: none;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
        }
        .hidden{
            visibility: hidden;
        }
        #switch{
            background-color: #050505;
            color: #f5f5f5;
            display:inline-block;
            padding-top: 10px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
            margin-left:30px;
            border-radius:10px;
            position: absolute;
            z-index: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Wolf_Peeters</h1> <!--hard coded, idk hoe anders-->
        <img src="img/arrowdown.svg" alt="arrow down">
    </header>
    <div id="switch" class="hidden">
        <a href="dashboard.php">Ga naar dashboard</a>
    </div>
    <div class="head">
        <img class="avatar" src="img/avatar1.png" alt="avatar">
        <a href="#"><img src="img/edit.svg" alt="edit">edit</a>
    </div>
    <article>
        <p class="hidden" id="boost">Boosted!</p>
        <img class="boost" src="img/boost.svg" alt="boost">
        <p>Boost je avatar met 5 sterren</p>
        <p>Je hebt al <?php echo "50";?> sterren verzameld </br> Superster!</p>
        <div class="scores">
        <a href="#">Bekijk scores</a>
        <img src="img/scores.svg" alt="scores">
        </div>
    </article>
    <?php include_once("navchild.php"); ?>
    <script src="js/profileChild.js"></script>
</body>
</html>