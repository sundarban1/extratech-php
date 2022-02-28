<?php
include 'inc/db_config.php';
include 'inc/header.php';

?>
<div class="container">
  <?php

  include 'inc/navbar.php';

  ?>

  <?php
  echo 'welcome to home page';

  echo $_SESSION['user_id'];
  ?>
  <?php
  include 'inc/footer.php';

  ?>