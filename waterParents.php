<?php
    include_once("bootstrap.php");
    session_start();
    $email = $_SESSION['email'];
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
    }

    $child = new Child();
    $children = $child->getAllChild();


    if (isset($_POST['add'])) {
        $selectedValues = $_POST['amount'];
    
        foreach ($selectedValues as $childId => $selectedValue) {
            $childInfo = $child->getChild($childId);
            $childid = $childInfo['id'];
            $parent = new User();
            $parent->waterAmount($childId, $selectedValue);
        }
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
    <title>Water drinken</title>
</head>
    <style>
        body{
            margin-left: 20px;
            margin-right: 20px;
            display: flex;
            flex-direction: column;
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
            background-color: #EDA713;
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
        form{
            display: flex;
            flex-wrap: wrap;
        }
        .kies{
            margin-right: 8em;
        }
        select{
            padding: 1em 2em;
            background-color: #F6F6F6;
            border-radius: 10px;
            border: none;
        }
        button{
            background-color: #95C53D;
            color: #F5F5F5;
            font-weight: bold;
            padding-left:43%;
            padding-right:43%;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 10px;
            margin-top: 4em;
            border: none;
        }
        @media(min-width:650px){
            header{
                display:flex;
            }
            form{
                display:flex;
                justify-content: center;
            }
            p{
                width: 600px;
            }
        }

    </style>
<body>
<header>
        <div>
            <img src="img/drinkbw.png" alt="pill icon">
        </div>
        <h1>Water drinken</h1>
    </header>
    <p>Kies hier hoeveel glazen water je kind per dag moet drinken. De aangeraden hoeveelheid water is verschillend per leeftijd en per kind, maar tussen de 3 en 4 jaar wordt aangeraden 4-6 glazen water te drinken. tussen 5 en 6 zou 5 à 6 glazen water moeten drinken en kinderen van 7 zouden ongeveer 6 à 8 glazen water moeten drinken.</p>
    <h2>Stel hier je doelen in:</h2>
    <div class="next">
        <form action="" method="POST">
            <?php foreach($children as $c): ?>
            <div class="kies">
                <h3 class=""><?php echo $c['firstName']; ?>:</h3>
                <select name="amount[<?php echo $c['id']; ?>]">
                    <option value="4" >4</option>
                    <option value="5" >5</option>
                    <option value="6" >6</option>
                    <option value="7" >7</option>
                    <option value="8" >8</option>
                </select>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="button">
            <button type="submit" name="add">Toevoegen</button>
        </div>
        </form>
        <?php include_once("nav.php"); ?>
</body>
</html>