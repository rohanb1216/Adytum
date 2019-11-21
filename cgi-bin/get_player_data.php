<?php
include_once('connect/mysqli_connect.php');
// header("Content-Type: application/json; charset=UTF-8");
session_start();
$username = $_SESSION["username"];
$query = "SELECT * FROM player_data WHERE username= '$username';";

$result = mysqli_query($dbc, $query);
$user_data = mysqli_fetch_assoc($result);
$_SESSION['user_data']=$user_data['user_data'];
// echo $user_data['username'];
// echo $user_data["user_data"];

$player_data_json = $user_data['user_data'];
$_GET["user_data"] = $player_data_json;
echo $_GET["user_data"];

?>