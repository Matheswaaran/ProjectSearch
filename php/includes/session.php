<?php
	include 'dbconfig.php';
	session_start();

	$user_check = $_SESSION['login_user'];
	$ses_sql = mysqli_query($con,"SELECT * FROM admin_table WHERE username = '$user_check'");
	// $row = mysqli_fetch_row($ses_sql);
	// $login_session = $row['username'];

	if (!isset($_SESSION['login_user'])) {
		header("location: login.html");
	}
?>