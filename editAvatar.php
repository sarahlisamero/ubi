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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Edit Avatar</title>
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
        .head{
            display: flex;
            justify-content: center;
        }
        .alles{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .alles img{
            width:10em;
            height:10em;
            background-color: #F5F5F5;
            border-radius:10px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            font-size: 18px;
            letter-spacing:1px;
        }
    </style>
</head>
<body>
<?php if($childInfo): ?>
    <?php foreach ($children as $c): ?>
        <?php if ($c['id'] == $_SESSION['child_id']): ?>
            <header>
                <h1><?php echo $c['username'] ?></h1>
            </header>
        <?php endif; ?>
        <div class="head">
            <img class="avatar" src="img/avatar1.png" alt="avatar">
        </div>
        <div class="alles">
            <div class="space">
                <p>Kies een avatar</p>
                <div class="scroll">
                    <div class="next">
                        <img src="img/avatarkonijntje.svg" alt="avatar">
                        <img src="img/avatarfurry.svg" alt="avatar">
                        <img src="img/avatarkikker.svg" alt="avatar">
                        <img src="img/avataraardbei.svg" alt="avatar">
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
<?php endif; ?>
</body>
</html>