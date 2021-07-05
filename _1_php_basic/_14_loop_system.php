<?php

// for loop
echo "for loop\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo PHP_EOL; //print new line in php
}

//print new line
echo PHP_EOL;

//print triangle * by using nested for loop
for ($i = 1; $i <= 10; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo PHP_EOL; //print new line in php
}


//print new line
echo PHP_EOL;

// Multiple steping in for loop
for ($i = 10, $j = 1; $i > 0; $i -= 1, $j++) {
    echo $i . ":" . $j;
    echo PHP_EOL;
}


//print new line
echo PHP_EOL;


// Find factorial by using multiple steping for loop
$number = 5;
for ($i = $number, $factorial = 1; $i > 1; $i--) {
    //$factorial = $factorial * $i;
    $factorial *= $i;
}
printf("Factorial of %d is %d \n", $number, $factorial);


//print new line
echo PHP_EOL;

// while loop
echo "while loop\n";
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
    echo PHP_EOL; //print new line in php
}


//new line
echo PHP_EOL;


// do while loop
echo "do while loop\n";
$i = 1;
do {
    echo $i;
    $i++;
    echo PHP_EOL; //print new line in php
} while ($i <= 10);


//new line
echo PHP_EOL;


// goto loop
echo "goto loop\n";
$i = 0;
a: $i++;
echo $i . PHP_EOL;
if ($i < 10) goto a;
