<?php
    session_start();
    $password = 'admin';
    if($_POST['password'] == $password){
        $_SESSION['login'] = "on";
        header('Location: admin.php');
    }else{
        header('Location: index.php');
    }
?>