<?php
$people = 0;
$car = 0;

while(true){
    $words = explode(" ",readline());
 
    if($words[0] === "SALIDA"){
        $car++;
        $people += (int)$words[1];
    }elseif($words[0] === "VUELTA"){
        $car--;
        $people -= (int)$words[1];
    }else{
        break;
    }
}

print("$people\n");
print("$car\n");

?>
