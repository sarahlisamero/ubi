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

    $highestScore = 0;
    $childWithHighestScore = null;
    foreach ($children as $c) {
        if ($c['score'] > $highestScore) {
             $highestScore = $c['score'];
             $childWithHighestScore = $c;
        }
    }
    $maxBarWidth = 250; // Maximum width of the score bar in pixels
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorebord</title>
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
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
        .crown {
            position: relative;
            display: inline-block;
        }
        .crown:before {
            content: "";
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 40px;
            background-image: url("img/crown.svg");
            background-size: cover;
        }
        main{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
            text-align: center;
        }
        article{
            margin-top:100px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .avatar{
            width: 300px;
        }
        .score-bar {
            width: <?php echo $maxBarWidth; ?>px;
            height: 30px;
            background-color: #f6f6f6;
            margin-top: 10px;
            border-radius: 10px;
        }
        .score-fill {
            height: 100%;
            background-color: #F0AFA2;
            border-radius: 10px;
        }
        .star{
            width: 30px;
            margin-bottom: -5px;
            margin-left:5px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="img/score.svg" alt="score icon">
        </div>
        <h1>Scorebord</h1>
    </header>
    <main>
        <?php foreach ($children as $c): ?>
            <article>
            <div>
            <?php if ($c == $childWithHighestScore): ?>
                <div class="crown">
                    <img class="avatar" src="<?php echo $c['avatar']; ?>" alt="avatar">
                </div>
            <?php else: ?>
                <img class="avatar" src="<?php echo $c['avatar']; ?>" alt="avatar">
            <?php endif; ?>
            </div>
            <div>
                <p><?php echo $c['username']?></p>
                <p><?php echo $c['score']?><img class="star" src="img/star.png" alt="star"></p>
            </div>
            <div class="score-bar">
                    <div class="score-fill" style="width: <?php echo min(($c['score'] / 200) * $maxBarWidth, $maxBarWidth); ?>px;"></div>
            </div>
            </article>
        <?php endforeach; ?>
    </main>
    <?php include_once("navchild.php"); ?>
</body>
</html>