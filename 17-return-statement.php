<?php 

function returnFunc(){
    return 5;
}
echo returnFunc();


function onTick(){
    echo 'Tick </br>';
}

register_tick_function('onTick');           # a function is executed when a tick is registered

declare(ticks=5);                           # a tick is registered every 5 code execution 


for ($i=0; $i < 10 ; $i++) { 
    echo $i;
}