<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $_SESSION['email']=$email;
    $_SESSION['fez_login']=true;

    header("location: main.php");
?>