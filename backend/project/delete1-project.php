<?php
	require '../session.php';
	require '../../db.php';

	$id=$_GET['id'];
	$select="SELECT * FROM projects WHERE id=$id";
	$query=mysqli_query($db,$select);
	$assoc=mysqli_fetch_assoc($query);

	$img_path='../../uploads/project/'.$assoc['thumbnail'];

	if (file_exists($img_path)) {
		unlink($img_path);
	}

	$delete1="DELETE FROM projects WHERE id=$id";
	$q=mysqli_query($db,$delete1);

	$_SESSION['delete']="Delete project Succesfully";
	header('location:project-view.php');	
?>