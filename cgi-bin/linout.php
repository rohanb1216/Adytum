<?php

if($_POST['login-logout-btn']){
    session_start();
    if($_SESSION['username'] == NULL){
        header('location: login.php');
    }
    else{
        if($_SESSION['username'] != NULL){
            session_unset();
        }
        header('location: ../index.html');
    }
}

?>