<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         nav {
            position: fixed;
            left: 50%;
            bottom:0;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            height: 80px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 10px 10px 0 0;
        }

        nav a {
            display: inline-block;
            margin: 0 30px;
            text-decoration: none;
        }

        nav a img {
        width: 32px;
        height: 32px;
        }
    </style>
</head>
<body>
<nav>
      <a href="home.php"><img src="img/home.png" alt="home"></a>
        <a href="agenda.php"><img src="img/agenda.png" alt="agenda"></a>
        <a href="profilechild.php"><img src="img/profile.png" alt="profile"></a>  
    </nav>
</body>
</html>