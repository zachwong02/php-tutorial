<?php

// Operators


// Arithmetic Operators

$x =10;
$y = 2;

echo $x + $y . '</br>';
echo $x - $y . '</br>';
echo $x * $y . '</br>';
echo $x / $y . '</br>';
echo $x % $y . '</br>';
echo $x ** $y . '</br>';

#infinity and beyond
echo var_dump(fdiv($x,0)) , '</br>';


#modulus with floats 
$x = 10.5;
$y = 2.9;
echo var_dump(fmod($x,$y)) , '</br>';





// Assigment Operator

$x = $y = 10;

echo var_dump($x,$y),'</br>';

$x += 2;
echo var_dump($x),'</br>';





// String Operator
$x = 'Hello';
$x .= 'World';

echo $x,'</br>';





// Comparison Operators

$x = 5;
$y = 3;

echo var_dump($x == $y),'</br>';
echo var_dump($x === $y),'</br>';
echo var_dump($x != $y),'</br>';
echo var_dump($x > $y),'</br>';
echo var_dump($x <=> $y),'</br>';


#String Operator

$x = "Hello World";
$y = strpos($x,'H');


if($y === false){
    echo 'H Not Found';
}else{
    echo "H Found at Index" . $y . '</br>';
}





$result = $y === false ? 'H Not Found' : "H Fosund at Index" . $y . '</br>';

echo $result;


$x =null;
$y = $x ?? 'hello';
echo $y ,'</br>';


// Error Control

$x = @file("foo.txt");





// Incremental/ Decremental Operators

$x = 5;
echo ++$x ,'</br>'; # does the increment and returns the value
echo $x++, '</br>'; # returns the value and does the increment




// Logical Operators

$x = true;
$y = false;

var_dump($x && $y);
var_dump($x || $y);
var_dump($x || !$y);






// Bitwise Operators

