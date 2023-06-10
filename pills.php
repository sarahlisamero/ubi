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
    
    $allpills = Pill::getAll();

    $childId = $_SESSION['child_id'];

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
    <title>Pills</title>
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
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        article{
            display: flex;
            flex-wrap: wrap;
            /*justify-content: center;*/
            margin-top: 20px;
        }
        article div{
            background-color: #BEEEE0;
            border-radius: 20px;
            padding: 20px;
            margin: 20px;
            display: flex;
            flex-direction: column;
        }
        article img{
            width:300px;
        }
        .btn{
        background-color: #95C53D;
        color: #f5f5f5;
        font-family: "sofia-pro", sans-serif;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: bold;
        padding:10px;
        border:none;
        border-radius: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="img/drugbw.png" alt="pill icon">
        </div>
        <h1>Pilletjes</h1>
    </header>
    <!--nog ochtend, middag, avond (variabel?) toevoegen -->
    <article>   
        <?php foreach($allpills as $pill):?>
            <div>
                <img src="<?php echo htmlspecialchars($pill['image']);?>" alt="pill image">
                <p><?php echo htmlspecialchars($pill['pillName']);?></p>
                <form action="" method="POST">
                    <button class="btn" name="klaar"type="submit" value="Klaar"> Klaar </button>
                </form>
            </div>
        <?php endforeach;?>
    </article>
    <?php include_once("navchild.php"); ?>
</body>
</html>