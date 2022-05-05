<?php

// variable functions

function sum( int | float ...$numbers) : int|float{
    return array_sum($numbers);
}

$x = 'sum';

if(is_callable($x)){
    echo $x(1,2,3,4,5);
}else{
    echo 'Not Callable';
}


// anonymous functions

$x = 5;

$sum = function( int | float ...$numbers) use($x) : int|float{ #using globla variables
    echo $x + 20 ;
    return array_sum($numbers);
};

echo $x;

echo $sum(1,2,3,4,5);



// callable functions

$array = [1,2,3,4,5];

$array2 = array_map(function($element){
    return $element * 2;
},$array);

echo "<prev>";

print_r($array);

print_r($array2);


echo "</prev>";



// arrow functions

$array = [1,2,3];
$array2 = array_map(fn($number)=> $number * $number,$array);

print_r($array2);