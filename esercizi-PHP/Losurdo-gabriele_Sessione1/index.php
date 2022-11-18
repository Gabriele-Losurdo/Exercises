<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================--> 
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
<?php
if(!isset($_POST["login"])){
	session_start();
	if(isset($_POST["logout"])){
		logout();
	}else{
		index();
	}
}else{
	login();
}


function index(){ // initial form
	echo <<< END
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="post" action=""> 
						<span class="login100-form-logo">
							<img class="Photo" src="images/avatar.png">
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Log in
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input class="input100" type="text" name="username" placeholder="Username">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" name="login" class="login100-form-btn">
								Login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	END;
}

function login(){ // login

	$username = $_POST["username"];
	$password = $_POST["pass"];

	//Salvo i dati nella sessione
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	echo <<< END

	<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="post" action=""> 
						<span class="login100-form-logo">
							<img class="Photo" src="images/avatar.png">
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Benvenuto $username, login effettuato
						</span>

						<div class="container-login100-form-btn">
							<button type="submit" name="logout" class="login100-form-btn">
								Logout
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	END;
}

function logout(){ // logout
	session_unset(); // cancello tutte le variabili della sessione

	echo <<< END

	<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="post" action=""> 
						<span class="login100-form-logo">
							<img class="Photo" src="images/avatar.png">
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Logout effettuato
						</span>

						<div class="container-login100-form-btn">
							<button type="submit" name="Bye" class="login100-form-btn">
								Torna al login
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	END;
}
?>
		
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>