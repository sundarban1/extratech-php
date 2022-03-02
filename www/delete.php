<?php

include 'inc/db_config.php';

$userId = $_GET['id'] ?? 0;

//TODO: before deleting check if user exist or not H/W
//TODO: not delete login user
$loginSql = "SELECT * FROM users WHERE id = '$userId'";

$sql = $conn->query($loginSql);
$user = $sql->fetch();
if ($user) {
  $sql = $conn->prepare("DELETE FROM users WHERE id = $userId");
  if ($sql->execute()) {
    header('Location: home.php', TRUE, 301);
  }
}