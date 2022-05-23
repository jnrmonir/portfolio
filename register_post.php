<?php
	require 'db.php';
	session_start();

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		if(empty($name)){
			$_SESSION['name']="Name field is requered";
			header('location:register.php');
			die();
		}
		else{
			$name=htmlentities($_POST['name'],ENT_QUOTES);
		}

		if(empty($email)){
			$_SESSION['email']="Email field is requered";
			header('location:register.php');
			die();
		}
		else{
			$select="SELECT COUNT(*) as total FROM users WHERE email='$email'";
			$query=mysqli_query($db,$select);
			$assoc=mysqli_fetch_assoc($query);
			if ($assoc['total']>0) {
				$_SESSION['email']="Your Email already registered";
			    header('location:register.php');
			    die();
			}
			else{
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				$email=$_POST['email'];
			}
			else{
				$_SESSION['email']="Your Email is Invalid";
			    header('location:register.php');
			    die();
			}
		}
		}
		

		if(empty($password)){
			$_SESSION['password']="Password field is requered";
			header('location:register.php');
		}
		else{
			if(strlen($password)<8){
				$_SESSION['password']="Password min 8 character";
				header('location:register.php');
			}
			else{
				$password=password_hash($password, PASSWORD_BCRYPT);
			}
		}

		$insert = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
		$query=mysqli_query($db,$insert);

		     if($query){
                  $_SESSION['ok']="Registration Succesfully";
                  header('location:register.php');
                }
                else{
                  $_SESSION['ok']="Registration Unsuccesfull";
                  header('location:register.php');
                }
		
	}



?>