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
    <title>Home</title>

    <style>
        body{
            margin-bottom: 100px;
        }
        form input{
            width:320px;
            border: none;
            background-color: #f5f5f5;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:40px;
        }
        form button{
            border: none;
            background-color: #f5f5f5;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:40px;
        }
        form{
            display:flex;
            align-items:center;
            justify-content: center;
            margin-top: 50px;
        }
        header{
            padding-top:20px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            font-family: "futura-pt", sans-serif;
            font-size:20px;
        }
        header img{
            width: 200px;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
            /*justify-content: space-evenly;*/
            justify-content: center;
            column-gap: 20px;
            margin-bottom: 70px;
        }
        .container div{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content: center;
            width: 160px;
            height: 170px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .container img{
            width:60px;
            padding-bottom:30px;
        }
        .blue{
            background-color: #ECFFFA;
        }
        .yellow{
            background-color: #FFECC3;
        }
        .purple{
            background-color: #F7E3FF;
        }
        .pink{
            background-color: #FFDED8;
        }
        a{
            text-decoration: none;
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
        }

        @media(min-width:450px){
            header img{
                width:300px;
            }
            form input{
                width:600px;
            }
        }
        @media(min-width: 700px ){
            body{
                margin-left:30px;
                margin-right:20px;
            }
            .container{
                margin-bottom: 0px;
            }
        }
    </style>
</head>
<body>
    <form>
        <input type="text" id="search" name="search">
        <button type="button" onclick="search()">Go</button>
    </form>
    <header>
        <img src="<?php echo $childInfo['avatar']; ?>">
        <p><strong>Kies een taak of les </br></strong> om te voltooien</p>
    </header>
    <div class="container" class="search">
        <div class="blue">
            <img src="img/drugc.png" alt="drugs">
            <a href="pills.php">Pilletjes</a>
        </div>
        <div class="yellow" class="search">
            <img src="img/toothc.png" alt="teeth">
            <a href="tooth.php">Tanden poetsen</a>
        </div>
        <div class="purple" class="search">
            <img src="img/brushc.png" alt="hair">
            <a href="haren.php">Haren</a>
        </div>
        <div class="pink">
            <img src="img/moonc.png" alt="bed">
            <a href="bedtijd.php">Bedtijd</a>
        </div>
        <div class="purple">
            <img src="img/tshirtc.png" alt="clothes">
            <a href="#">Kleren kiezen</a>
        </div>
        <div class="blue">
            <img src="img/handc.png" alt="hands">
            <a href="hands.php">Handen wassen</a>
        </div>
        <div class="yellow">
            <img src="img/drinkc.png" alt="water">
            <a href="#">Water drinken</a>
        </div>
    </div>
    <?php include_once("navchild.php"); ?>
</body>
</html>