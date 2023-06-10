<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }
    if (isset($_GET['child_id'])) {
        $_SESSION['child_id'] = $_GET['child_id'];
    }
    $child = new Child();
    $children = $child->getAllChild();

    $childId = $_SESSION['child_id'];
    $childInfo = $child->getChild($childId);

    if (isset($_POST['klaar'])) {
        $child = new Child();
        $task = new Task();
        $taskId = $_GET['task_id'];
        $children = $child->completeTask($childId, $taskId);
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
    <title>Handen wassen</title>
    <style>
                header{
            display: flex;
            margin-left: 20px;
            margin-top: 20px;
        }
        header img{
            width:40px;
            height:40px;
        }
        header div{
            background-color: #BEEEE0;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            padding-left: 20px;
            padding-right: 20px;
            margin-right: 20px;
        }
        main{
        text-align:center;
        margin-bottom: 100px;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
        }
        h2{
            color: #050505;
            font-family: "futura-pt-bold", sans-serif;
            font-size: 26px;
            font-weight: 400;
            letter-spacing:1px;
        }
        h4, h3{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing:1px;
        }
        p, label{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        .intro{
            padding-top:20px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            padding-left:40px;
            padding-right: 40px;
        }
        .intro img{
            width: 300px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Creates 2 equal-width columns */
            grid-template-rows: repeat(3, 1fr); /* Creates 3 equal-height rows */
            grid-gap: 20px; /* Adds a gap between grid items */
            margin-left: 20px;
            margin-right: 20px;
        }

        .grid-item {
            background-color:#ECFFFA;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center; /* Aligns items vertically */
            /*justify-content: center;*/ /* Centers the image horizontally */
        }

        .grid-item img {
            max-width: 80%; /* Ensures images don't exceed their container */
        }
        .btn{
        background-color: #95C53D;
        color: #f5f5f5;
        font-family: "sofia-pro", sans-serif;
        font-size: 20px;
        margin-top:20px;
        font-weight: bold;
        width:620px;
        padding:10px;
        border:none;
        border-radius: 10px;
        }

    </style>
</head>
<body>
<header>
        <div>
            <img src="img/handsbw.svg" alt="hand icon">
        </div>
        <h1>Handen wassen</h1>
    </header>
    <div class="intro">
        <img src="<?php echo $childInfo['avatar']; ?>">
        <div>
            <h3>Welkom bij handen wassen!</h3>
            <p>Leer hier hoe je correct je handen wast.</p>
        </div>
    </div>
    <main>
    <div class="grid-container">
        <div class="grid-item">
            <h4>Stap 1</h4>
            <img src="img/wash1.png" alt="Image 1">
            <p>Neem water en zeep.</p>
        </div>
        <div class="grid-item">
            <h4>Stap 2</h4>
            <img src="img/wash2.png" alt="Image 2">
            <p>Handpalmen tegen elkaar.</p>
        </div>
        <div class="grid-item">
            <h4>Stap 3</h4>
            <img src="img/wash3.png" alt="Image 3">
            <p>Tussen je vingers.</p>
        </div>
        <div class="grid-item">
            <h4>Stap 4</h4>
            <img src="img/wash4.png" alt="Image 4">
            <p>Vergeet je duimen niet!</p>
        </div>
        <div class="grid-item">
            <h4>Stap 5</h4>
            <img src="img/wash5.png" alt="Image 5">
            <p>Achterkant van je handen</p>
        </div>
        <div class="grid-item">
            <h4>Stap 6</h4>
            <img src="img/wash6.png" alt="Image 6">
            <p>Polsen niet vergeten!</p>
        </div>
    </div>
    <form action="" method="POST">
        <button class="btn" name="klaar"type="submit" value="Klaar"> Klaar </button>
    </form>    
</main>
    <?php include_once("navchild.php"); ?>
</body>
</html>