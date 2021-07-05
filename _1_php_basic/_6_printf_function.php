<?php

    //declare variable with value
    $fname = "Najmul";
    $lname = "Ovi";

    /*
        variable swaping.here we passed first $fname and second passed $lname.
        But we print first $lname and last $fname by using variable swaping (2$ means 2nd value, 1$ means first value).
        Must used ''(first qotation).
    */
    printf('My name is %2$s %1$s',$fname,$lname); 

    //print new line
    echo "\n";
    
    //One similar value use in two or more times by using printf
    printf('The decmal and binary values are %1$d and %1$b',12);

    //print new line
    echo "\n";

    //print 2 digit after decimal point
    printf("The number is %.2f \n",12.236);

    //declare variable with value
    $a = 123; //print like 0123
    $b = 27; //print like 0027
    printf("%04d \n",$a);
    printf("%04d \n",$b);

    //declare variable with value
    $a1 = 123.3253; //print like 0123.33
    $b1 = 27.155; //print like 0027.15
    printf("%07.2f \n",$a1);
    printf("%07.2f \n",$b1);

    /*
        printf() - which print/show value
        sprintf() - which return value
    */
    $output = sprintf("This is %s %s","Najmul","Ovi");
    echo $output;