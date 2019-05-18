<?php
include "database.php";?>

<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>



	<?php
		$query = "SELECT * FROM tbl_prac";
		$result = mysqli_query($con, $query);

		while ($row = mysqli_fetch_assoc($result)){
			$prac_image = $row['prac_image'];
			$prac_title = $row['prac_title'];


?>
		
				<img src="img/<?php echo $prac_image;?>">		
				<title> </title>
			<!-- 	<img src="img/<?php echo $prac_image;?>"> -->	

		



<?php } ?>
	


</body>
</html>