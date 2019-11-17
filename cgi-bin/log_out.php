<?php

session_start();
if($_SESSION['username'] != NULL){
    $_SESSION['username'] = NULL;
}