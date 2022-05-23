<?php
	require '../session.php';
	require '../../db.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$skill=$_POST['skill'];
		$gpa=$_POST['gpa'];
		$progress=$_POST['progress'];
        $year=$_POST['year'];     
        

        $update="UPDATE fact SET feature_item='$skill',active_products='$gpa',year_experience='$progress',clients='$year'";
		// $insert="INSERT INTO fact (feature_item,active_products,year_experience,clients) VALUES ('$skill','$gpa','$progress','$year')";
		$query=mysqli_query($db,$update);
		if ($query) {
			header("location:fact.php");
			$_SESSION['success']="Skill added Successfully";
		}
		else{
			header("location:fact.php");
			$_SESSION['success']="Something is wrong";

		}
	}
?>