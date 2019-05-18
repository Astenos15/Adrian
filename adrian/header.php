<?php
include "db.php";
include "functions.php";

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username === "bugs" && $password === "secret"){
			header('location:read.php');
		} else {
			echo "Wrong username or password";
		}
	}

?>





<!DOCTYPE html>
<html>
<head>
	<title>HEADER</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>

	<div class="container col-lg-6 mx-auto border border-success rounded-lg">
		<h1>Header</h1>
		<div>
			<form method="POST" action="header.php">
				<div class="form-group">
					<label>Username :</label>
					<input type="text" name="username" class="form-control">
				</div>

				<div class="form-group">
					<label>Password :</label>
					<input type="password" name="password" class="form-control">	
				</div>

				<select name="id">
					<?php
						showData();
					?>
				</select>
				<br>

					<input type="submit" name="submit" value="login" class="btn btn-primary">
			</form>

		</div>

	</div>

</body>
</html>