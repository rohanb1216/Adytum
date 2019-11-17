<?php 
session_start();
if($_SESSION == NULL){
    echo "Login";
}
else{
    echo "Logout";
}