<?php
$pagetitle = "login";
include 'includes/header.php';
?>

<div id="loginpage">
	<form action="includes/login_submit.php" method="post">
		<input class="input_form" name="username" placeholder="Email" type="email" required></input>
		<input class="input_form" name="password" placeholder="Password" type="password" required></input>
		<input id="submit_button" type="submit" value="Submit" name="submit_login" />

	</form>

	<a href="<?php echo $baseurl."signup.php"; ?>"><button id="signup">Sign Up</button></a>

</div>

<div id="about">
	<!-- info about the site and how to use it -->
</div>
<?php 
include 'includes/footer.php';
?>