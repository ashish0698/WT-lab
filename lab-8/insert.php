<?php

$name=$_POST['name'];
$contact=$_POST['contact'];
echo "Name is ".$name."<br>phone is ".$contact;

include 'database.php';

$sql="INSERT INTO class(name,contact)VALUES('$name','$contact')";
$result=mysqli_query($conn,$sql);
if ($result) {
	header('location:index.php');
}

?>