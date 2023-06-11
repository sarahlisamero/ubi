<?php
        include_once("bootstrap.php");
        session_start();
        $email = $_SESSION['email'];
        if(!isset($_SESSION['email'])){
            header("Location: login.php");
        }
        $child = new Child();
        $children = $child->getAllChild();

        $parent = new Task();
        $parents = $parent->getAllTask();

        $user = new User();

        if (isset($_POST['save'])) {
            $childId = $_POST['child'];
            $time = $_POST['time'];
            $taskId = $_POST['tasks'];
            $weekdays = $_POST['day']; 
            $usersId = $_SESSION["email"];
     
            foreach ($taskId as $task) {
                foreach ($weekdays as $weekday) {
                   $user->assignTask($childId, $task, $time, $weekday, $usersId);
                }
            }
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
    <title>Planning</title>
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
            margin-top: -10px;
            display: flex;
            flex-direction: column;
        }
        .header{
            background-color: #CB97E2;
            background-image: url(img/avatar1.png);
            background-repeat: no-repeat;
            background-size: 250px;
            background-position: 250px 80px;
            /*margin-top: -10px;*/
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
            background-color: rgba(240, 175, 162, 0.5);
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
    <h3>Duid hier je kind(eren) aan</h3>
    <div class="child">
        <?php foreach ($children as $c): ?>
            <div class="checkbox-container">
            <input type="checkbox" id="<?php echo $c['id']; ?>" name="child" value="<?php echo $c['id']; ?>" class="children visually-hidden">
            <label class="ghost children" for="<?php echo $c['id']; ?>" data-id="<?php echo $c['id']; ?>"><?php echo $c["firstName"]; ?></label>
            </div>
            <br>
        <?php endforeach; ?>
    </div>

    <h3>Duid hier de tijd aan</h3>
    <div class="child">
        <div class="checkbox-container">
            <input type="checkbox" id="Ochtend" name="time" value="Ochtend" class="time visually-hidden">
            <label class="ghost time" for="Ochtend">Ochtend</label><br>
        </div>

        <div class="checkbox-container">
            <input type="checkbox" id="Middag" name="time" value="Middag" class="time visually-hidden">
            <label class="ghost time" for="Middag">Middag</label><br>
        </div>

        <div class="checkbox-container">
            <input type="checkbox" id="Avond" name="time" value="Avond" class="time visually-hidden">
            <label class="ghost time" for="Avond">Avond</label><br>
        </div>
    </div>


        <h3>Taak:</h3>
        <div class="taak">
            <?php foreach($parents as $p): ?>
                <input type="checkbox" id="task-<?php echo $p['id']; ?>" name="tasks[]" value="<?php echo $p['id']; ?>">
                <label class="pil" for="task-<?php echo $p['id']; ?>">
                    <span class="checkbox-icon"></span>
                    <?php echo $p['taskName']; ?>
                </label><br>
            <?php endforeach; ?>
        </div>

        <h3>Duid de dagen aan</h3>
        <div class="alles">
            <p>Weekdagen:</p>
            <div class="week">
                <input type="checkbox" id="Ma"name="day[]" value="Ma">
                <label class="color day"for="Ma">Ma</label><br>

                <input type="checkbox" id="Di"name="day[]" value="Di">
                <label class="color day"for="Di">Di</label><br>

                <input type="checkbox" id="Woe"name="day[]" value="Woe">
                <label class="color day"for="Woe">Woe</label><br>

                <input type="checkbox" id="Do"name="day[]" value="Do">
                <label class="color day"for="Do">Do</label><br>

                <input type="checkbox" id="Vrij"name="day[]" value="Vrij">
                <label class="color day"for="Vrij">Vrij</label><br>

                <input type="checkbox" id="Za"name="day[]" value="Za">
                <label class="color day"for="Za">Za</label><br>

                <input type="checkbox" id="Zo"name="day[]" value="Zo">
                <label class="color day"for="Zo">Zo</label><br>
            </div>
        </div>

        <button type="submit" name="save">Toevoegen</button>
    </form>

    <script src="js/plan.js"></script>
</body>
</html>