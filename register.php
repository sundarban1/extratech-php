<?php 
include 'inc/db_config.php';
include 'inc/header.php';
?>

<?php
if (isset($_POST['register'])) {

  $errorMsg = '';

  $name = trim($_POST['name']);
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];


  if (empty($name) || !preg_match("/^[a-zA-z]*$/", $name)) {
    $errorMsg = "Your name is empty or invalid.";
  } elseif (empty($username) || !ctype_alnum($username)) {
    $errorMsg = "Your username is empty or invalid.";
  } elseif(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorMsg = "Your email is empty or invalid.";
  } elseif(empty($mobile) || !preg_match('/^\d{10}$/',$mobile)){
    $errorMsg = 'Your mobile number is not valid.';
  } elseif(empty($password) || strlen($password) < 6){
    $errorMsg = 'Your password is empty or less than six letters.';
  }else{

    $sql = "INSERT INTO `users` ('rabin', 'test123', 'helo@yaho.com', '1234567890', '123456')";
            $conn->exec($sql);
  }
}
?>

<div class="container">
<?php

include 'inc/navbar.php';

?>

  <div class="card ">
    <div class="card-header">
      <h3 class='text-center'>User Registration</h3>
      <?php if (!empty($errorMsg)) {
      ?>
        <p class="text-center"><?php echo $errorMsg; ?></p>
      <?php
      } ?>
    </div>
    <div class="cad-body">
      <div style="width:600px; margin:0px auto">

        <form class="" action="register.php" method="post">
          <div class="form-group pt-3">
            <label for="name">Your name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="username">Your username</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="text" name="mobile" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
            <input type="hidden" name="roleid" value="3" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" name="register" class="btn btn-success">Register</button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <?php include 'inc/footer.php' ?>