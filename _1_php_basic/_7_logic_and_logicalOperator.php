<?php

    //logical operators
    /*
        == (equal to)
        != (not equal to)
        >  (greater than)
        <  (smaller than)
        >= (greater than or equal)
        <= (smaller than or equal)
        && (AND operator)
        || (OR operator)

    */
    //Ex. Check even or odd number
    $n = 15;
    if($n % 2 == 0){
        echo "$n is an even number. \n";
    }else{
        echo "$n is an odd number. \n";
    }
    

    //Ex. Check teeneger person which age between 13 to 19 years
    $age = 14;
    if($age >= 13 && $age <= 19){
        echo "This person is a teeneger. \n";
    }else{
        echo "This person is not a teeneger. \n";
    }



