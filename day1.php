<?php 

echo "HELLO WORLD";
// echo is used to display texts or numbers in php
// ";" terminator: to end a php line 

print "HELLO WORLD PRINT";

echo "<br>";
echo "john "." smith"." handsome";


$firstname = 'kurt john'; //string
$lastname = 'holmes'; //string
$age = 18; // int
$cash = 192.82; //float

echo "<br>";
echo "<br>";
echo "My name is ".$firstname." ".$lastname." And My age is ".$age;
echo "<br>";
var_dump($cash);
echo "<br>";
$birthyear = 1996;
$currentyear = 2021;

// calculation:
$currentAge = $currentyear - $birthyear;

echo $currentAge;
$salary = $cash * 32;

echo "<br>";
echo $salary;

?>
