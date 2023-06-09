<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }

    $user = new User();
    $parentId = $_SESSION['email'];
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
            font-size: 20px;
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
            background-color: #EFE0F6;
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
        .planning{
            margin-left: 20px;
        }
        .planning li{
            background-color: #BEEEE0;
            padding-left: 1.5em;
            margin-left: -2.4em;
            padding-top: 0.8em;
            padding-bottom: 0.8em;
            border-radius: 10px;
            margin-top: 1em;
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
            right: 5%;
        }
        .plus{
            margin-bottom: 2em;
            margin-top: 1em;
            float: right;
        }
        .next img{
            margin-bottom: -5px;
        }
        .item{
            margin-bottom: 4em;
        }
        @media(min-width:650px){
            header{
                display:flex;
            }
            .agenda{
                display: flex;
                justify-content: center;
            }
            .agenda img{
                width: 500px;
            }
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
        <?php foreach($children as $c): ?>
        <?php
                $childId = $c['id'];
                $childInfo = $child->getChild($childId);
                $users = $user->getAllMornings($parentId, $childId);
                $mid = $user->getAllMiddays($parentId, $childId);
                $eve = $user->getAllEvenings($parentId, $childId);
        ?>
    <div class="item">
            <div>
                <h3><?php echo $c['firstName']; ?></h3>
            </div>
        <div>
            <p>Ochtend </p>
        </div>
        <ul>
            <?php foreach($users as $u): ?>
                <li style="background-color: <?php echo $u['background_color']; ?>"><?php echo $u["taskName"]; ?></li>
            <?php endforeach; ?>
        </ul>

        <div>
            <p>Middag</p>
        </div>
        <ul>
            <?php foreach($mid as $m): ?>
                <li style="background-color: <?php echo $m['background_color']; ?>"><?php echo $m["taskName"]; ?></li>
            <?php endforeach; ?>
        </ul>

        <div>
            <p>Avond</p>
        </div>
        <ul>
            <?php foreach($eve as $e): ?>
                <li style="background-color: <?php echo $e['background_color']; ?>"><?php echo $e["taskName"]; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
        <?php endforeach ?>
    </div>
    <div class="plus">
        <a href="planParents.php"><img src="img/plusbw.png" alt=""></a>
    </div>
    <?php include_once("nav.php"); ?>

</body>
</html>