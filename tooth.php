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
            margin-top: 15px;
            padding-right:10px;
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
            width: 350px;
            padding-top: 24px;
            padding-bottom: 24px;
            color:#f5f5f5;
        }
        #restart{
            background-color: #95C53D;
            border: none;
            border-radius: 10px;
            width: 350px;
            padding-top: 24px;
            padding-bottom: 24px;
            color:#f5f5f5;
        }
        .containerTimer{
            background-color: #f6f6f6;
            width:350px;
            border-radius: 10px;
            padding-top: 10px;
            display: flex;  
            flex-direction: column;
            justify-content: center;  
            align-items: center; 
            margin:auto;
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
        <img src="img/toothbw.png" alt="tooth icon">
        <h1>Tanden poetsen</h1>
    </header>
    <img class="centerImg"src="img/toothy.png" alt="#">
    <div class="containerTimer">
        <p id="countdown">2:00</p>
        <div>
        <button id="start">Start</button>
        </div>
	<!--<button id="restart">Herstart</button>-->
	</div>

    <script src="js/sketch.js"></script>
</body>
</html>