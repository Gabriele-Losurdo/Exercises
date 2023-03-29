
<div class="index" id="container">
<?php
	$UserController = require('UserController.php');
	if(isset($_POST["signin"]))
	{
		$UserController.signin();
	}
	else if(isset($_POST["signup"]))
	{
		$UserController.signup();
	}

?>
	<div class="container">
		<form method="POST">
			<h1>Create Account</h1>
			<input type="text" name="user[firstname]" placeholder="Firstname" />
			<input type="text" name="user[lastname]" placeholder="Lastname" />
			<input type="text" name="user[username]" placeholder="Username" />
			<input type="email" name="user[email]" placeholder="Email" />
			<input type="password" name="user[pwd]" placeholder="Password" />
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="container">
		<form method="POST">
			<h1>Sign in</h1>
			<input type="text" name="user[username]" placeholder="Username" />
			<input type="password" name="user[pwd]" placeholder="Password" />
			<button type="submit" name="signin">Sign In</button>
		</form>
	</div>
</div>