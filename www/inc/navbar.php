<nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
  <a class="navbar-brand" href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">

    <?php if(isset($_SESSION['logged'])){
    ?>

<li class="nav-item">
          <a class="nav-link" href="logout1.php"><i class="fas fa-user-plus mr-2"></i>Log Out</a>
        </li>
    <?php }else{ ?>
      <li class="nav-item">
          <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
        </li>
        <li class="nav-item
           active ">
          <a class="nav-link" href="index.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
        </li>

    <?php } ?>

    </ul>
  </div>
</nav>