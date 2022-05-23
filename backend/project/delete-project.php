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

	$delete="UPDATE projects SET status=2 WHERE id=$id";
	$q=mysqli_query($db,$delete);

	$_SESSION['delete']="Delete project Succesfully";
	header('location:project-view.php');
	
?>