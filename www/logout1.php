<?php

session_start();

unset($_SESSION['logged']);
unset($_SESSION['user_id']);

header('Location: index.php');

