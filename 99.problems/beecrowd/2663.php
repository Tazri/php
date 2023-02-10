<?php

$total_player = (int) readline();
$capacity = (int)readline();
$scores = [];

// get all players scores
for($i = 0; $i < $total_player;$i++){
    array_push($scores,(int)readline());
}

// sort the scores
sort($scores);
var_dump($scores);

// start to get how many player qualified
$qualified = 0;
$last_score;

while($capacity--){
    $qualified++;
    $last_score = array_pop($scores);
}

$next_score = array_pop($scores);

while(count($scores) && $last_score === $next_score){
    $qualified++;
    $next_score = array_pop($scores);
}

// last next_score
if($next_score === $last_score){
    $qualified++;
}

// print the total qualified
echo "$qualified\n";

/*
Problem : Fase
*/
?>

