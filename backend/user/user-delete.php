<?php
	session_start();
	require '../../db.php';

	$id=$_GET['id'];
	// $delete="DELETE FROM users WHERE id=$id";
	$delete="UPDATE users SET status=2 WHERE id=$id";
	$query=mysqli_query($db,$delete);

	if ($query) {
		$_SESSION['delete']="Delete Users Succesfully";
		header('location:all-users.php');
	}
	else
	{
		echo "Delete Unsuccesfull";
	}
?>