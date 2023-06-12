<?php
include_once("bootstrap.php");
session_start();

    $child = new Child();
    $children = $child->getAllChild();

    $parent = new User();
    $parents = $parent->getAllUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Dashboard</title>
    <style>
        body{
            background-color: #FFECC3;
        }
        header{
            background-color: #95C53D;
            display: inline-block;
            position: relative;
            left:75%;
            margin-top: 30px;
            margin-right: 30px;
            padding: 10px 20px 10px 20px;
            border-radius: 40px;
        }
        header a{
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing:1px;
            text-align: center;
            text-decoration: none;
        }
        main{
            margin-top: 40%;
        }
        h2{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
            text-align: center;
        }
        h3{
            font-family: "sofia-pro", sans-serif;
            font-weight: 400;
            font-style: normal;
            letter-spacing:1px;
            text-align: center;
        }
        .kids{
            display: flex;
            justify-content: center;
            gap: 50px;
        }
        .kids div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .kids img, .parent img{
            width: 150px;
            height: 150px;
        }
        img{
            max-width:150px;
            border-radius: 10px;
        }
        .parent{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .edit{
            display: flex;
            align-items: center;
        }
        .editbtn img{
            width: 40px;
            height: 40px;
        }
        .editbtn{
            align-self: flex-start;
            margin-left: -40px;
        }
        @media (min-width: 800px){
            main{
                margin-top:20%;
            }
            img{
                max-width:200px;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="addChild.php">Voeg kind toe</a>
    </header>
    <main>
    <h2>Wie ben jij?</h2>
    <div class="parent">
        <div class="edit">
            <a href=" passwordParents.php"><img src="img/parent.jpg" alt="#"></a>
            <a class= "editbtn" href="editDashboard.php"><img src="img/edit.png" alt="edit"></a>
        </div>
        <?php foreach($parents as $p): ?>
            <h3><?php echo $p['username']; ?></h3>
        <?php endforeach; ?>
    </div>
    <div class="kids">
    <?php foreach ($children as $c): ?>
        <div>
            <a href="home.php?child_id=<?php echo $c['id']; ?>"><img src="img/brosis.jpg" alt="#"></a>
            <h3><?php echo $c['firstName']; ?></h3>
        </div>
    <?php endforeach; ?>
    </div>
    </main>
</body>
</html>