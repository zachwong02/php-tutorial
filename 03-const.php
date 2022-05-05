<?php 

// define() (runs at run time)

define('STATUS_PAID','paid');
echo STATUS_PAID . '</br>';


echo defined('STATUS_VOID') . '</br>'; # check whether constant is defined


$name = "RESOLVED";
define('STATUS_' . $name, $name); # variable constant
echo STATUS_RESOLVED . '</br>';






// const (runs at compile time)

const STATUS_DELIVERY = 'delivered';
echo STATUS_DELIVERY . '</br>';



// magic const 

echo __LINE__ . '</br>';
echo __DIR__ . '</br>';

?>