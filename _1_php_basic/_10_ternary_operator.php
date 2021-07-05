<?php
$number = 13;

//Use ternary operator instead of if else condition
$result = (13 == $number) ? "Yes" : "No";
echo $result;

//print new line
echo "\n";

//Check Even Odd by using ternary operator
$result_check = ($number % 2 == 0) ? "Even Number" : "Odd Number";
echo $result_check;

//print new line
echo "\n";

//Nested Ternary Operator using for find grade
$mark = 67;
$grade = (80 <= $mark) ? "A+" : ((70 <= $mark && 80 > $mark) ? "A" : ((60 <= $mark && 70 > $mark) ? "B" : ((50 <= $mark && 60 > $mark) ? "C" : "F")));
echo "Your grade is {$grade}";
