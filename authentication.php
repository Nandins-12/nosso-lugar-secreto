<?php 
    session_start();

    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
        header('location: index.php?login=error2');
    }
?>