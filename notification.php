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
    <title>Meldingen</title>
</head>
<style>
    body{
        margin-left: 20px;
        margin-right: 20px;
        display: flex;
        flex-direction: column;
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
        font-size: 18px;
        letter-spacing:1px;
    }
    .next{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .next img{
        width: 35px;
        height: 20px;
        margin-top: 2em;
    }
    label{
        color: #050505;
        font-family: "sofia-pro", sans-serif;
        font-size: 18px;
        letter-spacing:1px;
        margin-bottom: 1em;
    }
    .taak input[type="checkbox"] {
        display: none;
    }

    .taak label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .taak .checkbox-icon {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #F6F6F6;
        margin-right: 15px;
    }

    .taak input[type="checkbox"]:checked + label .checkbox-icon {
        background-color: #EDA713;
    }
    .pil{
        background-color: #BEEEE0;
        padding: 0.8em 0.5em;
        border-radius: 10px;
    }
</style>
<body>
    <div class="next">
        <h1>Meldingen</h1>
        <img src="img/melding.png" alt="">
    </div>
    <div class="taak">
        <input type="checkbox" id="Pilletjes" value="Pilletjes">
        <label for="Pilletjes" class="pil">
            <span class="checkbox-icon"></span>
            Je kind heeft pilletje als voltooid aangeduid. Bevestig.
        </label>

        <input type="checkbox" id="Pilletjes" value="Pilletjes">
        <label for="Pilletjes" class="pil">
            <span class="checkbox-icon"></span>
            Het is bedtijd!
        </label>

        <input type="checkbox" id="Pilletjes" value="Pilletjes">
        <label for="Pilletjes" class="pil">
            <span class="checkbox-icon"></span>
            Doel bereiken? Drink water!
        </label>
    </div>
    <?php include_once("nav.php"); ?>
</body>
</html>