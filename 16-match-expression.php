<?php

$paymentStatus = 0;


$displayStatus = match($paymentStatus){                 # match has better readability than switch-cases however it can only execute one line of code
    1 => 'Paid',
    2 => 'Payment Declined',
    3 => 'Pending Payment',

    default => 'Unknown Payment'
};

echo $displayStatus;