<?php
//Ex. Find grade by using both ifelse (regular form) and ifelse (alternative syntax)
$mark = 57;

//First, using if else regular/normal form
if ($mark >= 80) {
    echo "Your grade is A+";
    echo PHP_EOL; //print new line in php
} elseif ($mark >= 70 && $mark < 80) {
    echo "Your grade is A";
    echo PHP_EOL; //print new line in php
} elseif ($mark >= 60 && $mark < 70) {
    echo "Your grade is B";
    echo PHP_EOL; //print new line in php
} elseif ($mark >= 50 && $mark < 60) {
    echo "Your grade is C";
    echo PHP_EOL; //print new line in php
} else {
    echo "Your grade is F";
    echo PHP_EOL; //print new line in php
}

//Second, same problem solved by using ifelse alternative syntax
if ($mark >= 80) :
    echo "Your grade is A+";
    echo PHP_EOL; //print new line in php
elseif ($mark >= 70 && $mark < 80) :
    echo "Your grade is A";
    echo PHP_EOL; //print new line in php
elseif ($mark >= 60 && $mark < 70) :
    echo "Your grade is B";
    echo PHP_EOL; //print new line in php
elseif ($mark >= 50 && $mark < 60) :
    echo "Your grade is C";
    echo PHP_EOL; //print new line in php
else :
    echo "Your grade is F";
    echo PHP_EOL; //print new line in php
endif;

//Same problem solved by using switch case alternative syntax
switch ($mark):
    case ($mark >= 80):
        echo "Your grade is A+";
        echo PHP_EOL; //print new line in php 
        break;
    case ($mark >= 70 && $mark < 80):
        echo "Your grade is A";
        echo PHP_EOL; //print new line in php 
        break;
    case ($mark >= 60 && $mark < 70):
        echo "Your grade is B";
        echo PHP_EOL; //print new line in php
        break;
    case ($mark >= 50 && $mark < 60):
        echo "Your grade is C";
        echo PHP_EOL; //print new line in php 
        break;
    default:
        echo "Your grade is F";
        echo PHP_EOL; //print new line in php
endswitch;
