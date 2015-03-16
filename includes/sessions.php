<?php 
// sessions.php
session_start();

// sessions initialized in login_submit.php
$user_id = $_SESSION["user_id"];
$first_name = $_SESSION["first_name"];
$roll_id = $_SESSION["roll"];
$email = $_SESSION["email"];
$user_id = $_SESSION['user_id'];
$loggedin = $_SESSION["loggedin"];


?>