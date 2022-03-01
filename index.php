<?php
include 'inc/connection.php';
include 'inc/header.php'; ?>
<div class="container">
  <?php 
  include 'inc/navbar.php'; ?>

<?php
if (isset($_POST['login'])) {

  $errorMsg = '';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorMsg = "Your email is empty or invalid.";
  }elseif(empty($password)){
    $errorMsg = "Your password is empty.";
  }else{
    // check if the log in infos are in the database or not
    $loginSql = "SELECT * FROM users WHERE email = '$email'";
    $sql = $conn->query($loginSql);
    $user = $sql->fetch();
    if(!empty($user)){
      $verify = password_verify($password, $user['password']);

      // Print the result depending if they match
      if ($verify) {

        $_SESSION['logged'] = true;
        $_SESSION['user_id'] = $user['id'];

        header('Location: home.php');
        //exit();

        //echo "Logged in Successfully";
      }else{
        $errorMsg = "Incorrect email or password";
      }
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

      <form class="" action="index.php" method="post">
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


<?php include 'inc/footer.php'; ?>