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