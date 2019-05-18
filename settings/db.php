<?php
$con = mysqli_connect('localhost','root','','dbset');
	
	if($con){
		echo "You are Connected";

	}else {
		die("Connection Failed");
	}

?>