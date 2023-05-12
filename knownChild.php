<?php
function isKnown($username, $ubicode){
    if($username == "@wolf_peeters" && $ubicode == "ab123"){
      return true;
    } else{
      return false;
    }
}
if(!empty($_POST)){
    $username = $_POST['username'];
    $ubicode = $_POST['ubicode'];
  
    if(isKnown($username, $ubicode)){
      session_start();
      $_SESSION['username'] = $username;
      header("Location: home.php");
    } else{
      $error = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add known child</title>
    <style>
        .container{
            background-color: #f6f6f6;
            margin-left:10%;
            margin-right:10%;
        }
        h3{
            padding-left:40px;
            padding-top: 40px;
        }
        form{
            padding-left:40px;
            padding-right: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<body>
    <h1>Kind toevoegen</h1>
    <div class="container">
    <h3>Kind 1</h3>
    <form action="" method="post">
        <div class="addChild">
            <div>
                <label for="username">Voeg hieronder de @-tag van het bestaand kinderprofiel toe.</label></br>
                <input type="text" id="username" name="username" placeholder="@gebruikersnaam" required> 
            </div>
            <div>
                <label for="ubicode">Voeg hieronder de specifieke Ubi-code toe van het kinderprofiel.</label></br>
                <input type="text" id="ubicode" name="ubicode" placeholder="ubicode" required>
            </div>
        </div>
        <div>
            <input class="btn" type="submit" value="Toevoegen">
        </div>
    </form>
    </div>
</body>
</html>