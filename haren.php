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
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <style>
        body{
            margin-left: 20px;
            margin-bottom: 100px;
        }
        .next{
            display: flex;
            margin-bottom: 40px;
            overflow-x: auto;
        }

        header{
            display: flex;
            margin-top: 20px;
            font-family: "futura-pt", sans-serif;
            font-size:20px;
            margin-left:20px;
        }
        #icon{
            width:40px;
            height:40px;
        }
        .iconStyle{
            height: 80px;
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
        p, a{
            font-family: "sofia-pro", sans-serif;
            margin-left:20px;
        }
        p{
            margin-left: 25px;
            margin-top: 30px;
        }
        .alles img{
            width:10em;
            height:10em;
            background-color: #F5F5F5;
            border-radius:10px;
            margin-left:20px;
        }
        .lengte{
            display: flex;
            /*justify-content: center;*/
        }
        .lengte a{
            text-decoration: none;
        }
        .lang a{
            background-color: #95C53D;
            color: #F5F5F5;
            font-weight: bold;
            padding-left:55px;
            padding-right:55px;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
            margin-right: 20px;
        }
        .kort a{
            border-style: solid;
            border-color: #95C53D;
            border-width: 3px;
            color: #95C53D;
            font-weight: bold;
            padding-left:55px;
            padding-right:55px;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
        }
        .scroll{
            max-width: 500px;
        }
        .next::-webkit-scrollbar {
        height: 8px;
        }
        .next::-webkit-scrollbar-thumb {
        background-color: #c1c1c1;
        border-radius: 4px;
        }
        .next::-webkit-scrollbar {
        height: 8px;
        }
        .next:hover::-webkit-scrollbar-thumb {
        background-color: #c1c1c1;
        border-radius: 4px;
        }
        @media(min-width: 550px){
            .lang a{
                padding-left:70px;
                padding-right:70px;
            }
            .kort a{
                padding-left:70px;
                padding-right:70px;
            }
            .scroll{
                max-width: 700px;
            }
        }
        @media(min-width: 750px){
            .lang a{
                padding-left:120px;
                padding-right:120px;
            }
            .kort a{
                padding-left:120px;
                padding-right:120px;
            }
        }

    </style>

</head>
<body>
    <header class="next">
        <div class="iconStyle">
            <img id="icon" src="img/haar.png" alt="pill icon">
        </div>
        <h1>Haren</h1>
    </header>
    <div class="lengte">
        <div class="lang">
            <a href="#">Lang haar</a>
        </div>
        <div class="kort">
            <a href="kortHaar.php">Kort haar</a>
        </div>
    </div>
   <div class="alles">
        <div class="space">
            <p>Staart</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/kammen.png" alt="">
                    <img src="img/staart1.png" alt="">
                    <img src="img/staart2.png" alt="">
                    <img src="img/staart3.png" alt="">
                </div>
            </div>
        </div>

        <div class="space">
            <p>Vlecht</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/kammen.png" alt="">
                    <img src="img/vlecht1.png" alt="">
                    <img src="img/vlecht2.png" alt="">
                    <img src="img/vlecht3.png" alt="">
                    <img src="img/vlecht4.png" alt="">
                    <img src="img/vlecht5.png" alt="">
                    <img src="img/vlecht6.png" alt="">
                </div>
            </div>
        </div>

        <div class="space">
            <p>Dot</p>
            <div class="scroll">
                <div class="next">
                    <img src="img/kammen.png" alt="">
                    <img src="img/staart1.png" alt="">
                    <img src="img/staart2.png" alt="">
                    <img src="img/staart3.png" alt="">
                    <img src="img/dot1.png" alt="">
                    <img src="img/dot2.png" alt="">
                </div>
            </div>
        </div>
   </div>
   <?php include_once("nav.php"); ?>
</body>
</html>