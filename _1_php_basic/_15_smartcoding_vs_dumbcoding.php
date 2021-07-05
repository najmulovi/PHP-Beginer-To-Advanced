<?php

//Ex. Find factorial number for every number from 1 to 10

//Dumb Coding way:
$total_operation = 1;
for ($n = 1; $n <= 10; $n++) {
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
        $total_operation++;
    }
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$total_operation} number of Operations. \n";


//Smart Coding:
$total_operation = 1;
$result = 1;
for ($n = 1; $n <= 10; $n++) {
    $result *= $n;
    $total_operation++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$total_operation} number of Operations. \n";
