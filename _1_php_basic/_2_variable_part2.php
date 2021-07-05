<?php

    //declare a constant
    define('PI', 3.1416);

    //print constan value
    echo "Value of PI = ".PI; 
    echo "\n";
    //or
    echo constant('PI');
    echo "\n";
    //or
    $const = 'constant';
    echo "Value of PI = {$const('PI')}";
