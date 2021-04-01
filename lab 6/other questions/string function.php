<?php
$str = "Hello World";

echo addcslashes($str, 'W') ."<br>";

echo addslashes($str)."<br>";

echo bin2hex($str)."<br>";

echo chop($str,"World")."<br>";

print_r(explode(" ","$str"))."<br>";

echo chunk_split($str,1,".")."<br>";

echo convert_uudecode($str)."<br>";

echo convert_uuencode($str)."<br>";

echo count_chars($str,3);

// There are other more string function in php

?>