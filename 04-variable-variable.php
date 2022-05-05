<?php 

// Variable variables



$foo = 'bar';
$$foo = 'baz'; # uses value of $foo 'bar' as a variable

echo $foo;
echo $bar;

?>