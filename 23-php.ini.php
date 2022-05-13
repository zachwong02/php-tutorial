<?php

function handler(int $type, string $msg, ?string $file =null, ?int $line = null){
    echo $type . ': ' . $msg;
    return;
    // exit;
}


# error_reporting, error_log, display_errors

var_dump(ini_get('error_reporting'));                           
var_dump(ini_get('memory_limit'));                              # "memory_limit" is the maximum amount of RAM allocated
var_dump(E_ALL);

ini_set('error_reporting', E_ALL & ~E_WARNING);                 # "E_ALL" are all errors, warnings & notices

ini_set('display_error', 0);                                    # determines whether errors are displayed 

set_error_handler('handler', E_ALL);                            # "set_error_handler" allows custom functions when there is an error

// error_log();                                                 # "error_log()" allows users to define where to send the error


$array = [1];
echo $array[3];

trigger_error('Example error', E_USER_WARNING);                 # "trigger_error()" triggers an error | "E_USER_WARNING" are user-defined warnings

trigger_error('Example error', E_USER_ERROR);                   # "E_USER_WARNING" are user-defined errors

echo 1;



#ini_set('max_execution_time',3);                               # "max_execution_time" sets the maxiumum duration of a command

#sleep(5);

#echo "Hello World";