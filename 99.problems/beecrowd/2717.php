<?php
$time_left = (int)readline();

$words = explode(" ",readline());
$need_time = (int)$words[0] + (int)$words[1];

if($need_time > $time_left){
    echo "Deixa para amanha!\n";
}else{
    echo "Farei hoje!\n";
}

?>