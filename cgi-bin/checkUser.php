<?php

session_start();
require_once('connect/mysqli_connect.php');
$errors = array();

function process_user(&$username,&$password){

    trim($username);
    trim($password);
    $errors = array();
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    return $errors;

}

function check_user($username,$password,$dbc){
    $errors = array();
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($dbc, $query);
    if (mysqli_num_rows($results) != 1) {
        array_push($errors, "Wrong username/password combination");
    }
    return $errors; 

}

if (isset($_POST['login'])) {
    echo "login";
    $username = mysqli_real_escape_string($dbc, $_POST['username']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $username_errors = array();

    $processing_errors = process_user($username,$password);
    if(count($processing_errors) == 0){
        $username_errors = check_user($username,$password,$dbc);
    }

    if(count($username_errors) == 0){
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        echo "You are now logged in";  
  	    header('location: ../views/home.phtml');
    }
    $errors = $processing_errors;
    if(empty($processing_errors)){
        $errors = $username_errors;

    }

  
}