<?php 
include'secure_includes.php';
if (isset($_POST['submit_signup'])) {
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$firstname = sanitize($_POST['firstname']);
		$lastname = sanitize($_POST['lastname']);
		$email = sanitize($_POST['email']);
		$password = sanitize($_POST['password']);
		$registration_date = sanitize(date("Y/m/d"));

		//create user
		$sql= "INSERT INTO users(user_firstname,user_lastname,user_email,pass,roll_id,registration_date) VALUES('$firstname','$lastname','$email','$password',1,'$registration_date')";
		if (mysqli_query($dbc, $sql)) {
			header("Location:".$baseurl."login.php");
		} else {
			echo "Something went wrong, try again please";
	}//END if else
	mysqli_close($dbc);
	} //end if post
	} //end if submit_signup
	?>