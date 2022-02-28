<?php
include 'inc/db_config.php';
include 'inc/header.php';

?>
<div class="container">
  <?php

  include 'inc/navbar.php';

  ?>

  <?php

  $errorMsg = '';

  if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errorMsg = "Email cannot be empty or invalid.";
    } elseif (empty($password)) {
      $errorMsg = 'Password cannot be empty.';
    } else {

      $loginSql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

      $sql = $conn->query($loginSql);
      $user = $sql->fetch();

      if (!empty($user)) {
        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user['id'];
        ob_start();
        header('Location: http://localhost:8001/index.php',TRUE, 301);
        ob_end_flush();
        die();
      } else {
        $errorMsg = 'incorrect username and password.';
      }
    }
  }

  ?>

  <div class="card ">
    <div class="card-header">
      <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
      <?php if (!empty($errorMsg)) {
      ?>
        <p class="text-center"><?php echo $errorMsg; ?></p>
      <?php
      } ?>
    </div>
    <div class="card-body">
      <div style="width:450px; margin:0px auto">
        <form class="" action="" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-success">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include 'inc/footer.php';

  ?>