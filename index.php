<?php require('connection.php');

session_start();

?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script
	src="https://kit.fontawesome.com/64d58efce2.js"
	crossorigin="anonymous"
	></script>
	<link rel="stylesheet" href="style.css" />
	<title>Sign in & Sign up Form</title>
</head>
<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form method="POST" action="login_register.php" class="sign-in-form">
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="email_username" placeholder="email/username">
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="password">
					</div>
					<button type="submit" name="login" class="btn solid">Log In</button>
				</form>
				
				<form method="POST" action="login_register.php" class="sign-up-form">
					<h2 class="title">Sign up</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="fullname" placeholder="fullname">
					</div>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="username" placeholder="username">
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" name="email" placeholder="Email">
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="password">
					</div>
					<button type="submit" name="register" class="btn">Sign Up</button>
					
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						Are you new one? Just Sign Up here to continue.
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
				</div>
				<img src="img/log.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Already you have account !. Log In here.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
				</div>
				<img src="img/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>