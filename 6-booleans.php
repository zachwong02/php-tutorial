<?php

$isComplete = (string)true;

// integers     = false
// float 0.0    = false
// ''           = false
// '0'          = false
// []           = false
// null         = false

// var_dump($isComplete);
var_dump(is_bool($isComplete));

if ($isComplete) {
    //do something
    echo 'Success';
}else{
    // do something
    echo 'Fail';
}