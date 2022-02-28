
   
<?php
$servername = "localhost:8889";
$username = "mamp";
$password = "hello123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=project_store", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo"connected in here";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>