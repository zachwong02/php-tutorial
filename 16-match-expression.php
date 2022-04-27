<?php

$paymentStatus = 0;


$displayStatus = match($paymentStatus){
    1 => 'Paid',
    2 => 'Payment Declined',
    3 => 'Pending Payment',

    default => 'Unknown Payment'
};

echo $displayStatus;