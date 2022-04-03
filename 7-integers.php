<?php

// Integers

$x = 5;
$x = 0x2A;
$x = PHP_INT_MAX;
$x = (int) '123';
$x = 2000_000;

var_dump(is_int($x));
echo $x;