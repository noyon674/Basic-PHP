<?php

////////////// String //////////
$Name = "Noyon Sarker";
echo strlen($Name); //string length
echo "<br>";

echo str_word_count($Name); //number of word in a string
echo "<br>";

echo strrev($Name); //reverse a string
echo "<br>";

echo strpos($Name, 'S'); //find specific value from a string
echo "<br>";

echo str_replace('o', '-', $Name); //replace words or latter from a string
echo "<br>";


////////////// Number /////////////
$a = 20;
$b = 50.75;
//numbers data-type checking
var_dump(is_int($a));
var_dump(is_int($b));
echo "<br>";

var_dump(is_float($a));
var_dump(is_float($b));
echo "<br>";

////////////// Casting ///////////
$casting1 = (int) $b;
echo var_dump($casting1);

echo "<br>";

$casting2 = (double) $a;
echo var_dump($casting2);
?>
