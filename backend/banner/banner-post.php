<?php
	require '../../db.php';
	require '../session.php';

	if ($_SERVER['REQUEST_METHOD']=='POST') {

		$title=$_POST['title'];
		$bio=$_POST['bio'];

		$upload_file=$_FILES['img'];
		$explode=explode('.', $upload_file['name']);
		$ext=end($explode);
		$allow_ext = ['jpg','png','jpeg','svg','JPG','JPEG','PNG','gip','GIP'];

		if (in_array($ext, $allow_ext)){
			if ($upload_file['size']<=10000) {
				$insert="INSERT INTO banners (title,bio) VALUES ('$title','$bio')";
				$query=mysqli_query($db,$insert);

				$last_insert_id=mysqli_insert_id($db);
				$file_name=$last_insert_id.'.'.$ext;
				$new_location='../../uploads/image/'. $file_name;
				move_uploaded_file($upload_file['tmp_name'], $new_location);
				$update="UPDATE banners SET img='$file_name' WHERE id='$last_insert_id'";
				$query2=mysqli_query($db,$update);
				$_SESSION['banners']="banners uploads Successfully";
				header('location:banner.php');
			}
			else{
				echo "Image size not allow";
			}
		}
		else{
			echo "Image Formate not allow";
		}
	}

?>