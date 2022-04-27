<?php
// Strings

$firstName ='Will';
$lastName = "{$firstName} Smith";

echo $lastName . '</br>';
echo $lastName[1];

var_dump($lastName);


// Heredoc Types
$text = <<<TEXT

Line1 ' "
Line2
Line3

TEXT;

echo nl2br($text);


// Nowdoc

$text = <<<'TEXT'

Line1 ' "
Line2
Line3

TEXT;

echo nl2br($text);