<?php
include_once("bootstrap.php");
if(!empty($_POST)){
    try{
      $user = new User();
      $user->setEmail($_POST["email"]);
      $user->setPassword($_POST["password"]);
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
    <link rel="stylesheet" href="style.css"> <!--werkt niet idk-->
    <title>Sign up</title>
</head>
<body>
    <img src="#" alt="">
    <h1>Log in</h1>
    <?php if (isset($error)) : ?>
      <div>
        <p><?php echo $error; ?></p>
      </div>
    <?php endif; ?>
    <form action="" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <div>
            <input type="submit" value="Sign up">
        </div>
</body>
</html>