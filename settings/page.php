        <?php
include 'db.php';?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Page</title>
</head>
<body>



	
                   
               
<table class="table table-border">

		<?php
				if ($con->connect_error) {
				    die("Connection failed: " . $con->connect_error);
				} 

				if (isset($_POST["delete_id"])) {
					$deleteSql = "DELETE FROM tbl_setting where id = {$_POST["delete_id"]}";
					$con->query($deleteSql);
				}

				if (isset($_POST["update"])){
					$id = $_POST['id'];
					$comment = $_POST['comment'];

					$query = "UPDATE tbl_setting SET id = '$id', comment = '$comment' WHERE id = {$id}";
					$result = mysqli_query($con,$query);

						if(!$result){
 						die("Query Failed" .mysqli_error());
				}



				$sql = "SELECT id,comment FROM tbl_setting";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
		       
						        $id = $row['id'];
						        $comment = $row['comment']; 
						        echo "<tr>";
						        echo "<td>".$id."</td><td>".$comment."</td><td>"."

						        <input type=\"submit\" name=\"update\" value=\"Update\"/>

						        <form method = \"POST\">

						        		<input type = \"hidden\" name = \"delete_id\" value = \"{$row['id']}\"/><br>

						        		<input type=\"submit\" value=\"Delete\" >
						        	</form>
						        	"."</td>
						        	";

						        echo "</tr>";						  
						     
					        			
						   		 }
						}	else {	   	

				    echo "0 results";
				}


				$con->close();		
			?> 
 </table>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!-- echo "
<tr></tr>
<td>{$id}</td>
<td>{$row['come']}</td>	
" ; -->