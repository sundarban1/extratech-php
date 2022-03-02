<?php 
    include 'inc/connection.php';

    $userId = $_GET['id'] ?? 0;
    $userStatus = $_GET['status'] ?? 'active';

    if ($userStatus = 'active'){
        $sql = $conn->prepare("UPDATE users SET status = 'inactive");
        if ($sql->execute()){
            header ('Location: home.php');
            
        }

    }else{
        $sql = $conn->prepare("UPDATE users SET status = 'active");
        if ($sql->execute()){
            header ('Location: home.php');
            
        }

    }

