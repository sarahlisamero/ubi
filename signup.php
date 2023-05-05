<?php
include_once("bootstrap.php");
if(!empty($_POST)){
    try{
      $user = new User();
      $user->setEmail($_POST["email"]);
      $user->setPassword($_POST["password"]);
      $user->setUsername($_POST["username"]);
      $user->save();
      header("Location:home.php");
    }
    catch (Throwable $e){
      $error = $e->getMessage();
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
    <link rel="stylesheet" href="style.css"> <!--werkt niet idk-->
    <title>Sign up</title>

    <style>
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
        color: #95C53D;
        font-size:32px;
      }
      p{
        font-family: "futura-pt", sans-serif;
        font-weight: 200;
        font-style: normal;
        font-size: 24px;
      }
      label, input, a{
        font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            margin-top:20px;
            margin-bottom:20px;
            color: #050505;
      }
      a{
        text-decoration: none;
      }
      strong{
        text-decoration: underline;
        color: #EDA713;
        font-weight: bold;
      }
      input{
        width:300px;
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
      }
      @media (min-width: 500px){
        input{
          width:500px;}
      }
    </style>
</head>
<body>
  <main>
  <div class="content">
    <h1>Registreer je</h1>
    <p>Maak hier je account aan.</p>
    <?php if (isset($error)) : ?>
      <div>
        <p><?php echo $error; ?></p>
      </div>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="email">Email</label></br>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
            <label for="username">Gebruikersnaam</label></br>
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam" required>
        </div>
        <div>
            <label for="password">Wachtwoord</label></br>
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required>
        </div>
        <div>
            <input class="btn" type="submit" value="Registreren">
        </div>
        <a href="login.php">Al een account? <strong> Login hier</strong></a>
    </div>
  </main>
</body>
</html>