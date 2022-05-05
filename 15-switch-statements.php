<?php

$paymentStatus = 'rejected';

switch ($paymentStatus) {
    case 'paid':
        echo 'paid';
        break;

    case 'declined':                                        # this allows two cases to have the same results 
    case 'rejected':
        echo 'payment declined';
        break;
    
    default:                                                
        echo 'not paid';
        break;
}


$paymentStatuses = [1,2,3];

foreach ($paymentStatuses as $paymentStatus) { 
    switch ($paymentStatus) {
        case 1:
            echo 'paid';
            break 2; #levels of breaking
    
        case 2:
        case 3:
            echo 'payment declined';
            break;
        
        default:
            echo 'not paid';
            break;
    }
}
