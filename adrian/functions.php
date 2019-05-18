<?php

include 'db.php';

function showData(){
	global $connection;
	$query = "SELECT * FROM user";
	$result = mysqli_query($connection,$query);

	if(!$result){
		die("FAILED!!" .mysqli_error());
	}

function deleteTable(){
	global $connection;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];
}

function redirect($site){
	header('location:read.php');
}






	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$username = $row['username'];
		echo "<option value='{$id}'>{$id} - $username</option>";
	}
}

?>