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


    $task = new Task();
    $tasks = $task->getAllTask()
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
        .container ul{
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
            width:80px;
            padding-bottom:10px;
            padding-top: 10px;
        }
        a{
            text-decoration: none;
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
        }
        ul{
            list-style-type: none;
            font-family: "sofia-pro", sans-serif;
            font-size: 16px;
            letter-spacing:1px;
        }
        .container li{
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
        <ul>
            <?php foreach($tasks as $t): ?>
                <a href="<?php echo $t['task_id']; ?>">                                
                    <li style="background-color: <?php echo $t['background_color']; ?>">
                            <img src="<?php echo $t['icon'];?>" alt="">
                            <p><?php echo $t['taskName']; ?></p>
                    </li>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php include_once("navchild.php"); ?>
</body>
</html>