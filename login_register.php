<?php 

require('connection.php');

session_start();
// ============ for login ==================

if(isset($_POST['login'])){

	$query = "SELECT * FROM `registered_users` WHERE `email` = '$_POST[email_username]' OR `username`='$_POST[email_username]'";

	$result = mysqli_query($con,$query);

	if($result){

		if(mysqli_num_rows($result) == 1){

			$result_fetch = mysqli_fetch_assoc($result);

			if(password_verify($_POST['password'],$result_fetch['password'])){

				$_SESSION['logged_in'] = true;

				$_SESSION['username'] = $result_fetch['username'];

				// header("location:index.php");
				echo"<script>alert('log in Successfully');</script>";

			}
			else{

				echo"<script>alert('incorrect password');
			window.location.href='index.php';
			</script>";
			}
		}
		else{
			echo"<script>alert('email or username not registered');
			window.location.href='index.php';
			</script>";
		}
	}
	else{
		echo"<script>alert('can't run query');
		window.location.href='index.php';
		</script>";
	}
}

// ============ for login  ==================

// ============ for registration ==================

if(isset($_POST['register'])){

	$user_exist_enquiry ="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";

	$result = mysqli_query($con,$user_exist_enquiry);

	if($result){

		if(mysqli_num_rows($result) > 0){

			$result_fetch = mysqli_fetch_assoc($result);

			if($result_fetch['username'] == $_POST['username']){

				echo"<script>alert('$result_fetch[username] - username already taken');
				window.location.href='index.php';
				</script>";
			}
			else{

				echo"<script>alert('$result_fetch[email] - E-Mail already taken');
				window.location.href='index.php';
				</script>";
			}

		}
		else{

			$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

			$query="INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";

			if(mysqli_query($con,$query)){

				echo"<script>alert('Registered Successfully');
				window.location.href='index.php';
				</script>";

			}
			else{
				echo"<script>alert('can't run query');
				window.location.href='index.php';
				</script>";
			}
		}

	}
	else{
		echo"<script>alert('can't run query');
		window.location.href='index.php';
		</script>";
	}
}

// ============ for registration ==================

?>