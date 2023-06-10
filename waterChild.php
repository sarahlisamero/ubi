<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }

    if (isset($_GET['child_id'])) {
        $_SESSION['child_id'] = $_GET['child_id'];
    }

    $child = new Child();
    $children = $child->getAllChild();

    $childId = $_SESSION['child_id'];
    $childInfo = $child->getChild($childId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water drinken</title>
    <style>
        .container {
        position: relative;
        display: flex;
        justify-content: flex-start;
        background-color: #F6F6F6;
        flex-wrap: wrap;
        max-width: 50%;
        margin: 80px auto;
        padding-top: 50px;
        padding-bottom: 50px;
        padding-left: 50px;
        padding-right: 50px;
        border-radius: 10px;
        row-gap: 20px;
        }
        .glass {
        width: 98px;
        height: 100px;
        margin-right: 10px;
        background-size: cover;
        transition: transform 0.3s ease;
        background-image: url("img/waterglass.svg");
        }

        .right {
        transform: translateX(50px);
        width: 87px;
        height: 103px;
        }

        .right#glass1, .right#glass2, .right#glass3, .right#glass4, .right#glass5, .right#glass6 {
        background-image: url("img/emptyglass.svg");
        }

        .loading-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0; 
        height: 30px;
        background-color: #BEEEE0;
        transition: width 0.3s ease; 
        border-radius:30px;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="glass" id="glass1"></div>
    <div class="glass" id="glass2"></div>
    <div class="glass" id="glass3"></div>
    <div class="glass" id="glass4"></div>
    <div class="glass" id="glass5"></div>
    <div class="glass" id="glass6"></div>
    <div class="loading-bar"></div>
  </div>

  <script src="js/water.js"></script>
</body>
</html>