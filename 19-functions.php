<?php

declare (strict_types=1);

function foo(){
    // echo "Hello World";
    return "Hello World";
}
var_dump(foo());




function bar(): string{  #mixed
    return "1";
}


var_dump(bar());




function multiply( int| float $x, int | float $y){  # '|' allows multi data type to be inserted to a parameter or return value
    return $x * $y;
}

echo multiply(3,4);


function sum( int | float ...$numbers){             # '...' allows an amount of parameters to be assigned to an array
    foreach ($numbers as $no) {
        echo $no;
    }
}

sum(1,2,3,4,5,6,7);


echo multiply(x: 5, y: 5);