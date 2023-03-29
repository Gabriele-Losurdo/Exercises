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
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Create Account</h1>
			<input type="text" name="user[firstname]" placeholder="Firstname" requiredrequired/>
			<input type="text" name="user[lastname]" placeholder="Lastname" requiredrequired/>
			<input type="text" name="user[username]" placeholder="Username" required/>
			<input type="email" name="user[email]" placeholder="Email" required/>
			<input type="password" name="user[pwd]" placeholder="Password" required/>
			<button type="submit" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign in</h1>
			<input type="text" name="user[username]" placeholder="Username" required/>
			<input type="password" name="user[pwd]" placeholder="Password" required/>
			<button type="submit" name="signin">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>