<?php
session_start();

if($_SESSION['username'] != NULL){
    echo $_SESSION["username"];
}
else{
    echo "Anonymous";
}