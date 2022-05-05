<?php

// Strings

    $firstName ='Will';
    $lastName = "{$firstName} Smith";       # string concatenation

    echo $lastName . '</br>';
    echo $lastName[1] . '</br>';            # returns the first index of a string

    var_dump($lastName);




    
// Heredoc Types                            # able to write multiple strings on different lines for better readability
    $text = <<<TEXT

    Line1 ' "
    Line2
    Line3

    TEXT;

    echo nl2br($text);                      # adds breaklines 




    
// Nowdoc                                   # able to write multiple strings on different lines for better readability

    $text = <<<'TEXT'

    Line1 ' "
    Line2
    Line3

    TEXT;

    echo nl2br($text);                      # adds breaklines 