<?php
	require '../session.php';
	require '../../db.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$skill=$_POST['skill'];
		$gpa=$_POST['gpa'];
		$progress=$_POST['progress'];
		$year=$_POST['year'];

		$insert="INSERT INTO skills (skill,gpa,progress,year) VALUES ('$skill','$gpa','$progress','$year')";
		$query=mysqli_query($db,$insert);
		if ($query) {
			header("location:skill.php");
			$_SESSION['success']="Skill added Successfully";
		}
		else{
			header("location:skill.php");
			$_SESSION['success']="Something is wrong";

		}
	}
?>