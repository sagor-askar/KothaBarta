<?php
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "Kothabarta");

	if(isset($_POST['sign_up']))
	{
		// names and variables
		$user_name = $_POST['user_name'];
		$user_pass = $_POST['user_pass'];
		$user_email = $_POST['user_email'];
		$user_phone = $_POST['user_phone'];
		$user_country = $_POST['user_country'];
		$user_gender = $_POST['user_gender'];


		$query = "INSERT INTO `user`(`user_name`,`user_pass`, `user_email`,`user_phone`,`user_country`, `user_gender`) VALUES ('$user_name','$user_pass','$user_email','$user_phone','$user_country','$user_gender')";

		$query_run = mysqli_query($connection, $query);
		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Data saved") </script>';
			header('location: http://localhost/sagorphp/KothaBarta/signin.php');
			
		}
		else
		{
			echo '<script type="text/javascript"> alert("Data not saved") </script>';
			echo "<script>window.open('signup.php')</script>";
		}
	}
?>