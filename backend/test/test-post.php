<?php
	require '../../db.php';
	require '../session.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$name=$_POST['name'];
		$description=$_POST['description'];
		
		$upload_file=$_FILES['image'];
		$explode=explode('.' , $upload_file['name']);
		$ext=end($explode);
		$allow_ext = ['jpg','png','jpeg','svg','JPG','JPEG','PNG','gip','GIP'];

		if (in_array($ext, $allow_ext)) {
			if ($upload_file['size']>=1) {
				$insert="INSERT INTO tests (name,description) VALUES ('$name','$description')";
				$query=mysqli_query($db,$insert);

				$last_insert_id=mysqli_insert_id($db);
				$file_name=$last_insert_id.'.'.$ext;
				$new_location='../../uploads/test/'. $file_name;
				move_uploaded_file($upload_file['tmp_name'], $new_location);
				$update="UPDATE tests SET image='$file_name' WHERE id='$last_insert_id'";
				$query2=mysqli_query($db,$update);
				$_SESSION['tests']="uploads Successfully";
				header('location:test-view.php');
			}
			else{
				echo "Image size not allow";
			}
		}
		else{
			echo "File Formate not allow";
		}

	}
?>