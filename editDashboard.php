<?php
include_once("bootstrap.php");

$profile = new Profile();

if (isset($_POST['uploadPhoto'])) {
  $result = $profile->setProfilePhoto($_FILES['image']);
}

if (isset($_POST['deletePhoto'])) {
  $result = $profile->deleteProfilePhoto();
  echo $result;
}
/*if ($profile->getProfilePhoto() != '') {
    echo '<img src="' . $profile->getProfilePhoto() . '">';
  }*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <link rel="stylesheet" href="https://use.typekit.net/nnr1bhn.css">
    <title>Document</title>
    <style>
        form{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        img{
            max-width:300px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            margin-top:5%;
            border-radius: 10px;
        }
        label, input, a{
            font-family: "sofia-pro", sans-serif;
            font-style: normal;
            font-size: 20px;
            margin-top:20px;
            margin-bottom:20px;
            color: #050505;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-size: 20px;
            letter-spacing:1px;
        }
        h3{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            letter-spacing:1px;
            font-size:24px;
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
        width:320px;
      }
      @media (min-width: 500px){
        input{
          width:500px;}
        .btn{
          width:520px;
        }
      }
    </style>
</head>
    <body>
        <main>
          <!--TO FIX afbeelding komt in uploadmapje, maar toont niet op scherm-->
        <img src="uploads/profile.jpg" alt="#">
        <div class="content">
        <div>
            <form action="" method="post" enctype="multipart/form-data">
                <h3>Tanja Smeets</h3>
                <input type="file" name="image" required></br>
                <input class="btn"type="submit" name="uploadPhoto" value="Uploaden">
                <input type="submit" name="deletePhoto" value="Verwijderen">
            </form>
        </div>
        </div>
        </main>
    </body>
</html>