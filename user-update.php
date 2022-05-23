<?php
	require 'db.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$user_id=$_POST['user_id'];

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];

		$select="SELECT * FROM users WHERE id=$user_id";
		$query=mysqli_query($db,$select);
		$assoc=mysqli_fetch_assoc($query);

		// if (password_verify($password, $assoc['password'])) {
		// 	die('match');
		// }
		// else{
		// 	die('no match');
		// }

		// die();
		$update="UPDATE users SET name='$name',email='$email',
		password='$password',phone='$phone',gender='$gender', WHERE id=user_id";

		if (mysqli_query($db,$update)) {
			echo "done";
		}
		else{
			echo "something is wrong";
		}
	}
?>