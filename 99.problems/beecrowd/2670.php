<?php
$first = (int)readline();
$second = (int)readline();
$third = (int)readline();

// if machine place in first floor
$best_time = $second + ($third*2);

// if machine place in $second floor
$time = $first + $third;

if($time < $best_time){
    $best_time = $time;
}

// if machine place in third floor
$time = ($first*2) + $second;
if($time < $best_time){
    $best_time = $time;
}

$best_time *= 2;
print("$best_time\n");

/**
Problem : Máquina de Café 
*/

?>