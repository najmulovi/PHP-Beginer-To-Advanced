<?php

    //declare string variable
    $name = 'Bangladesh';

    //declare integer/number variable
    $age = 18;

    //declare another string variable
    $word = "age";

    //print variable
    echo $name;

    //print new line
    echo "\n";

    //print two variable value combine in one line
    echo "Hello $name";
    //or
    echo "\n";
    echo "Hello {$name}";
    //or
    echo "\n";
    echo 'Hello ' . $name;

    //print new line
    echo "\n";

    //print '18' from variable $age in different way
    echo $$word;

    //print new line
    echo "\n";

    //print two variable value in one line
    echo "Hello {$name}, Your {$word} is 50y.";