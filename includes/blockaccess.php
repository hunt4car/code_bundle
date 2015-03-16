<?php
	//if the user is logged in...
if(!isset($loggedin) or $loggedin ==0) {	
	header("Location:".$baseurl."logout.php");	
} 

?>