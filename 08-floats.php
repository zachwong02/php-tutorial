<?php

$x = 13_000.5;
echo $x . '</br>';

echo PHP_FLOAT_MAX . '</br>';       # returns the maximum float value accepted

$cal = (0.1 + 0.7) * 10;            # returns the calculation
echo $cal . '</br>';                  

$y = floor($cal);                   # round down the amount
echo $y . '</br>';

$y = ceil($cal);
echo $cal . '</br>';                # round up the amount

var_dump(is_infinite($cal));        # is_infinite() returns whether the value is infinite

$z= 5;
var_dump((float) $z);               # converts integer to a float type
