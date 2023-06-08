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
        .next{
            display: flex;
            margin-bottom: 20px;
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
            background-color: #FFDED8;
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
        img{
            width:400px;
        }
        .sleep{
            /*display: flex;
            justify-content: center;
			align-items: center;
            margin: 0;*/
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .sleepy{
            /*display: flex;
            justify-content: center;
			align-items: center;*/
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .sleepy img{
            width:500px;
        }
        .hidden {
            display: none;
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
    <div class="sleep">
        <img src="img/avatar1.png" alt="">
    </div>
    <div class="sleepy hidden">
        <img src="img/avatar1Slaap.png" alt="">
    </div>
    <?php include_once("navchild.php"); ?>
    <script src="js/bedtijd.js"></script>
</body>
</html>