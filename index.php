<?php
include 'inc/header.php';
?>
<?php
if (isset($_POST['index'])) {

  $errorMsg = '';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg = "Your email is emoty or invalid.";
  }
  elseif (empty($password) || strlen($password)<6){
    $errorMsg="Your password is empty or less than 6 letters";
  }
?>
<div class="container">
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
