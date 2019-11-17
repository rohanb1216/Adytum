<?php

if($_POST['login-logout-btn']){
    session_start();
    if($_SESSION['username'] == NULL){
        header('location: login.php');
    }
    else{
        include_once('log_out.php');
    }
}