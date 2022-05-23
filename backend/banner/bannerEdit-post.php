<?php
	require '../../db.php';
	require '../session.php';

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$id=$_POST['id'];

		$title=$_POST['title'];
		$bio=$_POST['bio'];

		$str=str_replace(' ', '-', $title);
		$strlower=strtolower($str);

		if (!empty($_FILES['img']['name'])) {
		$upload_file=$_FILES['img'];
		$explode=explode('.' , $upload_file['name']);
		$ext=end($explode);
		$allow_ext = ['jpg','png','jpeg','svg','JPG','JPEG','PNG','gip','GIP'];

		if (in_array($ext, $allow_ext)) {
			if ($upload_file['size']>00) {
				$select="SELECT * FROM banners WHERE id=$id";
				$query=mysqli_query($db,$select);
				$assoc=mysqli_fetch_assoc($query);

				$img_path='../../uploads/image/'.$assoc['img'];

				if (file_exists($img_path)) {
					unlink($img_path);
				}

				$file_name=$strlower.'.'.$ext;
				$new_location='../../uploads/image/'. $file_name;

				move_uploaded_file($upload_file['tmp_name'], $new_location);

				$update="UPDATE banners SET title='$title', boi='$bio', img='$file_name' WHERE id='$id'";
				$q=mysqli_query($db, $update);

				$_SESSION['banners']="Banner update Successfully";
				header('location:banner-view.php');
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
		$update="UPDATE banners SET title='$title', bio='$bio' WHERE id='$id'";
		$q=mysqli_query($db,$update);
		$_SESSION['projects']="Banner update Successfully";
		header('location:banner-view.php');
	}


		


	}
?>