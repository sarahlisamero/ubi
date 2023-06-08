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
</head>
<body>
    <div>
        <div>
            <a href="agenda.php"><img src="img/arrowBackbw.png" alt=""></a>
        </div>
        <div>
            <h1>Voeg taken toe</h1>
        </div>
        <div>
            <img src="img/avatar1.png" alt="">
        </div>
    </div>

    <div>
        <h2>Donderdag 15 juni</h2>
    </div>
    <form method="post">
        <h3>Duidt hier je kind(eren) aan</h3>
        <div>
            <input type="checkbox" id="Child one"name="options[]" value="Child one">
            <label for="Child one">Child one</label><br>

            <input type="checkbox" id="Child two"name="options[]" value="Child two">
            <label for="Child two">Child two</label><br>
        </div>

        <h3>Duidt hier de tijd aan</h3>
        <div>
            <input type="checkbox" id="Ochtend"name="options[]" value="Ochtend">
            <label for="Ochtend">Ochtend</label><br>

            <input type="checkbox" id="Middag"name="options[]" value="Middag">
            <label for="Middag">Middag</label><br>

            <input type="checkbox" id="Avond"name="options[]" value="Avond">
            <label for="Avond">Avond</label><br>
        </div>

        <h3>Taak:</h3>
        <div>
            <input type="checkbox" id="Pilletjes"name="options[]" value="Pilletjes">
            <label for="Pilletjes">Pilletjes</label><br>

            <input type="checkbox" id="Bedtijd"name="options[]" value="Bedtijd">
            <label for="Bedtijd">Bedtijd</label><br>

            <input type="checkbox" id="Water drinken"name="options[]" value="Water drinken">
            <label for="Water drinken">Water drinken</label><br>

            <input type="checkbox" id="Tanden poetsen"name="options[]" value="Tanden poetsen">
            <label for="Tanden poetsen">Tanden poetsen</label><br>

            <input type="checkbox" id="Haren"name="options[]" value="Haren">
            <label for="Haren">Haren</label><br>

            <input type="checkbox" id="Kleren"name="options[]" value="Kleren">
            <label for="Kleren">Kleren</label><br>

            <input type="checkbox" id="Handen wassen"name="options[]" value="Handen wassen">
            <label for="option2">Handen wassen</label><br>
        </div>

        <h3>Duidt de dagen aan</h3>
        <div>
            <input type="checkbox" id="Ma"name="options[]" value="Ma">
            <label for="Ma">Ma</label><br>

            <input type="checkbox" id="Di"name="options[]" value="Di">
            <label for="Di">Di</label><br>

            <input type="checkbox" id="Woe"name="options[]" value="Woe">
            <label for="Woe">Woe</label><br>

            <input type="checkbox" id="Do"name="options[]" value="Do">
            <label for="Do">Do</label><br>

            <input type="checkbox" id="Vrij"name="options[]" value="Vrij">
            <label for="Vrij">Vrij</label><br>

            <input type="checkbox" id="Za"name="options[]" value="Za">
            <label for="Za">Za</label><br>

            <input type="checkbox" id="Zo"name="options[]" value="Zo">
            <label for="Zo">Zo</label><br>
        </div>

        <button type="submit" name="save">Toevoegen</button>
    </form>
</body>
</html>