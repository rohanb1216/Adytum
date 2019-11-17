<?php 
session_start();
if($_SESSION['username'] == NULL){
    echo "Login";
}
else{
    echo "Logout";
}