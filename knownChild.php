<?php
/*function isKnown($username, $ubicode){
    if($username == "@wolf_peeters" && $ubicode == "ab123"){
      return true;
    } else{
Expand All
	@@ -17,7 +17,37 @@ function isKnown($username, $ubicode){
    } else{
      $error = true;
    }
  }*/

  include_once("bootstrap.php");

  function isKnown($username, $ubicode){
      $conn = Db::getInstance();
      $statement = $conn->prepare("SELECT * FROM children WHERE username = :username AND ubicode = :ubicode");
      $statement->bindValue(":username", $username);
      $statement->bindValue(":ubicode", $ubicode);
      $statement->execute();
      $result = $statement->fetch();
  
      return $result !== false; // Return true if a matching row is found, otherwise return false
  }
  
  function handleFormSubmission($formData){
      $username = $formData['username'];
      $ubicode = $formData['ubicode'];
  
      if(isKnown($username, $ubicode)){
          session_start();
          $_SESSION['username'] = $username;
  
          // Retrieve the child record from the database
          $conn = Db::getInstance();
          $statement = $conn->prepare("SELECT * FROM children WHERE username = :username AND ubicode = :ubicode");
          $statement->bindValue(":username", $username);
          $statement->bindValue(":ubicode", $ubicode);
          $statement->execute();
          $child = $statement->fetch();
  
          // Update the child record with the new parent ID
          $parentId = $_SESSION['email'];
          $childId = $child['id'];
  
          // Insert the parent-child association into the parent_child table
          $statement = $conn->prepare("INSERT INTO parentchild (parent_id, child_id) VALUES (:parentId, :childId)");
          $statement->bindValue(":parentId", $parentId);
          $statement->bindValue(":childId", $childId);
          $statement->execute();
  
          header("Location: dashboard.php");
          exit();
      } else{
          $error = true;
      }
  }
  
  if(!empty($_POST)){
      handleFormSubmission($_POST);
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
    <title>add known child</title>
    <style>
        main{
            margin-top:10%; /*nieuw: tijdelijke opl*/
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            font-style: normal;
            letter-spacing:1px;
            color:#95C53D;
        }
        label, input{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 18px;
            letter-spacing:1px;
        }
        .container{
            background-color: #f6f6f6;
            width:400px;
            border-radius: 10px;
        }
        h3{
            font-family: "futura-pt-bold", sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            padding-left:40px;
            padding-top: 40px;
        }
        form{
            padding-left:40px;
            padding-right: 40px;
            padding-bottom: 40px;
        }
        input{
            border-radius: 10px;
            border: none;
            margin-top:15px;
            margin-bottom: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            width:320px;
        }
        .btn{
            background-color: #95C53D;
            color: #f5f5f5;
            font-weight: bold;
        }
        .ghostbtn{
            background-color: #ffffff;
            color: #95C53D;
            font-weight: bold;
            border-color: #95C53D;
            border: solid 4px;
        }
        a{
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            font-size: 14px;
            color: #95C53D;
            text-decoration: none;
            text-align: center;
        }
        header{
            display: flex;
            width:400px;
            margin-left: 20px;
            margin-top: 20px;
        }
        header img{
            width:200px;
        }
        .help{
            display: flex;
            justify-content: center;
        }
        @media (min-width: 750px){
           .container, header{
               width: 600px;
           }
           header{
            align-items: center;
            justify-content: space-between;
           }
           header img{
               width: 300px;
           }
           input{
                width: 520px;
           }
        }
    </style>
</head>
<body>
<main>
    <header>
    <h1>Kind toevoegen</h1>
    <div>
    <img src="img/avatarcrop.png" alt="piep">
    </div>
    </header>
    <div class="container">
    <h3>Kind 1</h3>
    <form action="" method="post">
            <div>
                <label for="username">Voeg hieronder de @-tag van het bestaand kinderprofiel toe.</label></br>
                <input type="text" id="username" name="username" placeholder="@gebruikersnaam" required> 
            </div>
            <div>
                <label for="ubicode">Voeg hieronder de specifieke Ubi-code toe van het kinderprofiel.</label></br>
                <input type="text" id="ubicode" name="ubicode" placeholder="ubicode" required>
            </div>
            <div class="help">
            <a>Hulp nodig?</a>
            </div>
            <div>
                <input class="ghostbtn" type="submit" value="Nog een kind toevoegen">
            </div>
            <div>
                <input class="btn" type="submit" value="Toevoegen">
            </div>
    </form>
    </div>
</main>
</body>
</html>