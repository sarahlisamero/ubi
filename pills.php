<?php
include_once("bootstrap.php");
session_start();
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
$allpills = Pill::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pills</title>
</head>
<body>
    <article>   
        <?php foreach($allpills as $pill):?>
            <div>
                <h2><?php echo $pill['pillName'];?></h2>
                <img src="<?php echo $pill['image'];?>" alt="pill image">
                <p><?php echo $pill['weekday'];?></p>
                <p><?php echo $pill['time'];?></p>
            </div>
        <?php endforeach;?>
    </article>
</body>
</html>