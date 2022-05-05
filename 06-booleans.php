<?php

$isComplete = (string)true;

#Falsey Values

    // integers     = false
    // float 0.0    = false
    // ''           = false
    // '0'          = false
    // []           = false
    // null         = false



// var_dump($isComplete);
var_dump(is_bool($isComplete));     # is_bool returns whether the argument is a boolean



if ($isComplete) {
    //do something
    echo 'Success' . '</br>';
}else{
    // do something
    echo 'Fail' . '</br>';
}