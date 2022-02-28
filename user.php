<?php

include 'inc/header.php';

if(isset($_GET['u'])){
    $name = $_GET['u'];
    echo "<h1>Welcome! ". $name ."</h1>";
}else{
    echo '<h1>Direct view!</h1>';
}

include 'inc/footer.php';