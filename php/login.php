<?php
	include 'includes/dbconfig.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = "";
		$email = $_POST["email"];
		$password = $_POST["password"];
		$password = md5($password);
		$login_err = "";

		$login_query = mysqli_query($con, "SELECT * FROM admin_table WHERE emailid = '$email' AND password = '$password'");
		$login_result = mysqli_fetch_row($login_query);
		$login_array = mysqli_fetch_array($login_query);

		if ($login_result) {
			$username = $login_array['username'];
			$_SESSION['login_user'] = $username;
			header("location: ../home.php");
		}else{
			echo '<script> alert("Invalid credentials");</script>';
			echo '<script> window.location="../login.html"; </script>';
		}
	}
?>