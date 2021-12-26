<?php 

    session_start();

    define('password', 'FernandoLindoDemais123');

    if (password == $_POST['password']) {
        $_SESSION['authenticated'] = true;
        header('location: home.php');
    } else {
        $_SESSION['authenticated'] = false;
        header('location: index.php?login=error');
    }

?>