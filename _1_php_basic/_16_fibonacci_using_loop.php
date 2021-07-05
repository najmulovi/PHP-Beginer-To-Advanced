<?php

//Fibonacci series like: 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610

$veryold_number = 0;
$old_number = 1;
$new_number = 1;

for ($i = 0; $i < 10; $i++) {
    echo $veryold_number . " ";
    $old_number = $new_number;
    $new_number = $old_number + $veryold_number;
    $veryold_number = $old_number;
}

/*
  1st iteration,
    print $veryold_number(0)
    $old_number = 1($new_number)
    $new_number = 1($old_number) + 0($veryold_number) = 1
    $veryold_number = 1($old_number)

  2nd iteration,
    print $veryold_number(1)
    $old_number = 1($new_number)
    $new_number = 1($old_number) + 1($veryold_number) = 2
    $veryold_number = 1($old_number)

  3rd iteration,
    print $veryold_number(1)
    $old_number = 2($new_number)
    $new_number = 2($old_number) + 1($veryold_number) = 3
    $veryold_number = 2($old_number)

  4th iteration
    print $veryold_number(2)
    $old_number = 3($new_number)
    $new_number = 3($old_number) + 2($veryold_number) = 5
    $veryold_number = 3($old_number)

  5th iteration,
    print $veryold_number(3)
    $old_number = 5($new_number)
    $new_number = 5($old_number) + 3($veryold_number) = 8
    $veryold_number = 5($old_number)

  6th iteration,
    print $veryold_number(5)
    $old_number = 8($new_number)
    $new_number = 8($old_number) + 5($veryold_number) = 13
    $veryold_number = 8($old_number)

  7th iteration,
    print $veryold_number(8)
    $old_number = 13($new_number)
    $new_number = 13($old_number) + 8($veryold_number) = 21
    $veryold_number = 13($old_number)

  .................................
  .................................
*/
