<?php

$file = fopen("text.txt", "w");
$text = "Ashish Paudel";                 // TO WRITE INTO THE FILE
fwrite($file, $text);
fclose($file);
?>

<?php

$file = fopen("text.txt", 'r');
while (!feof($file)) {                    // TO DISPLAY THE FILE CONTENT ON THE BROWSER
	echo fgets($file);
	echo "<br>";
}
echo "File size is ".filesize("text.txt") . " byte <br>";   //TO DISPLAY THE SIZE OF FILE

if(file_exists("text.txt"))
{
	echo "File exist <br>";                 // TO CHECK FILE EXIST OR NOT
}
else
{
	echo "File not found <br>";
}
?>

<?php
$a = file("abc.txt");
$count = $a[0];         
$count++;                                 // TO CHECK VISITORS IN OUR PAGE
$file = fopen("abc.txt", "w");
fputs($file,$count);
fclose($file);
echo $count;

?>