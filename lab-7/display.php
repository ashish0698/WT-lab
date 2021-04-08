<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
// $State = $_POST['state'];
$phone = $_POST['phone'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>The information you have provided are listed below:</h1>
	<table border="6px" width="50%">
		<tr>
			<th>Name : <?=$fname." ". $lname;?></th>
		</tr>
		<tr>
			<?php
			if(isset($_POST['submit']))
			{
				$monthtype = $_POST['months'];
			}
			if(isset($_POST['submit']))
			{
				$daytype = $_POST['day']."st";
			}
			if(isset($_POST['submit']))
			{
				$yeartype = $_POST['year'];
			}

			?>
			<th>DOB : <?=$monthtype." ". $daytype. " ". $yeartype;?></th>

		</tr>
		<tr>
			<?php
			if(isset($_POST['gender']))
			{
				$gendertype = $_POST['gender'];
		    }
		?>
		<th>Gender : <?=$gendertype;?></th>
		</tr>
		<tr>
			<th>Email : <?=$email;?> </th>
		</tr>
		<tr>
			<th>Address : <?=$address;?></th>
		</tr>
		<tr>
			<th>City : <?=$city;?></th>
		</tr>
		<tr>
			<?php
			if(isset($_POST['submit'])){
				$statetype = $_POST['state'];
			}
			?>
			<th>State : <?=$statetype;?></th>
		</tr>
		<tr>
			<th>Phone no : <?=$phone;?></th>
		</tr>
	</table>

</body>
</html>