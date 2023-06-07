<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedtijd</title>
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 100px;
        }
         header{
            display: flex;
            margin-top: 20px;
            font-family: "futura-pt", sans-serif;
            font-size:20px;
        }
        #icon{
            width:40px;
            height:40px;
        }
        .iconStyle{
            height: 80px;
        }
        header div{
            background-color: #F0AFA2;
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
        }
        .uitleg{
            display: flex;
        }
        .uitleg img{
            width: 200px;
            margin-top: -60px;
        }
        a{
            text-decoration: none;
        }
        .choose{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 40px;
        }
        .w a{
            background-color: #CB97E2;
            color: #141414;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            font-weight: bold;
            margin-right: 20px
        }
        .m a{
            background-color: #f5f5f5;
            color: #141414;
            font-weight: bold;
            border-style: solid;
            border-color: #CB97E2;
            border-width: 3px;
            border-radius: 10px;
            padding-left: 37px;
            padding-right: 37px;
            padding-top: 7px;
            padding-bottom: 7px;
        }
        .week{
            background-color: #BEEEE0;
            border-radius: 10px;
            padding-top: 5px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }
        .date{
            display: flex;
        }
        .date .color{
            color: #EDA713;
        }
        .date .noColor{
            color: #141414;
        }
        .date p{
            margin-right: 20px;
        }
        .hour{
            margin-top: 20px;
            display: flex;
        }
        .bewerk{
            margin-left: 20px;
        }
        .bewerk img {
            width: 30px;
        }
        .ends{
            margin-top: 30px;
        }
        .btn a{
            background-color: #95C53D;
            color: #F5F5F5;
            font-weight: bold;
            padding-left:43%;
            padding-right:43%;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
        }
        .btn{
            margin-top:30px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media(min-width: 550px){
            body{
                margin-left: 50px;
                margin-right: 50px;
            }
            .uitleg img{
                width: 250px;
                margin-top: -60px;
            }
        }
        @media(min-width: 750px){
            body{
                margin-left: 100px;
                margin-right: 100px;
            }
            .uitleg img{
                width: 300px;
                margin-top: -60px;
            }
        }
        
    </style>
</head>
<body>
    <header class="next">
            <div class="iconStyle">
                <img id="icon" src="img/moon.png" alt="pill icon">
            </div>
        <h1>Bedtijd</h1>
    </header>

    <div class="uitleg">
        <p>
        Een goede nachtrust is belangrijk om de volgende dag aandachtig 
        en opgewekt te zijn. Stel hier je bedtijd in en ontvang meldingen.
        </p>
        <img src="img/avatar1Slaap.png" alt="">
    </div>

    <div class="choose">
        <div class="w">        
            <a href="#">wolf_peeters</a>
        </div>
        <div class="m">
            <a href="#">margot_nootens</a>
        </div>
    </div>

    <div class="week">
        <p>Weekdagen</p>
        <div class="date">
            <p class="color" href="#">Ma</p>
            <p class="color"  href="#">Di</p>
            <p class="color"  href="#">Woe</p>
            <p class="color"  href="#">Do</p>
            <p class="color"  href="#">Vrij</p>
            <p class="noColor" href="#">Za</p>
            <p class="noColor" href="#">Zo</p>
        </div>
        <div class="hour">
            <select name="hourSelect">
                <option value="18">18u</option>
                <option value="19">19u</option>
                <option value="20">20u</option>
                <option value="21">21u</option>
                <option value="22">22u</option>
            </select>
            <div class="bewerk">
                <img src="img/bewerken.png" alt="">
            </div>
        </div>
    </div>

    <div class="week ends">
        <p>Weekends</p>
        <div class="date">
            <p class="noColor" href="#">Ma</p>
            <p class="noColor" href="#">Di</p>
            <p class="noColor" href="#">Woe</p>
            <p class="noColor" href="#">Do</p>
            <p class="noColor" href="#">Vrij</p>
            <p class="color" href="#">Za</p>
            <p class="color" href="#">Zo</p>
        </div>
        <div class="hour">
            <select name="hourSelect">
                <option value="18">18u</option>
                <option value="19">19u</option>
                <option value="20">20u</option>
                <option value="21">21u</option>
                <option value="22">22u</option>
            </select>
            <div class="bewerk">
                <img src="img/bewerken.png" alt="">
            </div>
        </div>
    </div>

    <div class="btn">
        <a href="#">Instellen</a>
    </div>
    <?php include_once("nav.php"); ?>
</body>
</html>