<?php
	include 'includes/dbconfg.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$team_name = $_POST["tn"];
		$team_leader = $_POST["tl"];
		$team_member1 = $_POST["tm1"];
		$team_member2 = $_POST["tm2"];
		$team_member3 = $_POST["tm3"];
		$coordinator = $_POST["coordinator"];

		$create_team_sql = mysqli_query($con,"INSERT INTO project_table(Team_name,Team_Leader ,Team_Member1,Team_Member2, Team_Member3,coordinator) VALUES ('$tn','$t1','$tm1','$tm2','$tm3','$coordinator')");

		if ($create_team_sql) {
			echo '<script> alert("Successfully Created");</script>';
		}else{
			echo '<script> alert("Creating error. Please try again Later.");</script>';
		}
	}
?>