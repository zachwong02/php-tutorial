<?php 

// define()

define('STATUS_PAID','paid');

echo STATUS_PAID;

// Check constant

echo defined('STATUS_VOID');


$name = "RESOLVED";
define('STATUS_' . $name, $name);

echo STATUS_RESOLVED;



// const

const STATUS_DELIVERY = 'delivered';
echo STATUS_DELIVERY;



// magic const 


echo __LINE__;
echo __DIR__;


?>