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

    try{
        $child = new Child();
        if(isset($_GET['buy'])){
            $childId = $_SESSION['child_id'];
            $canBuy = $child->checkIfCanBuy($childId);

            if($canBuy['can_buy'] === "1"){
                $childId = $_SESSION['child_id'];
                $child->buyBoost($childId);
            }else {
                throw new Exception("Oeps niet genoeg punten");
            }
        }
    } catch (Exception $e){
        $errorMessage = $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child Profile</title>
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <style>
        header{
            display:flex;
            flex-direction: row;
            gap: 30px;
            margin-left: 30px;
        }
        h1{
            font-family: futura pt;
        }
        article{
            background-color: #ECFFFA;
            text-align: center;
            font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            color: #050505;
            padding-top: 30px;
            padding-bottom:150px;
        }
        .avatar{
            width:400px;
        }
        .head{
            display: flex;
            justify-content: center;
        }
        .head a{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
            text-decoration: none;
            color:#050505;
        }
        .scores{
            background-color: #95C53D;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
            padding:10px;
            border:none;
            border-radius: 10px;
            width: 200px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-left: auto;
            margin-right: auto ;
        }
        .scores a, #switch a{
            text-decoration: none;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: bold;
        }
        .hidden{
            visibility: hidden;
        }
        #switch{
            background-color: #050505;
            color: #f5f5f5;
            display:inline-block;
            padding-top: 10px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
            margin-left:30px;
            border-radius:10px;
            position: absolute;
            z-index: 1;
        }
        .side{
            display:flex;
            flex-direction: column;
            justify-content: space-between;
        }
        button{
            border: none;
            background-color: #ECFFFA;
        }
    </style>
</head>
<body>
    <?php if($childInfo): ?>
        <?php foreach ($children as $c): ?>
            <?php if ($c['id'] == $_SESSION['child_id']): ?>
                <header>
                    <h1><?php echo $c['username'] ?></h1>
                    <img src="img/arrowdown.svg" alt="arrow down">
                </header>
                <div id="switch" class="hidden">
                    <a href="dashboard.php">Ga naar dashboard</a>
                </div>
                <div class="head">
                    <img class="avatar" src="img/avatar1.png" alt="avatar">
                    <div class="side">
                        <img class="battery"src="img/lowbat.svg" alt="low battery">
                        <a href="#"><img src="img/edit.svg" alt="edit">edit</a>
                    </div>
                </div>
                <article>
                    <p class="hidden" id="boost">Boosted!</p>
                    <?php if(isset($errorMessage)): ?>
                        <p><?php echo $errorMessage; ?></p>
                    <?php endif; ?>
                    <form action="">
                        <button type="submit" name="buy"><img class="boost" src="img/boost.svg" alt="boost"></button>
                    </form>
                    <p>Boost je avatar met 5 sterren</p>
                    <p>Je hebt al <?php echo $c['score']; ?> sterren verzameld</p>
                    <div class="scores">
                    <a href="#">Bekijk scores</a>
                    <img src="img/scores.svg" alt="scores">
                    </div>
                </article>
            <?php endif; ?>            
        <?php endforeach; ?>
    <?php endif; ?>
    <?php include_once("navchild.php"); ?>
    <script src="js/profileChild.js"></script>
</body>
</html>