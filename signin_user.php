<?php
	// connection
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "Kothabarta");

	if(isset($_POST['sign_in'])){
		$user_email = $_POST['user_email'];
		$user_pass = $_POST['user_pass'];

		// select query
		$select_user = "SELECT * FROM user WHERE user_email = '$user_email' AND user_pass = '$user_pass' ";
		$query = mysqli_query($connection, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1){
			$_SESSION['user_email'] = $user_email;

			$update_msg = mysqli_query($connection, "UPDATE user SET log_in = 'Online' WHERE user_email = $user_email");

			$user = $_SESSION['user_email'];
			$get_user = "SELECT * FROM user WHERE user_email = '$user_email' ";
			$run_user = mysqli_query($connection, $get_user);
			$row = mysqli_fetch_array($run_user);

			$user_name = $row['user_name'];

			echo "<script>window.open('home.php?user_name=$user_name', '_self')</script>";
		}
		else {
			echo "
			<div class='alert alert-danger'>
				<strong>Check your username and password!</strong>
			</div>
			";
		}
	}
?>