<?php
$available = explode(" ",readline());
$orders = explode(" ",readline());


$left = 0;

for($i = 0;$i < 3;$i++){
    $need = (int)$available[$i] - (int)$orders[$i];
    $need = $need < 0 ? (-1*$need) : 0;

    $left += $need;
}


echo "$left\n";
?>