<!DOCTYPE html>
<html>
<head>
	<title>Form using php</title>
</head>
<body>
	<form action="display.php" method="post">
		<h1>Personal Information</h1>
		First Name:<input type="text" name="fname"><br><br>
		Last Name:<input type="text" name="lname"><br><br>
		Date of Birth:
	    <select name="months">
           <?php
                 foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $monthNumber => $month)
                  {
                     echo "<option value=$month>{$month}</option>";
                  }
            ?>
        </select>
        Day:
        <select name="day">
        	<?php
        	for($i=1;$i<=31;$i++){
        		echo "<option value = $i>" .$i;
        	}
        	?>
        </select>
        Year:
        <select name="year">
        	<?php
        	for($i=2000;$i<=2020;$i++){
        		echo "<option value = $i>" .$i;
        	}

        	?>
        </select><br><br>
        Gender:
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <h1>Account Information</h1>
        Email:<input type="email" name="email"><br><br>
        Confirm Email:<input type="email" name="cemail"><br><br>
        Password:<input type="Password" name="pass"><br><br>
        Confirm Password:<input type="Password" name="cpass"><br><br>
        Security Question:
        <select name="question">
        	<option name=lnumber>What is your lucky number?</option>
        	<option name=pname>What is your pet name?</option>
        </select><br><br>
        Security Answer:
        <input type="text" name="answer">
        <h1>Contact Information</h1>
        Address:<input type="text" name="address"><br><br>
        City:<input type="text" name="city"><br><br>
        State:<select name="state">
        		<?php
        			for($i=1;$i<=7;$i++){
        				echo "<option value = $i>" .$i;
        			}
        		?>
        </select><br><br>
        Phone:<input type="number" name="phone"><br><br>
        <input type="submit" name="submit" value="SUBMIT">

   </form>
</body>
</html>