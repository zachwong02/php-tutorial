<?php

// Array




// Defining Array


$programmingLanguages = ['PHP','Java','Python'];
$programmingLanguages = array('PHP','Java','Python');

$programmingLanguages[0] = 'C++';

echo $programmingLanguages[0];
echo count($programmingLanguages);




// Pushing Elements into Array 


$programmingLanguages[] = 'Javascript';
array_push($programmingLanguages,'Ruby','Golang');

echo '<pre>';
echo print_r($programmingLanguages);
echo '</pre>';





$programmingLanguages = ['PHP','Java','Python'];

$programmingLanguages = [
    'php' => [
        'version1' => '7.4',
        'version2' => '8.0'
    ],
    'python' => '3.10'
];


echo '<pre>';
echo print_r($programmingLanguages);
echo '</pre>';




// Numeric Indexes

$array = ['a','b', 50 =>'c','d', 'foo' => 'e','f'];

echo '<pre>';
echo print_r($array);
echo '</pre>';





// Removing Elements from Array
echo array_shift($array);
echo array_pop($array);
unset($array[2]);

echo '<pre>';
echo print_r($array);
echo '</pre>';




// Checking if key exists 


var_dump(isset($programmingLanguages[3]));
var_dump(array_key_exists('a',$array));



// array_chunk breaks array to smaller arrays


$items = ['a' => 1,'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

echo '<pre>';

print_r(array_chunk($items, 2,true));

echo '</pre>';


// array_combine combines 2 arrays to become a new array

$array1 = ['a','b','c'];
$array2 = [1,2,3];

echo '<pre>';

print_r(array_combine($array1,$array2));

echo '</pre>';



// array_filter / array_keys does the opposite

$array = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($array,fn($number) => $number % 2 === 0);

$even = array_values($even); # values are numbered 

echo '<pre>';

print_r($even);

echo '</pre>';