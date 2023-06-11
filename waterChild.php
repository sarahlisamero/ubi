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
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Water drinken</title>
    <style>
        header{
            display: flex;
            margin-left: 20px;
            margin-top: 20px;
        }
        header img{
            width:40px;
            height:40px;
        }
        header div{
            background-color: #FAE5B8;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            padding-left: 20px;
            padding-right: 20px;
            margin-right: 20px;
        }
        .intro{
            padding-top:20px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            padding-left:40px;
            padding-right: 40px;
        }
        .intro img{
            width: 300px;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        .container {
        position: relative;
        display: flex;
        justify-content: flex-start;
        background-color: #F6F6F6;
        flex-wrap: wrap;
        max-width: 50%;
        margin: 10px auto;
        padding-top: 50px;
        padding-bottom: 100px;
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
        #day{
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="img/drinkbw.png" alt="drink icon">
        </div>
        <h1>Water drinken</h1>
    </header>
    <div class="intro">
    <img class="avatar" src="<?php echo $childInfo['avatar']; ?>" alt="avatar">
        <div>
            <p>Houd hier bij hoeveel glaasjes je dronk. Duid elke keer aan wat je dronk door op het glas te klikken.</p>
        </div>
    </div>
    <div id="day">
        <p>Vandaag</p>
    </div>
    <div class="container">
        <div class="glass" id="glass1"></div>
        <div class="glass" id="glass2"></div>
        <div class="glass" id="glass3"></div>
        <div class="glass" id="glass4"></div>
        <div class="glass" id="glass5"></div>
        <div class="glass" id="glass6"></div>
        <div class="loading-bar"></div>
    </div>
    <?php include_once("navchild.php")?>
    <script src="js/water.js"></script>
</body>
</html>