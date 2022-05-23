<?php
	require '../session.php';
	require '../../db.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$title=$_POST['title'];
		$summary=$_POST['summary'];
		$icon=$_POST['icon'];

		$inser="INSERT INTO services (title,summary,icon) VALUES ('$title','$summary','$icon')";
		$query=mysqli_query($db,$inser);
		if ($query) {
			header("location:service.php");
			$_SESSION['success']="Service added Successfully";
		}
		else{
			header("location:service.php");
			$_SESSION['success']="Something is wrong";

		}
	}
?>