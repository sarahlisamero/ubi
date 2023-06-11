<?php
include_once("bootstrap.php");
session_start();

if (!isset($_SESSION['email'])) {
    http_response_code(401); // Unauthorized
    exit();
}

if (isset($_SESSION['child_id'])) {
    $childId = $_SESSION['child_id'];
} else {
    http_response_code(400); // Bad Request
    exit();
}

if (isset($_POST['avatar'])) {
    $avatar = $_POST['avatar'];

    // Check if the child can buy the avatar
    $child = new Child();
    $canBuy = $child->checkIfCanBuy($childId);

    if ($canBuy['can_buy']) {
        // Update the avatar image path in the database
        $conn = Db::getInstance();
        $statement = $conn->prepare("UPDATE children SET avatar = :avatar, score = score - 5 WHERE id = :childId");
        $statement->bindValue(':avatar', $avatar);
        $statement->bindValue(':childId', $childId);
        if ($statement->execute()) {
            http_response_code(200); // OK
        } else {
            http_response_code(500); // Internal Server Error
        }
    } else {
        http_response_code(403); // Forbidden - Child cannot buy
    }
} else {
    http_response_code(400); // Bad Request
}
