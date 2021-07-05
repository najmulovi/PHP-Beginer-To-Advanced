<?php

    /*
        Rules/logic for check leap year
        1. if year divisible by 4
            > Then if year divisible by 100
                >Then if year divisible by 400
                    - return leap year
        2. if year divisible by 4 but (not divisible by 100 and divisible by 400)
            - return leap year
                        
    */

    //Ex. Find Leap Year In Not Standard/Smart way
    $year = 1900;
    if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
        echo "{$year} is a leap year.";
    }else if($year % 4 == 0 && $year % 100 == 0){
        echo "{$year} is not a leap year.";
    }else if($year % 4 == 0){
        echo "{$year} is a leap year.";
    }else{
        echo "{$year} is not a leap year.";
    }

    //print new line
    echo "\n";


    //Ex. Find Leap Year In Standard/Smart Way
    if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){ //For y = 1900, (true && (false || false)) = (true && false) = false
        echo "{$year} is a leap year.";
    }else{
        echo "{$year} is not a leap year.";
    }