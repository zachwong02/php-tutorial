<?php

// if / else / elseif / else if

$score = 85;

if($score >= 90){
    echo "A" . '</br>';
}else if($score >= 80){
    echo "B" . '</br>';
}else if($score >= 70){
    echo "C" . '</br>';
}else if($score >= 60){
    echo "D" . '</br>';
}else{
    echo "F" . '</br>';
}



// while / do-while / for / foreach


$i = 0;

while($i <= 10):
    echo $i++;
    echo '</br>';
endwhile;






$a = 0;

do {
    echo $a++ , '</br>';    
} while ($a <= 10);





for ($i=0; $i < 15; $i++) { 
    echo $i;
    echo '</br>';
}




$programmingLanguages = ['PHP','Java','Python'];

foreach ($programmingLanguages as $language => $value):
    echo $language, ' ' ,$value,'</br>';
endforeach;

unset($value);