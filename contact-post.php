<?php
	require 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");

		$select="INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message') ";
		$query=mysqli_query($db,$select);
		
		$_SESSION['send']="Message send successfully";
		if ($query) {
					header('location:index.php#contact');
				}		
	}
?>