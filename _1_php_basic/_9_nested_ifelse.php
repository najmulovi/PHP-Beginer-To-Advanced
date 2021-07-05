<?php

$condition1 = true;
$condition2 = false;
$condition3 = true;

//Ex. Nested If Else
if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Hello";
        } else {
            echo "no 1";
        }
    } else {
        echo "no 2";
    }
} else {
    echo "no 3";
}

//print new line
echo "\n";

//Ex. Nested If Else (Standard/Smart Way)
if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
} elseif ($condition1 && $condition2) {
    echo "no 1";
} elseif ($condition1) {
    echo "no 2";
} else {
    echo "no 3";
}