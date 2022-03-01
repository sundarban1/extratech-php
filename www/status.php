<?php

include 'inc/db_config.php';

$userId = $_GET['id'] ?? 0;
$userStatus = $_GET['status'] ?? 'active';

$status = $userStatus === 'active' ? 'inactive':'active';

$sql = $conn->prepare("UPDATE users SET status= '$status' WHERE id = '$userId'");
if($sql->execute()){
    header('Location: home.php',TRUE, 301);
}