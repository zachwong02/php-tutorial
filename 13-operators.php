<?php

// Operators


    // Arithmetic Operators
        
        # +     addition
        # -     subtraction
        # *     multiplication
        # /     division
        # %     modulus
        # **    exponentiation
    
    
    
        #infinity and beyond
            $x =10;
            echo var_dump(fdiv($x,0)) , '</br>';    # fdiv() performs floating point division 


        #modulus with floats 
            $x = 10.5;
            $y = 2.9;
            echo var_dump(fmod($x,$y)) , '</br>';   # fmod() performs floating point modulus





    // Assigment Operator

        $x = $y = 10;

        echo var_dump($x,$y),'</br>';               # assign multiple variables 

        $x += 2;
        echo var_dump($x),'</br>';





    // String Operator
        $x = 'Hello';
        $x .= 'World';                              # .= adds additional strings to a variable               

        echo $x,'</br>';





    // Comparison Operators

        $x = 5;
        $y = 3;

        echo var_dump($x == $y),'</br>';            # equals comparision 
        echo var_dump($x === $y),'</br>';           # strict equals comparision
        echo var_dump($x != $y),'</br>';            # not equals
        echo var_dump($x > $y),'</br>';             # more than / less than operators
        echo var_dump($x <=> $y),'</br>';           # space operator ( 0 if equal, 1 if left is more than right, -1 if right is more than left)


    #String Operator

        $x = "Hello World";
        $y = strpos($x,'H');                        # strpos() position of a letter in a string


        if($y === false){
            echo 'H Not Found';
        }else{
            echo "H Found at Index" . $y . '</br>';
        }

        $result = $y === false ? 'H Not Found' : "H Found at Index" . $y . '</br>'; # if else shorthand 

        echo $result;


        $x = 'This is $x';
        $y = $x ?? 'This is $y';                    # $y accepts value of $x if not null else it will be something else                   
        echo $y ,'</br>';


    // Error Control

        @file("foo.txt");                           # '@' gets rid of warnings





    // Incremental/ Decremental Operators

        $x = 5;
        echo ++$x ,'</br>';                         # does the increment and returns the value
        echo $x++, '</br>';                         # returns the value and does the increment




    // Logical Operators

        $x = true;
        $y = false;

        var_dump($x && $y);
        var_dump($x || $y);
        var_dump($x || !$y);

        echo '</br>';






    // Bitwise Operators


        // & | (and or)
        // ^ (xor)
        // ~ (flip binaries)
        // << >> (shift binary)

        $x = 6; //110                                # 110
        $y =3;  //011                                # 011
                                                     # -----
                                                     # 010

    var_dump($x & $y);


    

    // Array Operators

        echo '</br>';
        $x = ['a','b','c'];
        $y = ['d','e','f','g','h'];

        $z = $x + $y;
        print_r($z);

        var_dump($x === $y);



    // Execution Operator (``) #for bash operations


        echo '<pre>';
        echo `ipconfig`;
        echo  '</pre>';