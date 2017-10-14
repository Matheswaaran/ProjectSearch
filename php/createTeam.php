<?php
	include 'includes/dbconfig.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$team_name = $_POST["tn"];
		$team_leader = $_POST["tl"];
		$team_member1 = $_POST["tm1"];
		$team_member2 = $_POST["tm2"];
		$team_member3 = $_POST["tm3"];
		$coordinator = $_POST["coordinator"];

		$create_team_sql = mysqli_query($con,"INSERT INTO team_table(Team_name,Team_Leader,Team_Member1,Team_Member2, Team_Member3,coordinator) VALUES ('$team_name','$team_leader','$team_member1','$team_member2','$team_member3','$coordinator');");

		if ($create_team_sql) {
			echo '<script> alert("Successfully Created");</script>';
			echo '<script> window.location="../home.php"; </script>';
		}else{
			echo '<script> alert("Creating error. Please try again Later.");</script>';
			echo '<script> window.location="../home.php"; </script>';
		}
	}
?>