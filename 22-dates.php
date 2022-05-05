<?php

// Dates & Time

date_default_timezone_set('Asia/Kuala_Lumpur');                 # the timezone can also be set

echo  time() . "</br>";                                         # time is displayed in seconds

echo date('d/m/Y g:ia') . '</br>';                              # the date object requires a format of displaying time, the second parameter is optional for a specific time

echo date('d/m/Y g:ia',mktime(0,0,0,4,10,null)) . '</br>';      # mktime() displays the future date & time specified in duration numbers

echo date('d/m/Y g:ia',strtotime('tomorrow')) . '</br>';        # strtotime() displays the future time specified in string