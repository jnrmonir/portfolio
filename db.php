<?php

	// $db=mysqli_connect("localhost","root"," ","web_dev_2002");

	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','web_dev_2002');
	$db = mysqli_connect(HOST,USER,PASSWORD,DATABASE);

	// if($db){
	// 	echo "Connected";
	// }
	// else{
	// 	echo "Not Connected";
	// }
?>