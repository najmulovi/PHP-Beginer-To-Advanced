<?php

    //Arithmatic Operator: + - * / %
    //Assignment Operator: += -= *= /= %=

    //declare variable with value
    $number1 = 12;
    $number2 = 2;
    $number3 = 5;

    //Addition between $number1 and $number2
    echo $number1 + $number2;

    //print new line
    echo "\n";

    //Subtraction from $number1 to $number2
    echo $number1 - $number2;

    //print new line
    echo "\n";

    //Divide $number1 by $number2
    echo $number1 / $number2;

    //print new line
    echo "\n";

    //Multiplication between $number1 and $number2
    echo $number1 * $number2;

    //print new line
    echo "\n";

    //Modulus between $number1 and $number3
    echo $number1 % $number3;

    //print new line
    echo "\n";

    //using +=
    echo $number1 += 3; //$number1 = $number1 + 3 = 12 + 3 = 15

    //print new line
    echo "\n";

    //using -=
    echo $number1 -= 3; //$number1 = $number1 - 3 = 15 - 3 = 12

    //print new line
    echo "\n";

    //using *=
    echo $number1 *= 3; //$number1 = $number1 * 3 = 12 * 3 = 36

    //print new line
    echo "\n";

    //using /=
    echo $number1 /= 3; //$number1 = $number1 / 3 = 36 / 3 = 4

    //print new line
    echo "\n";

    //using ++ and --
    $n = 5;
    $n++; // $n = 5; $n = $n + 1 = 5 + 1 = 6
    echo $n; // output : 6

    //print new line
    echo "\n";

    $n1 = 7;
    $m = $n1++; // $m = $n1 = 7; $n1 = $n1 + 1 = 7 + 1 = 8
    echo $m, "\n", $n1; //Output: m=7 , n1=8

    //print new line
    echo "\n";

    $n2 = 9;
    $m1 = ++$n2; // $n2 = $n2 + 1 = 9 + 1 = 10;   $m1 = $n2 = 10;
    echo $m1, "\n", $n2; //output: $m1 = 10, $n2 = 10