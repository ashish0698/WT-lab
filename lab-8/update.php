<!DOCTYPE html>
<html>
<head>
	<title>First task in php</title>
</head>
<body>
	<?php
	include "database.php";
	$id=$_GET['id'];
	$sql="SELECT * FROM class WHERE id=".$id;

	$result=mysqli_query($conn,$sql);
	if($result){
		$row=mysqli_fetch_assoc($result);
		$name=$row['name'];
		$contact=$row['contact'];
	}


	?>
	<form action="lastupdate.php" method="post">
		update name:<input type="text" name="name"> <br><br>
		update contact:<input type="number" name="contact"><br><br>
		<input type="submit" name="update" value="update"><br><br>
	</form>
</body>
</html>