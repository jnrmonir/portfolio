<?php
	require '../../db.php';
	require '../session.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id=$_POST['id'];

		$title=$_POST['title'];
		$description=$_POST['description'];

		$str=str_replace(' ', '-', $title);
		$strlower=strtolower($str);

		if (!empty($_FILES['thumbnail']['name'])) {
		$upload_file=$_FILES['thumbnail'];
		$explode=explode('.' , $upload_file['name']);
		$ext=end($explode);
		$allow_ext = ['jpg','png','jpeg','svg','JPG','JPEG','PNG','gip','GIP'];

		if (in_array($ext, $allow_ext)) {
			if ($upload_file['size']<=10000) {
				$select="SELECT * FROM projects WHERE id=$id";
				$query=mysqli_query($db,$select);
				$assoc=mysqli_fetch_assoc($query);

				$img_path='../../uploads/project/'.$assoc['thumbnail'];

				if (file_exists($img_path)) {
					unlink($img_path);
				}

				$file_name=$strlower.'.'.$ext;
				$new_location='../../uploads/project/'. $file_name;

				move_uploaded_file($upload_file['tmp_name'], $new_location);

				$update="UPDATE projects SET title='$title', description='$description', thumbnail='$file_name' WHERE id='$id'";
				$q=mysqli_query($db, $update);

				$_SESSION['projects']="Project update Successfully";
				header('location:project-view.php');
			}
			else{
				echo "Image size not allow";
			}
		}
		else{
			echo "File Formate not allow";
		}
	}
	else{
		$update="UPDATE projects SET title='$title' ,description='$description' WHERE id='$id'";
		$q=mysqli_query($db,$update);
		$_SESSION['projects']="Project update Successfully";
		header('location:project-view.php');
	}


		


	}
?>