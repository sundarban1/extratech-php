
   
<?php
$servername = "localhost:8889";
$username = "user";
$password = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDb", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>