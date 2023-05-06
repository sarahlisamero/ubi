<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanden poetsen</title>
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <!--<link rel="stylesheet" href="css/style.css">-->
    <style>
        /*ipad rechtstaand*/
        header{
            display: flex;
            margin-left: 20px;
            margin-top: 20px;
        }
        header img{
            width:40px;
            height:40px;
            /*margin-top: 15px;
            padding-right:20px;*/
        }
        header div{
            background-color: #FFECC3;
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
        }
        button{
            font-family: "sofia-pro-soft", sans-serif;
            font-style: normal;
            font-size: 36px;
        }
        #countdown{
            font-size: 70px;
            font-family: "sofia-pro-soft", sans-serif;
            font-weight: 700;
            font-style: normal;
            color: #95C53D;
        }
        #start{
            background-color: #95C53D;
            border: none;
            border-radius: 10px;
            width: 430px;
            padding-top: 20px;
            padding-bottom: 20px;
            color:#f5f5f5;
        }
        #restart{
            background-color: #95C53D;
            border: none;
            border-radius: 10px;
            width: 430px;
            padding-top: 20px;
            padding-bottom: 20px;
            color:#f5f5f5;
            display: none;
        }
        .containerTimer{
            background-color: #f6f6f6;
            width:430px;
            border-radius: 10px;
            padding-top: 10px;
            display: flex;  
            flex-direction: column;
            justify-content: center;  
            align-items: center; 
            margin:auto;
        }
        .star{
            width:70px;
            position: absolute;
            align-self:flex-end;
            padding-right: 10px;;
            display: none;
        }
        .containerTimer button{
            font-family: "sofia-pro-soft", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        .centerImg{
            display:block;
            margin-left: auto;
            margin-right: auto;
            width:50%;
        }
        /*ipad liggend*/
        @media(min-width: 900px){
            .centerImg{
                width:20%;
            }
            .containerTimer{
            padding-top: 5px;
        }
        }
    </style>
</head>
<body>
    <header>
        <div>
        <img src="img/toothbw.png" alt="tooth icon">
        </div>
        <h1>Tanden poetsen</h1>
    </header>
    <img class="centerImg"src="img/toothy.png" alt="#">
    <div class="containerTimer">
        <img class="star" src="img/star.png" alt="#">
        <p id="countdown">2:00</p>
        <div>
        <button id="start">Start</button>
        </div>
	<button id="restart">Herstart</button>
	</div>

    <script src="js/sketch.js"></script>
</body>
</html>