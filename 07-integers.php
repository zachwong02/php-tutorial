<?php

// Integers

    $x = 5;
    
    $x = 0x2A;                 # hexadecimal
    
    $x = PHP_INT_MAX;          # max integer accepted
    
    $x = (int) '123';          # convert string into integer
    
    $x = 2000_000;             # seperate integer values for readability

    var_dump(is_int($x));
    echo $x;