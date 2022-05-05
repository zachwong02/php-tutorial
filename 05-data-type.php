<?php 

declare(strict_types=1); # function parameters & return value type MUST be followed

// Scalar Types

    #boolean
    $completed = true;

    #int
    $score = 75;

    #float
    $price = 0.99;

    #string
    $greeting = 'Hello There';


    echo $completed . '</br>';              # boolean variables are basically 1's and 0's

    var_dump($completed) . '</br>';         # var_dump() shows the properties of the argument 

    echo gettype($completed) . '</br>';     # gettype() shows the data type of the arguement


    echo $score . '</br>';
    echo $price . '</br>';
    echo $greeting . '</br>';




// Compound Types

    # array

    $companies = [1,2,3,4];
    // echo $companies;                        # arrays cannot be echoed out as they cannot be converted into a string

    echo "<pre>";

    print_r($companies);                       # prints out array structuredly

    echo "</pre>";


    // TO BE CONTINUED{
        #object
        #callable
        #iterable
    // }


// TO BE CONTINUED {

//  Special Types
        #resource
        #null
// }






// Strict Types

function sum(int $x,int $y){
    return $x + $y;
};


$sum = sum(1,"2");
echo $sum;




?> 