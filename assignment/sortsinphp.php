<!DOCTYPE html>
<html>
<body>

<?php
$name = array("Ashish", "Suman", "Anmol");
sort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$name = array("Ashish", "Suman", "Anmol");
rsort($name);

$clength = count($name);
for($x = 0; $x < $clength; $x++) {
  echo $name[$x];
  echo "<br>";
}
?>
<?php
$age = array("Ashish"=>"35", "Suman"=>"40", "Anmol"=>"20");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Ashish"=>"35", "Suman"=>"40", "Anmol"=>"20");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Ashish"=>"35", "Suman"=>"40", "Anmol"=>"20");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<?php
$age = array("Ashish"=>"35", "Suman"=>"40", "Anmol"=>"20");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>