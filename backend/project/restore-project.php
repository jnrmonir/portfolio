<?php
	session_start();
	require '../../db.php';

	$id=$_GET['id'];

	$select="SELECT * FROM projects WHERE id=$id";
	$query=mysqli_query($db,$select);
	$assoc=mysqli_fetch_assoc($query);

	$img_path='../../uploads/project/'.$assoc['thumbnail'];

	if (file_exists($img_path)) {
		link($img_path);
	}
	$restore="UPDATE projects SET status=1 WHERE id=$id";
	$query1=mysqli_query($db,$restore);

	if ($query1) {
		$_SESSION['delete']="Restore project Succesfully";
		header('location:project-view.php');
	}
	else
	{
		$_SESSION['restore1']="Restore Unsuccesfull";
		header('location:project-view.php');
	}
?>