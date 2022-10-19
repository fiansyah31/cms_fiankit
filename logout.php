<?php
    session_start();
    unset($_SESSION['id']);
    session_destroy();
    session_unset();
    header('location:index.php');
?>