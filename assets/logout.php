<?php
    session_destroy();
    session_start();
    $_SESSION['loginError'] = 0;
    $_SESSION['userName'] = '';
    header('location: ../index.php');

?>
