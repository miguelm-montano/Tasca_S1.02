<?php

//Exercise_1 - Variables
$presentation = "First practice PHP";

$exercise1 = "Exercise 1";
$exercise2 = "Exercise 2";
$exercise3 = "Exercise 3";
$exercise4 = "Exercise 4";
$exercise5 = "Exercise 5";
$exercise6 = "Exercise 6";

$name = "Vicente";
$type = "Dachshund";
$age = 4;
$active = true;
$weight = 7.3;

echo "<h3>" . $exercise1 . "</h3>";
echo $presentation . "<br>";
echo "His name is " . $name . " he is a " . $age . "-year old " . $type . ". He currently weights " . $weight . "kg" . "<br>";

//Constants
define ("NAME_DOG", "Vicente");
const OWNERS_NAME = "Miguel";

//Print as titles
echo "<h1>" . NAME_DOG . "</h1>";
echo "<h1>" . OWNERS_NAME . "</h1>";

//Exercise_2
echo "<h3>" . $exercise2 . "</h3>";

$hello = "Hello, World!";
echo $hello . "<br>";

$mayus = strtoupper($hello); //Switch to uppercase
echo $mayus . "<br>";

echo strlen($hello) . "<br>"; //Count characters
echo strrev($hello) . "<br>"; //Reverse characters

$course = "This is the PHP course.";

echo $hello . " " . $course; //Concatenation

//Exercise_3 - Operators
echo "<h3>" . $exercise3 . "</h3>";

$x = 5;
$y = 10;

$n = 2.2;
$m = 4.2;

echo $x . "<br>";
echo $y . "<br>";

echo $x + $y . "<br>";
echo $y - $x . "<br>";

echo $x / $y . "<br>";
echo $x % $y . "<br>";

echo $n . "<br>";
echo $m . "<br>";

echo $n + $m . "<br>";
echo $m - $n . "<br>";

echo $n / $m . "<br>";
echo $n % $m . "<br>";

//Double of each variable
echo $x *= 2 . "<br>";
echo $y *= 2 . "<br>";

echo $n *= 2 . "<br>";
echo $m *= 2 . "<br>";

//Sum of all variables
echo $x + $y + $n + $m;

//Product of all variables
echo $x * $y * $n * $m;

?>