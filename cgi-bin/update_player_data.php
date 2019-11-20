<?php
include_once('connect/mysqli_connect.php');
// header("Content-Type: application/json; charset=UTF-8");
session_start();
$username = $_SESSION["username"];
$user_data = $_SESSION["user_data"];


$query =  "UPDATE player_data 
SET 
    user_data = '$user_data'
WHERE
    username = '$username'  ";


$result = mysqli_query($dbc, $query);
$user_data = mysqli_fetch_assoc($result);
// echo $user_data['username'];
// echo $user_data["user_data"];

// $player_data_json = json_encode($user_data['user_data']);
$_SESSION["user_data"] = $player_data_json;
// echo "<script>console.log(".$_SESSION["user_data"]."); </script>";

?>