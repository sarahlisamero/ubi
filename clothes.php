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
    <title>Kleren kiezen</title>
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
            background-color: #F7E3FF;
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
        h2{
            color: #050505;
            font-family: "futura-pt-bold", sans-serif;
            font-size: 26px;
            font-weight: 400;
            letter-spacing:1px;
        }
        h4, h3{
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
        main p{
            font-weight: bold;
        }
        main img{
            width:10em;
            height:10em;
            border-radius:10px;
            margin-left:20px;
        }
        .scroll img{
            background-color: #f6f6f6;
        }
        .scroll{
            display:flex;
            overflow-x:scroll;
            scroll-snap-type: x mandatory;
        }
        .scroll::-webkit-scrollbar{
            display:none;
        }
        .scroll .next{
            display: flex;
            gap: 10px;
        }
        main{
            width:80%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
        }
        .space{
            margin-bottom: 40px;
        }
        .weather{
            width: 50px;
            height: 50px;
            margin-bottom: -10px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="img/tshirtbw.svg" alt="shirt icon">
        </div>
        <h1>Kleren</h1>
    </header>
    <div class="intro">
    <img class="avatar" src="<?php echo $childInfo['avatar']; ?>" alt="avatar">
        <div>
            <h3>Welkom bij kleren!</h3>
            <p>Bekijk hier wat je kan aandoen bij het weer.</p>
        </div>
    </div>
    <main>
        <div class="space">
            <p><img class="weather" src="img/sun.svg" alt=""> Zonnig en heel warm</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/shorts.svg" alt="">
                    <img src="img/skirt.svg" alt="">
                    <img src="img/shirt.svg" alt="">
                    <img src="img/sandals.svg" alt="">
                </div>
            </div>
        </div>
        <div class="space">
            <p><img class="weather" src="img/suncloud.svg" alt=""> Zonnig en bewolkt</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/pull.svg" alt="">
                    <img src="img/shirt.svg" alt="">
                    <img src="img/sneakers.svg" alt="">
                    <img src="img/shorts.svg" alt="">
                    <img src="img/skirt.svg" alt="">
                </div>
            </div>
        </div>
        <div class="space">
            <p><img class="weather" src="img/rainy.svg" alt=""> Koud en regenachtig</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/jacket.svg" alt="">
                    <img src="img/pull.svg" alt="">
                    <img src="img/shirt.svg" alt="">
                    <img src="img/jeans.svg" alt="">
                    <img src="img/sneakers.svg" alt="">
                </div>
            </div>
        </div>
        <div class="space">
            <p><img class="weather" src="img/snow.svg" alt=""> Koud en sneeuw</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/hat.svg" alt="">
                    <img src="img/scarf.svg" alt="">
                    <img src="img/gloves.svg" alt="">
                    <img src="img/jacket.svg" alt="">
                    <img src="img/pull.svg" alt="">
                    <img src="img/shirt.svg" alt="">
                    <img src="img/jeans.svg" alt="">
                    <img src="img/sneakers.svg" alt="">
                </div>
            </div>
        </div>
    </main>
    <?php include_once("navchild.php")?>
</body>
</html>