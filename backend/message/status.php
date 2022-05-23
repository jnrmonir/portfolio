<?php
	require '../../db.php';
	$id=$_GET['id'];

	$select="SELECT * FROM contacts WHERE id = $id";
	$q=mysqli_query($db,$select);
	$assoc=mysqli_fetch_assoc($q);
	
	if ($assoc['status'] == 1) {
		$update="UPDATE contacts SET status=2 WHERE id = $id";
		$q=mysqli_query($db,$update);
		header('location:message.php');
	}
	else{
		$update="UPDATE contacts SET status=1 WHERE id = $id";
		$q=mysqli_query($db,$update);
		header('location:message.php');
	}

?>