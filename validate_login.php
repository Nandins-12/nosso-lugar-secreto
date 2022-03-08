<?php 

    session_start();

    define('password', 'cu');

    if (password == $_POST['password']) {
        $_SESSION['authenticated'] = true;
        header('location: home.php');
    } else {
        $_SESSION['authenticated'] = false;
        header('location: textinhos.php?login=error');
    }

?>