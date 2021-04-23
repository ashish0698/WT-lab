<!DOCTYPE html>
<html>
<head>
	<title>First task in php</title>
</head>
<body>
	 <h1>First work</h1>
	 <form action="insert.php" method="post">
	 	<label>Name:<input type="text" name="name" required=""></label><br><br>
	 	<label>Contact:<input type="number" name="contact" required=""></label><br><br>
	 	<input type="submit" name="submit"><br><br>
</form>
<br><br>
<table>
	<tr>
		<td>name</td>
		<td>contact</td>
		<td>to do</td>
	</tr>
	<?php
	include'database.php';
	$sql="SELECT * FROM class";  //class is a table name in database
	$result=mysqli_query($conn,$sql);
	if($result){
		while($row=mysqli_fetch_assoc($result)){  //displaying data of database 
			$id=$row['id'];
			$name=$row['name'];
			$contact=$row['contact'];
			?>
			<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $contact ?></td>
		<td><a href="delete.php?id=<?php echo $id?>">delete</a></td>
		<td><a href="update.php?id=<?php echo $id?>">update</a></td>
	</tr>

			<?php
		}
	}

	?>
	
</table>
</body>
</html>