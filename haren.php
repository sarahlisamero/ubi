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
    <title>Haren</title>

    <style>
        .next{
            display: flex;
        }

        header{
            display: flex;
            margin-left: 20px;
            margin-top: 20px;
        }
        #icon{
            width:40px;
            height:40px;
        }
        header div{
            background-color: #95C53D;
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
        .alles img{
            width:15em;
            margin-left: 20px;
            object-fit: contain;
            background-color: #F5F5F5;
            border-radius:10px;
        }
        .hide img{
        }
    </style>

</head>
<body>
    <header class="next">
        <div class="iconStyle">
            <img id="icon" src="img/haar.png" alt="pill icon">
        </div>
        <h1>Pilletjes</h1>
    </header>
    <div class="lengte">
        <a href="#">Lang haar</a>
        <a href="#">Kort haar</a>
    </div>
   <div class="alles">
        <div class="hide">
            <p>Staart</p>
            <div class="next">
                <img src="img/kammen.png" alt="">
                <img src="img/staart1.png" alt="">
                <img src="img/staart2.png" alt="">
                <img src="img/staart3.png" alt="">
            </div>
        </div>

        <div>
            <p>Vlecht</p>
            <div class="next">
                <img src="img/haar_kammen.png" alt="">
                <img src="img/vlecht1.png" alt="">
                <img src="img/vlecht2.png" alt="">
                <img src="img/vlecht3.png" alt="">
                <img src="img/vlecht4.png" alt="">
                <img src="img/vlecht5.png" alt="">
                <img src="img/vlecht6.png" alt="">

            </div>
        </div>

        <div>
            <p>Dot</p>
            <div class="next">
                <img src="img/haar_kammen.png" alt="">
                <img src="img/staart1.png" alt="">
                <img src="img/staart2.png" alt="">
                <img src="img/staart3.png" alt="">
                <img src="img/dot1.png" alt="">
                <img src="img/dot2.png" alt="">
            </div>
        </div>

        <div>
            <p>Middenstreep</p>
            <div class="next">
                <img src="img/haar_kammen.png" alt="">
                <img src="img/middenstreep.png" alt="">
            </div>
        </div>

        <div>
            <p>Kuif</p>
            <div class="next">
                <img src="img/kuif.png" alt="">
                <img src="img/kuif2.png" alt="">
            </div>
        </div>

   </div>
</body>
</html>