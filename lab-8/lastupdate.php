<?php
include 'database.php';
 $id=$_POST['id'];
 $name=$_POST['name'];
 $contact=$_POST['contact'];

 $sql="UPDATE class SET name='$name', contact='$contact' WHERE id='$id'";
 $result=mysqli_query($conn,$sql);

 if($result){
 	header('location:index.php');
 }

?> 