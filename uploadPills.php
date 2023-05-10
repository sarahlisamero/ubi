<?php
include_once("bootstrap.php");
session_start();
$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
    header("Location: login.php");
}
if(!empty($_POST)){
    try{
        $pill = new Pill();
        $pill->setPillName($_POST['pillName']);
        $pill->setImage($_POST['image']);
        $pill->setWeekday($_POST['weekday']);
        $pill->setTime($_POST['time']);
        
        $pill->getPillName();
        $pill->getImage();
        $pill->getWeekday();
        $pill->getTime();

        $pill->save();
    }
    catch(Throwable $e){
        $error = $e->getMessage();
    }
}
$pills = Pill::getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Upload pilletjes</title>
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
      }
      .content{
        display: inline-block; 
        text-align: left;
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
        h3{
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
            width: 620px;
            display:flex;
            flex-direction:row;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }
        .intro img{
            width: 300px;
        }
        label, input, select, a{
            font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            margin-top:20px;
            margin-bottom:20px;
            color: #050505;
        }
        input{
        width:600px;
        /*width:400px;*/
        padding:10px;
        border:none;
        border-radius: 10px;
        background-color: #f6f6f6;
        }
        select{
            width:620px;
            /*width: 420px;*/
            padding:10px;
            border:none;
            border-radius: 10px;
            background-color: #f6f6f6;
        }
        .btn{
            background-color: #95C53D;
            color: #f5f5f5;
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            width:620px;
        }
        li div{
            display:flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        li div img{
            width: 30px;
            height: 30px;
        }
        .content{
            margin-bottom: 90px;
            margin-left: 20px; /*nieuw*/
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
    <div class="intro">
        <img src="img/avatar1.png" alt="avatar">
        <div>
            <h3>Welkom bij pilletjes!</h3>
            <p>Maak hier een checklist van de pilletjes die je moet nemen. Je kan ook een uur en dag instellen. Dit komt 
            in je agenda terecht.</p>
        </div>
    </div>
    <main>
        <div class="content">
            <h2>Voeg hier pilletjes toe</h2>
            <!--later nog een checkbox maken met welk kind welk pilletje-->
            <form action="" method="post">
                <div>
                    <label for="pillName">Naam pilletje</label></br>
                    <input type="text" name="pillName" id="pillName">
                </div>
                <div>
                    <label for="weekday">Dagen</label></br>
                    <select name="weekday" id="weekday">
                        <option value="monday">Ma</option>
                        <option value="tueday">Di</option>
                        <option value="wednesday">Woe</option>
                        <option value="thursday">Do</option>
                        <option value="friday">Vr</option>
                        <option value="saturday">Za</option>
                        <option value="sunday">Zo</option>
                    </select>
                </div>
                <div>
                    <label for="time">Uur</label></br>
                    <select name="time" id="time">
                        <?php for($i = 0; $i < 24; $i++): ?>
                            <option value="<?= $i; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <div>
                    <label for="image">Upload een foto van het pillendoosje</label></br>
                    <input type="text" name="image" id="image">
                </div>
                    <input class="btn" type="submit" value="Upload">
            </form>
            <h2>Mijn lijst</h2>
            <ul> <!--later met ajax: zie comments oef joris-->
                <?php foreach($pills as $pill): ?>
                    <li>
                        <div>
                        <h3><?php echo htmlspecialchars($pill['pillName']);?></h3>
                        <img src="img/trash.png" alt="#">
                        </div>
                        <p><?php echo htmlspecialchars($pill['weekday']) . " " . "-" . " " . htmlspecialchars($pill['time']) . " " . "uur";?></p>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
    <?php include_once("nav.php"); ?>
</body>
</html>