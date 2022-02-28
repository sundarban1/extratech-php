<?php
include 'inc/connection.php';
include 'inc/header.php'; ?>

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
    $sql = $conn->prepare("SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'");
    $sql->execute();
    $numrows = $sql->rowCount();
    if($numrows > 0){
      echo "Logged in Successfully";
    }else{
      echo "Your email or password is invalid";
    }
  }
}

?>

<div class="container">

<nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
  <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">



    
        <li class="nav-item

        ">
          <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
        </li>
        <li class="nav-item
           active ">
          <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
        </li>

    

    </ul>

  </div>
</nav>



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