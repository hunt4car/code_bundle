<?php

$servername = "localhost";
$uname = "root";
$password = "root";
$dbname = "database_name";

    // Create connection
$dbc = mysqli_connect($servername, $uname, $password, $dbname);
    // Check connection
if (!$dbc) {
	die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($dbc, "utf8");

?>