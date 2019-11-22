<?php

session_start();
if($_SESSION['username'] != NULL){
    session_unset();
}
header('location: ../views/index.html');
