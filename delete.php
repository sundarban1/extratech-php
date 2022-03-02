<?php 
    include 'inc/connection.php';
    session_start();

    $userId = $_GET['id'] ?? 0;
    
    //before deleting check if user exist or not
    $sql = $conn->query("SELECT * FROM users WHERE id = '$userId'");
    $user = $sql->fetch();
    if(!empty($user)){
        if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != $userId ){

            $sql = $conn->prepare("DELETE FROM users WHERE id = $userId");
            if ($sql->execute()){
                header ('Location: home.php');
                
            }
        }else{
            echo "Cannot delete, user currently logged in";
        }

    }else{
        echo "User does not exist.";
    }

    


?>