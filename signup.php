<?php
$pagetitle = "Sign up";
$loggedin = 1;
include 'includes/header.php';
?>

<div id="signuppage">

<form action="includes/signup_submit.php" method="post">
	<input class="input_expandable" name="email" placeholder="Email" type="email" required autocomplete="off"></input>
	<input class="input_expandable" name="firstname" placeholder="First Name" type="text" required autocomplete="off"></input>
	<input class="input_expandable" name="lastname" placeholder="Last Name" type="text" required autocomplete="off"></input>
	<input class="input_expandable" name="password" placeholder="Password" type="password" required autocomplete="off"></input>

	<input type="submit" value="Submit" name="submit_signup" />

</form>


</div>

<div id="about">
	<!-- info about the site and how to use it -->
</div>

<?php 
include 'includes/footer.php';
?>