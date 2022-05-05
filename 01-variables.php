<?php


$name = "John";


$x =80;
$y =&$x;  # '&' reflect new changes to this variable

$x = 3;
echo $y . '</br>';


echo "Hello World" . '</br>';

echo "{$name} Invoice" . '</br>'; 
echo $name . 'Invoice' . '</br>'; 


?>