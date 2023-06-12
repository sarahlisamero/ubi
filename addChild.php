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
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>add child</title>
    <style>
        main{
            margin-top:25%; /*nieuw: tijdelijke opl*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container{
            background-color: #f5f5f5;
            border-radius: 10px;
            width:400px;
        }
        .container p{
            padding: 20px;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
            color:#95C53D;
        }
        button{
            background-color: #95C53D;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            width: 400px;
            padding: 10px 0px;
            border: none;
            border-radius: 10px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        #of{
            text-align: center;
        }
        @media (min-width:450px){
            .container, button{
                width: 500px;
            }
        }
        @media (min-width:1400px){
            main{
                margin-top:10%;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="content">
            <h1>Kind toevoegen</h1>
            <p>Kies uit onderstaande opties</p>
            <div class="container">
                <p>Uw kind heeft al een profiel en u wil hem of haar
                toevoegen aan uw account.</p>
                <a href="knownChild.php"><button>Bestaand kinderprofiel toevoegen</button></a>
            </div>
            <div>
                <p id="of">of</p>
            </div>
            <div class="container">
                <p>U maakt een nieuw profiel aan voor uw kind, zodat u vervolgens de optie heeft dit kinderprofiel te delen met andere familieleden of opvoeders.</p>
                <a href="unknownChild.php"><button >Nieuw kinderprofiel toevoegen</button></a>
            </div>
        </div>
    </main>
</body>
</html>