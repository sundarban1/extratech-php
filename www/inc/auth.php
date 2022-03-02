<?php
if (!isset($_SESSION['logged'])) {
    header('Location: index.php', TRUE, 301);
}