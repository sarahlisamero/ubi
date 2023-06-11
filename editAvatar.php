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
    <title>Edit Avatar</title>
    <style>
        body{
            margin-bottom: 5em;
        }
        header{
            display:flex;
            flex-direction: row;
            gap: 30px;
            margin-left: 30px;
        }
        h1{
            font-family: futura pt;
        }
        .head{
            display: flex;
            justify-content: center;
        }
        .alles{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .alles img{
            width:10em;
            height:10em;
            background-color: #F5F5F5;
            border-radius:10px;
        }
        p{
            color: #050505;
            font-family: "sofia-pro", sans-serif;
            font-weight: bold;
            font-size: 18px;
            letter-spacing:1px;
        }
        footer{
            margin-top: 100px;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }
        .confirm-box {
            background-color: #CB97E2;
            padding: 20px;
            border-radius: 8px;
        }
        .confirm-box p {
            margin-bottom: 10px;
        }
        .btn-container {
            display: flex;
            justify-content: center;
        }
        .btn-yes, .btn-no {
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            border: none;
        }
        .btn-yes {
            background-color: #CB97E2;
        }
        .btn-no {
            background-color: #CB97E2;
        }
        .star{
            width: 100px;
        }
        .img-container{
            display: flex;
            justify-content: center;
            margin-top: 1em;
            margin-bottom: 1em;
        }
        .hidden{
            display: none;
        }

    </style>
</head>
<body>
<?php if($childInfo): ?>
    <?php foreach ($children as $c): ?>
        <?php if ($c['id'] == $_SESSION['child_id']): ?>
            <header>
                <h1><?php echo $c['username'] ?></h1>
            </header>
        <div class="head">
            <img class="avatar" src="<?php echo $childInfo['avatar']; ?>" alt="avatar">
        </div>
        <div class="alles">
            <div class="space">
                <p>Kies een avatar</p>
                <div class="scroll">
                    <div class="next">
                        <img src="img/avatarkonijntje.svg" alt="avatar">
                        <img src="img/avatarfurry.svg" alt="avatar">
                        <img src="img/avatarkikker.svg" alt="avatar">
                        <img src="img/avataraardbei.svg" alt="avatar">
                    </div>
                </div>
                <p>Kies een outfit</p>
                <div class="scroll">
                    <div class="next">
                        <img src="img/avatarshort1.png" alt="avatar">
                        <img src="img/avatarshort3.png" alt="avatar">
                        <img src="img/avatardress3.png" alt="avatar">
                        <img src="img/avatardress1.png" alt="avatar">
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach;?>
<?php endif; ?>
<footer><?php include_once("navchild.php"); ?></footer>
<script>
function showConfirmation(newAvatar) {
    var overlay = document.createElement('div');
    overlay.className = 'overlay';

    var confirmBox = document.createElement('div');
    confirmBox.className = 'confirm-box';

    var message = document.createElement('p');
    message.textContent = 'Dit item kost je 5 sterren. Wil je deze inzetten?';
    message.className = 'tekst';

    var btnContainer = document.createElement('div');
    btnContainer.className = 'btn-container';

    var imgContainer = document.createElement('div');
    imgContainer.className = 'img-container';

    var image = document.createElement('img');
    image.src = 'img/ster.png';
    image.className = 'star';

    var yesBtn = document.createElement('button');
    yesBtn.className = 'btn-yes';

    var yesImg = document.createElement('img');
    yesImg.src = 'img/duimop.png';
    yesImg.alt = 'Yes';

    yesBtn.appendChild(yesImg);

    var noBtn = document.createElement('button');
    noBtn.className = 'btn-no';

    var noImg = document.createElement('img');
    noImg.src = 'img/duimlaag.png';
    noImg.alt = 'No';

    var sentence = document.createElement('p');
    sentence.className = 'overlay-sentence';

    noBtn.appendChild(noImg);
    imgContainer.appendChild(image);

    btnContainer.appendChild(yesBtn);
    btnContainer.appendChild(noBtn);

    confirmBox.appendChild(message);
    confirmBox.appendChild(sentence);
    confirmBox.appendChild(imgContainer);
    confirmBox.appendChild(btnContainer);

    overlay.appendChild(confirmBox);
    document.body.appendChild(overlay);

    yesBtn.addEventListener('click', function() {
        // AJAX request to update the avatar
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    // Update the displayed avatar image in the .head div
                    var headDiv = document.querySelector('.head');
                    var headImage = headDiv.querySelector('img');
                    headImage.setAttribute('src', newAvatar);

                    document.body.removeChild(overlay);
                } else {
                    sentence.textContent = 'Je hebt onvoldoende sterren om dit item te kopen.';
                    yesBtn.disabled = true;
                    document.querySelector(".tekst").classList.add("hidden");
                }
            }
        };

        xhr.open("POST", "updateAvatar.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("avatar=" + encodeURIComponent(newAvatar));
    });

    noBtn.addEventListener('click', function() {
        document.body.removeChild(overlay);
    });
}

window.addEventListener('DOMContentLoaded', (event) => {
    var spaceDiv = document.querySelector('.space');
    var avatarImages = spaceDiv.querySelectorAll('img');

    avatarImages.forEach(function(image) {
        image.addEventListener('click', function(e) {
            var clickedImageSrc = e.target.src;
            showConfirmation(clickedImageSrc);
        });
    });
});



</script>
</body>
</html>