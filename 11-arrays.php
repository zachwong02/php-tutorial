<?php

$programmingLanguages = ['PHP','Java','Python'];                        # Defining Arrays
$programmingLanguages = array('PHP','Java','Python');

$programmingLanguages[0] = 'C++';

echo $programmingLanguages[0];
echo count($programmingLanguages);





$programmingLanguages[] = 'Javascript';                                 # Pushing elements into an array
array_push($programmingLanguages,'Ruby','Golang');

echo '<pre>';
echo print_r($programmingLanguages);
echo '</pre>';





$programmingLanguages = ['PHP','Java','Python'];                        # What are assosiative arrays

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





$array = ['a','b', 50 =>'c','d', 'foo' => 'e','f'];                     # Array keys are numerical and continues from the key that is numerically defined

echo '<pre>';
echo print_r($array);
echo '</pre>';





echo array_shift($array);                                               # Removing elements from an array

echo array_pop($array);                                                 # "array_shift()" removes the first element | "array_pop()" removes the last element

unset($array[2]);                                                       # unset() sets the element to null

echo '<pre>';
echo print_r($array);
echo '</pre>';






var_dump(isset($programmingLanguages[3]));                              # Checks whether the array's index has a value
var_dump(array_key_exists('a',$array));                                 # Checks whether a key is in an array






$items = ['a' => 1,'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

echo '<pre>';

print_r(array_chunk($items, 2,true));                                   # "array_chunk()" breaks array to smaller arrays   

echo '</pre>';






$array1 = ['a','b','c'];
$array2 = [1,2,3];

echo '<pre>';

print_r(array_combine($array1,$array2));                                # "array_combine() combines 2 arrays to become a new array

echo '</pre>';







// array_filter / array_keys does the opposite

$array = [1,2,3,4,5,6,7,8,9,10];

$even = array_filter($array,fn($number) => $number % 2 === 0);          # "array_filter()" filters an array based on their values | "array_keys()" filters an array based on their keys

$even = array_values($even);                                            # Array keys are numerically in order

echo '<pre>';

print_r($even);

echo '</pre>';







$array = array_map(fn($number) => $number * 3, $array);                 # "array_map()" returns an array after invoking an arrow function to each of the elements
                                                                        # 2 arrays can be passed through the parameter
echo '<pre>';

print_r($array);

echo '</pre>';




$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];

$merged = array_merge($array1,$array2,$array3);                         # it will be ordered except when string keys are defined

echo '<pre>';

print_r($merged);

echo '</pre>';



array_reduce($array,fn($init,$value)=> $value + 1);                     # "array_reduce()" returns one value after invoking an arrow function on the array






$array = ['a','b','c','d','e','f','g','h','i'];
$key = array_search('g',$array);                                        # "array_search()" searches the array and returns the index
echo $key;                                                                              
in_array('a',$array);                                                   # "in_array()" checks whether an element is in the array




$array1 = ['a' => 1,'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = ['f' => 10,'g' => 2, 'h' => 3, 'i' => 43, 'j' => 65];

echo '<pre>';

print_r(array_diff($array1,$array2));                                   # "array_diff()" checks the difference between the first array and the second array

echo '</pre>';



echo '<pre>';

print_r(array_diff_assoc($array1,$array2));                             # "array_diff_assoc()" checks the difference between the first array's keys and the second array's keys

echo '</pre>';





$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

asort($array);                                                          # "asort()" sorts an array's values

echo '<pre>';

print_r($array);

echo '</pre>';



ksort($array);                                                          # "ksort()" sorts an array's keys

echo '<pre>';

print_r($array);

echo '</pre>';



usort($array, fn($a,$b)=> $a <=> $b);                                   # "usort()" sorts an array's values based on the user's defined function

echo '<pre>';

print_r($array);

echo '</pre>';




$array = [1,2,3,4];
[$a,$b,$c,$d] = $array;                                                 

echo $a . $b . $c . $d;