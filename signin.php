<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login From Here</title>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="signin-form">
		<form action="" method="post">
			
			<div class="form-header">
				<h2>Sign In</h2>
				<p>Make Your KothaBarta Here</p>
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" placeholder="email@gmail.com" required>
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="pass" class="form-control" placeholder="Password...">
			</div>

			<!-- recover password -->
			<div class="small">Forgot Password? <a style="color: red;" href="forgot_pass.php">Click Here</a></div> <br>

			<!-- submit button -->
			<div class="form-group">
				<button type="submit" style="background: #6e8f77;" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
			<!-- <?php //include("signin_user.php");?> -->
		</form>

		<div class="text-center small" style="color: #67428B;">Don't Have an Account? <a style="color: red;" href="signup.php">Create Your Account</a></div>
	</div>

</body>
</html>