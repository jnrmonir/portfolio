<?php
	require 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$email=$_POST['email'];
		$password=$_POST['password'];

		$OldPassword="SELECT COUNT(*) as total,name,password,email,user_role FROM users WHERE email='$email'";
		$query=mysqli_query($db,$OldPassword);
		$afterassoc=mysqli_fetch_assoc($query);
		$hash=$afterassoc['password'];
		
		if($afterassoc['total']>0){
			
			if (password_verify($password, $hash)) {
				if ($afterassoc['user_role']==1) {
					$_SESSION['email']=$afterassoc['email'];
					$_SESSION['name']=$afterassoc['name'];
					$_SESSION['user_role']=$afterassoc['user_role'];
			    	header('location:backend/dashboard.php');
				}
				else{
					$_SESSION['email']=$afterassoc['email'];
					$_SESSION['name']=$afterassoc['name'];
					$_SESSION['user_role']=$afterassoc['user_role'];
					header('location:backend/dashboard.php');
				}
			}
			else{
				$_SESSION['password']="Password not matched";
			    header('location:login.php');
				die();
			}
		}
		else{
			$_SESSION['email']="Email not found in your system";
			header('location:login.php');
			die();
		}

	}
?>
<!-- $email==$afterassoc['email'] &&  -->