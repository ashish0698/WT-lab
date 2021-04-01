<?php
$name = array("bmw","toyota");
echo "I like ". $name[0] . " and " . $name[1] ."<br>";

$a = array(2,5,6);

echo array_sum($a). "<br>";

echo array_shift($name)."<br>";

echo count($a) ."<br>";

echo array_reverse($name) ."<br>";

echo array_fill_keys($a, $name);

// There are other more array functions in php
?>