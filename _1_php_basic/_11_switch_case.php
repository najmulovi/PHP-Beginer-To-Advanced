<?php

//Ex. Check Color name
$color = 'red';
switch ($color) {
        /*
    case 'red':
        echo "Red is my favourite color. \n";
        break;
    case 'green':
        echo "Green is my favourite color. \n";
        break;
    */
    case 'red':
    case 'green':
        echo ucwords($color) . " is my favourite color. \n";
        break;
    case 'blue':
        echo "Blue is not my favourite color. \n";
        break;
    default:
        echo "This color is ok. \n";
}


//Nested Switch Case
$num = -13;
$rem = $num % 2;

//One way
switch ($rem) {
    case 0:
        switch ($num) {
            case $num > 0:
                echo "{$num} is a positive even number. \n";
                break;
            case $num < 0:
                echo "{$num} is a negative even number. \n";
                break;
        }
        break;
    default:
        switch ($num) {
            case $num > 0:
                echo "{$num} is a positive odd number. \n";
                break;
            case $num < 0:
                echo "{$num} is a negative odd number. \n";
                break;
        }
}

//other way
switch (true) {
    case (0 == $rem && $num > 0):
        echo "{$num} is a positive even number. \n";
        break;
    case (1 == $rem && $num > 0):
        echo "{$num} is a positive odd number. \n";
        break;
    case (0 == $rem && $num < 0):
        echo "{$num} is a negative even number. \n";
        break;
    case (-1 == $rem && $num < 0):
        echo "{$num} is a negative odd number. \n";
        break;
}
