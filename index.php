<?php
    # CONSTANTS AND VARIABLES
    $test = 'Test'; // variable
    define('CONSTANT_NAME', 'Test'); // constant

    echo $test;
    echo CONSTANT_NAME;



    # STRINGS
    $testStr = 'My name is ';
    $name = 'Ryan';

    // Concat
    echo $testStr.$name.'<br />';
    echo $testStr . $name . '<br />'; // readability
    echo 'My name is ' . $name . '<br />';
    echo "My name is $name" . '<br />'; // double quotes -> 'My name is $name' doesnt work

    // Quotation marks
    echo 'My name is "Ryan"' . '<br />';
    echo "My name is \"Ryan\"" . '<br />'; // backslashes "escape" the characters

    // Indexing
    echo $name[0]; // -> R

    // String Functions
    echo strlen($name) . '<br />'; // -> 4
    echo strtoupper($name) . '<br />'; // -> RYAN 
    echo str_replace('an', ' Guy', $name) . '<br />';



    # NUMBERS
    $testInt = 25;

    // Pre + Post decrementing
    echo $testInt-- . '<br />'; // -> 25
    echo $testInt . '<br />'; // -> 24
    echo ++$testInt . '<br />'; // -> 25

    // Shorthand Operators
    $testInt *= 10;
    echo $testInt . '<br />'; // -> 250 

    // Number Functions
    $testFloat = 3.14;
    echo floor($testFloat) . '<br />'; // -> 3
    echo ceil($testFloat) . '<br />'; // -> 4
    echo pi() . '<br />'; // -> 3.1415...
?>