<?php

$x = 13_000.5;


var_dump($x);
echo $x;
echo PHP_FLOAT_MAX;

$y = ((0.1 + 0.7) * 10);
$y = floor((0.1 + 0.7) * 10);
$y = ceil((0.1 + 0.7) * 10);

echo " </br> {$y}";
var_dump(is_infinite($y));

$z= 5;
var_dump((float) $z);
echo " </br> {$z}";