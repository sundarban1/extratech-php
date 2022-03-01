<?php 
session_start();
?>


<?php
include 'inc/db_config.php';
include 'inc/header.php';
?>

<?php
if (isset($_POST['login'])) {

  $errorMsg = '';

  $email = trim($_POST['email']);
  $password = trim($_POST['password']);

if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorMsg = "Your email is empty or invalid.";
  
  } elseif(empty($password)){
    $errorMsg = 'Your password is empty';
}
$loginSql = "SELECT * FROM users WHERE email = '$email'";

      $sql = $conn->query($loginSql);
      $user = $sql->fetch();
      echo $_SESSION['user_id'];

      if (!empty($user)) {

        $verify = password_verify($password, $user['password']);
      }
        // Print the result depending if they match
        if ($verify) {
          $_SESSION['logged'] = true;
          $_SESSION['user_id'] = $user['id'];
          header('Location:user.php');
         die();
  } else
   {
    $errorMsg = 'incorrect username and password.';
}

}
      

?>

<?php

include 'inc/navbar.php';

?>

<div class="card ">
<div class="card-header">
    <h3 class='text-center'><i class="fas fa-sign-in-alt mr-2"></i>User login</h3>
  </div>
  <div class="card-body">
      <div style="width:450px; margin:0px auto">
      <form class="" action="" method="post">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email"  class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button type="submit" name="login" class="btn btn-outline-success">Login</button>
          </div>
      </form>
    </div>
</div>
</div>


<?php
include 'inc/footer.php';
?>
