<?php
$con =  mysqli_connect("localhost","root","","pracdb");

	if($con){
		echo "YOu are Connected";
	}else{
		die("Connection Failed");
	}

?>