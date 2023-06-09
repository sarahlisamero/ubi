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

    $users = $child->getAllMorning($childId);
    $mid = $child->getAllMidday($childId);
    $eve = $child->getAllEveningy($childId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Agenda kind</title>
</head>
<style>
    body{
        margin-left: 20px;
        margin-right: 20px;
        display: flex;
        flex-direction: column;
        margin-bottom: 5em
    }
    header{
        display: flex;
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
    h2, h3{
        font-family: "futura-pt-bold", sans-serif;
        font-style: normal;
        letter-spacing:1px;
    }
    p{
        color: #050505;
        font-family: "sofia-pro", sans-serif;
        font-size: 18px;
        letter-spacing:1px;
    }
    .next{
        display:flex;
    }
    .next h2{
        margin-left: 1em;
    }
    ul{
        list-style-type: none;
        font-family: "sofia-pro", sans-serif;
        font-size: 16px;
        letter-spacing:1px;
        display: flex;
        flex-wrap: wrap;
    }
    .planning li{
        padding-left: 1em;
        padding-right: 1em;
        margin-right: 2em;
        padding-top: 1.5em;
        padding-bottom: 0.5em;
        margin-bottom: 1em;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 150px;
        height: 150px;
    }
    .planning img{
        width: 80px;
    }
</style>
<body>
<?php if($childInfo): ?>
        <?php foreach ($children as $c): ?>
            <?php if ($c['id'] == $_SESSION['child_id']): ?>
                <header>
                    <div>
                        <img src="img/agendabw.png" alt="agenda icon">
                    </div>
                    <h1>Agenda</h1>
                </header>

                <div>
                    <img src="img/agendaChild.png" alt="">
                </div>

                <div class="next">
                    <img src="img/ochtend.png" alt="">
                    <h2>Ochtend</h2>
                </div>

                <div class="planning">
                    <ul>
                        <?php foreach($users as $u): ?>
                            <li style="background-color: <?php echo $u['background_color']; ?>">
                                <img src="<?php echo $u['icon'];?>" alt="">
                                <p><?php echo $u['taskName']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>            
            <?php endforeach; ?>
        <?php endif; ?>
    <?php include_once("navchild.php"); ?>
</body>
</html>