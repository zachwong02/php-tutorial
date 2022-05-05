<?php 

$x = 1; 

// variable scopes

function foo(){

    // global $x;

    $GLOBALS['x'] = 55;

    $x = 10;

    echo $x;
}

foo();

echo $x;


// static variables

function getValue(){

    static $value = null;

    if ($value === null) {
        $value = longCode();
    }

    return $value;

}

function longCode(){

    sleep(2);
    echo "Processing";
    return 10;
}


echo getValue();
echo getValue();
echo getValue();
