<?php
$db_name = "localhost";
$db_user = "bina";
$db_pass = "12345";

try {
  $conn = new PDO("mysql:host=$db_name;dbname=extratech", $db_user, $db_pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>