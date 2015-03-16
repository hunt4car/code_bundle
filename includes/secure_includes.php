<?php //secure_includes.php 

//begin output buffering (end is in footer)
ob_start();
	//these files are required for every secure page of the site
include'mysqli_connect.php';
include'functions.php';
include'sessions.php';
include'blockaccess.php';
?>