<?php 
include 'includes/secure_includes.php';
session_destroy();		
header("Location:".$baseurl."login.php");
?>