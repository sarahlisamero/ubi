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
    <title>Haren</title>
</head>
<body>
    <header>
        <div>
            <img src="img/haar.png" alt="pill icon">
        </div>
        <h1>Pilletjes</h1>
    </header>
</body>
</html>