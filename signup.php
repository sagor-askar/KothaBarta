<?php 
	include("signup_user.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Account | KothaBarta</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="signup-form">
		<form action="signup_user.php" method="post">
			
			<div class="form-header">
				<h2>Create New Account</h2>
				<p>Stay Connected... Make KothaBarta</p>
			</div>

			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="user_name" class="form-control" placeholder="Example: sagor" autocomplete="off" required>
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="user_pass" class="form-control" placeholder="Enter password">
			</div>

			<div class="form-group">
				<label>Email Address:</label>
				<input type="email" name="user_email" class="form-control" placeholder="Example: email@gmail.com" required>
			</div>

			<div class="form-group">
				<label>Phone No.:</label>
				<input type="text" name="user_phone" class="form-control" placeholder="Example: 0123456789" required>
			</div>

			<div class="form-group">
				<label>Country:</label>
				<select class="form-control" name="user_country" required>
					<option>Select a Country</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="India">India</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Taiwan">Taiwan</option>
					<option value="Nepal">Nepal</option>
				</select>
			</div>

			<div class="form-group">
				<label>Gender:</label>
				<select class="form-control" name="user_gender" required>
					<option>Select your gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Others">Others</option>
				</select>
			</div>

			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a style="color: red;" href="#">Terms and Conditions</a> &amp; <a style="color: red;" href="#">Privacy Policy.</a></label>
			</div>


			<!-- submit button -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up" style="background: #6e8f77;">Sign Up</button>
			</div>

		</form>

		<div class="text-center small" style="color: #67428B;">Already Have an Account? <a style="color: red;" href="signin.php">Sign In</a></div>
	</div>

</body>
</html>