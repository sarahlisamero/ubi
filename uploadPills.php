<?php
include_once("bootstrap.php");
session_start();
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
if(!empty($_POST)){
    try{
        $pill = new Pill();
        $pill->setPillName($_POST['pillName']);
        $pill->setImage($_POST['image']);
        $pill->setWeekday($_POST['weekday']);
        $pill->setTime($_POST['time']);
        
        $pill->getPillName();
        $pill->getImage();
        $pill->getWeekday();
        $pill->getTime();

        $pill->save();
    }
    catch(Throwable $e){
        $error = $e->getMessage();
    }
}
// op kinderpagina: $pills = Pill::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload pilletjes</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="pillName">Pill name</label>
            <input type="text" name="pillName" id="pillName">
        </div>
        <div>
            <label for="image">Image</label>
            <input type="text" name="image" id="image">
        </div>
        <div>
            <label for="weekday">Weekday</label>
            <select name="weekday" id="weekday">
                <option value="monday">Ma</option>
                <option value="tueday">Di</option>
                <option value="wednesday">Woe</option>
                <option value="thursday">Do</option>
                <option value="friday">Vr</option>
                <option value="saturday">Za</option>
                <option value="sunday">Zo</option>
            </select>
        </div>
        <div>
            <label for="time">Time</label>
            <select name="time" id="time">
                <?php for($i = 0; $i < 24; $i++): ?>
                    <option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
                <?php endfor ?>
            </select>
        </div>
            <input type="submit" value="Upload">
    </form>
</body>
</html>