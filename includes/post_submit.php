<?php
include'secure_includes.php';
// if (isset($_POST['submit_login'])) {
if ($_SERVER['REQUEST_METHOD']=='POST') {


	$post = $_POST['post'];
	$date = date("Y/m/d");
	sanitize($post, $date);


	$sql= "INSERT INTO posts(`post_content`,`user_id`, `post_date`) VALUES('$post','$user_id','$date')";

	if (mysqli_query($dbc, $sql)) {
		header("Location:".$baseurl."index.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}

	mysqli_close($dbc);
}
?>