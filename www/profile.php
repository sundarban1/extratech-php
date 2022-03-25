<?php
include 'inc/header.php';
include 'inc/db_config.php';
include 'inc/auth.php';

$userId = $_GET['id'] ?? 0;
$sql = $conn->query("SELECT * FROM users where id = '$userId'");
$user = $sql->fetch();
?>

<?php 

if(isset($_POST['update'])){
 $userId = $_POST['id'];
 $name = trim($_POST['name']);
 $username = trim($_POST['username']);
 $email = trim($_POST['email']);
 $mobile = trim($_POST['mobile']);

 //before updating form validation H/W
 // give profile link to the login user
 // block all pages if user is not loggeed in - auth

 $query = "UPDATE users SET name= '$name', username= '$username', email = '$email', mobile = '$mobile' WHERE id = '$userId'";

 $sql = $conn->prepare($query);
 if($sql->execute()){
     header('Location: profile.php?id='.$userId,TRUE, 301);
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
        <li class="nav-item">

          <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?id=7"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="card ">
<div class="card-header">
    <h3>User Profile <span class="float-right"> <a href="index.php" class="btn btn-primary">Back</a> </h3>
  </div>
  <div class="card-body">
    <div style="width:600px; margin:0px auto">
    <form class="" action="" method="POST">
      <div>
        <input type="hidden" value="<?php echo $user['id']; ?>" name="id">
      </div>
        <div class="form-group">
          <label for="name">Your name</label>
          <input type="text" name="name" value="<?php echo $user['name']; ?> " class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Your username</label>
          <input type="text" name="username" value="<?php echo $user['username'];?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" class="form-control">
        </div>
        <div class="form-group">
          <label for="mobile">Mobile Number</label>
          <input type="text" id="mobile" name="mobile" value="<?php echo $user['mobile']; ?>" class="form-control">
        </div>
        <div class="form-group">
        <button type="submit" name="update" class="btn btn-success">Update</button>
        </div>
    </form>
  </div>
</div>
</div>

  <?php
  include 'inc/footer.php';

  ?>