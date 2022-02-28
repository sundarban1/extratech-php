<?php

include 'inc/db_config.php';
include 'inc/header.php';

?>
<div class="container">
<?php

include 'inc/navbar.php';


if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errorMsg = "Your email is empty or invalid.";
  }elseif(empty($password) || strlen($password) < 6){
    $errorMsg = 'Your password is empty or less than six letters.';
  }else{
    $query = "SELECT * FROM `users` WHERE `email`=? AND `password`=? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->execute([$email, $password]);
    $result = $stmt->fetch();

    if($result['email'] === $email && $result['password'] === $password){
      header ('Location: ./user.php?u='.$result['name']);
    }else{
      echo 'failed';
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
            <input type="email" name="email"  class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password"  class="form-control">
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
