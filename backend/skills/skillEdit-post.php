<?php
	require '../session.php';
	require '../../db.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$user_id=$_POST['user_id'];

		$skill=$_POST['skill'];
		$gpa=$_POST['gpa'];
		$progress=$_POST['progress'];
		$year=$_POST['year'];

		$select="SELECT * FROM skills WHERE id=$user_id";
        $query=mysqli_query($db,$select);
        $assoc=mysqli_fetch_assoc($query);

        $update="UPDATE skills SET skill='$skill',gpa='$gpa',progress='$progress',year='$year' WHERE id=$user_id";

        if (mysqli_query($db,$update)) {
        	// $update="UPDATE skills SET skill='$skill',progress='$progress',year='$year' WHERE id=$user_id";
        	header("location:skill-view.php");
        	$_SESSION["skills"]="update successfully";
        }
        else{
        	// $update="UPDATE skills SET skill='$skill',progress='$progress',year='$year' WHERE id=$user_id";
        	header("location:skill-view.php");
        	$_SESSION["skills"]= "some thing is wrong";
        }
    }
		
?>