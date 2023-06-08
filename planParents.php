<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Planning</title>
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
        }
        .header{
            background-color: #CB97E2;
            background-image: url(img/avatar1.png);
            background-repeat: no-repeat;
            background-size: 250px;
            background-position: 250px 80px;
            margin-top: -10px;
            padding-top: 10px;
            margin-left: -1.2em;
            padding-left: 20px;
            margin-right: -1.2em;
            padding-bottom: 5em;
        }
        .header img{
            padding-top: 20px;
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
        h2{
            padding-top: 1em;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        label{
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
            color: #141414;
        }
        .child {
            position: relative;
            display: flex;
        }

        .child input[type="checkbox"] {
            opacity: 0;
        }

        .label {
            margin-right:1em;
            background-color: #CB97E2;
            border-radius: 10px;
            color: #141414;
            padding: 0.6em 1.5em;
        }
        .ghost {
            margin-right:1em;
            background-color: #F6F6F6;
            border-radius: 10px;
            border-width: 4px;
            border-style: solid;
            border-color: #CB97E2;
            color: #141414;
            padding: 0.6em 1.5em;
        }

        .taak input[type="checkbox"] {
            display: none;
        }

        .taak label {
            display: flex;
            align-items: center;
            margin-right: 10px;
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
            background-color: #CB97E2;
        }
        .pil{
            background-color: #ECFAF6;
            padding: 0.8em 0.5em;
            border-radius: 10px;
        }
        .bed{
            background-color: rgba(240, 175, 162, 0.5);
            padding: 0.8em 0.5em;
            border-radius: 10px;
        }
        .water{
            background-color: rgba(237, 167, 19, 0.5);
            padding: 0.8em 0.5em;
            border-radius: 10px;
        }
        .week {
            position: relative;
            display: flex;
        }
        .alles{
            background-color: #ECFAF6;
            padding-top: 0.5em;
            padding-left: 1em;
            border-radius: 10px;
        }
        .week input[type="checkbox"] {
            opacity: 0;
        }
        .week label{
            margin-left: -1em;
            margin-right: 1em;
            padding-bottom: 2em;
        }
        .color{
            color: #141414;
        }
        .color2{
            color: #EDA713;
        }
        button{
            background-color: #95C53D;
            color: #F5F5F5;
            font-weight: bold;
            padding-left:43%;
            padding-right:43%;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
            margin-top: 2em;
            margin-bottom: 2em;
            border: none;
        }

    </style>
</head>
<body>
    <div class="header">
        <div>
            <a href="agenda.php"><img src="img/arrowBackbw.png" alt=""></a>
        </div>
        <div>
            <h1>Voeg taken toe</h1>
        </div>
    </div>

    <div>
        <h2>Donderdag 15 juni</h2>
    </div>
    <form method="post">
        <h3>Duidt hier je kind(eren) aan</h3>
        <div class="child">
            <input type="checkbox" id="Child one"name="options[]" value="Child one">
            <label class="ghost"for="Child one">Child one</label><br>

            <input type="checkbox" id="Child two"name="options[]" value="Child two">
            <label class="ghost" for="Child two">Child two</label><br>
        </div>

        <h3>Duidt hier de tijd aan</h3>
        <div class="child">
            <input type="checkbox" id="Ochtend"name="options[]" value="Ochtend">
            <label class="ghost" for="Ochtend">Ochtend</label><br>

            <input type="checkbox" id="Middag"name="options[]" value="Middag">
            <label class="ghost" for="Middag">Middag</label><br>

            <input type="checkbox" id="Avond"name="options[]" value="Avond">
            <label class="ghost" for="Avond">Avond</label><br>
        </div>

        <h3>Taak:</h3>
        <div class="taak">
            <input type="checkbox" id="Pilletjes"name="options[]" value="Pilletjes">
            <label class="pil" for="Pilletjes"><span class="checkbox-icon"></span>Pilletjes</label><br>

            <input type="checkbox" id="Bedtijd"name="options[]" value="Bedtijd">
            <label class="bed"for="Bedtijd"><span class="checkbox-icon"></span>Bedtijd</label><br>

            <input type="checkbox" id="Water drinken"name="options[]" value="Water drinken">
            <label class="water"for="Water drinken"><span class="checkbox-icon"></span>Water drinken</label><br>

            <input type="checkbox" id="Tanden poetsen"name="options[]" value="Tanden poetsen">
            <label class="pil"for="Tanden poetsen"><span class="checkbox-icon"></span>Tanden poetsen</label><br>

            <input type="checkbox" id="Handen wassen"name="options[]" value="Handen wassen">
            <label class="water"for="option2"><span class="checkbox-icon"></span>Handen wassen</label><br>

            <input type="checkbox" id="Haren"name="options[]" value="Haren">
            <label class="bed"for="Haren"><span class="checkbox-icon"></span>Haren</label><br>

            <input type="checkbox" id="Kleren"name="options[]" value="Kleren">
            <label class="water"for="Kleren"><span class="checkbox-icon"></span>Kleren</label><br>
        </div>

        <h3>Duidt de dagen aan</h3>
        <div class="alles">
            <p>Weekdagen:</p>
            <div class="week">
                <input type="checkbox" id="Ma"name="options[]" value="Ma">
                <label class="color"for="Ma">Ma</label><br>

                <input type="checkbox" id="Di"name="options[]" value="Di">
                <label class="color"for="Di">Di</label><br>

                <input type="checkbox" id="Woe"name="options[]" value="Woe">
                <label class="color"for="Woe">Woe</label><br>

                <input type="checkbox" id="Do"name="options[]" value="Do">
                <label class="color"for="Do">Do</label><br>

                <input type="checkbox" id="Vrij"name="options[]" value="Vrij">
                <label class="color"for="Vrij">Vrij</label><br>

                <input type="checkbox" id="Za"name="options[]" value="Za">
                <label class="color"for="Za">Za</label><br>

                <input type="checkbox" id="Zo"name="options[]" value="Zo">
                <label class="color"for="Zo">Zo</label><br>
            </div>
        </div>

        <button type="submit" name="save">Toevoegen</button>
    </form>
</body>
</html>