<?php 

function returnFunc(){
    return 5;
}
echo returnFunc();


function onTick(){
    echo 'Tick </br>';
}

register_tick_function('onTick');

declare(ticks=5);


for ($i=0; $i < 10 ; $i++) { 
    echo $i;
}