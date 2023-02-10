<?php
while(true){// if user enter something 
    $input = readline();

    if(!is_string($input)){
        break;
    }

    $degree = (int) $input;

    $degree %= 360;

    if($degree >= 0 && $degree < 90){
        echo "Bom Dia!!\n";
    }elseif($degree >= 90 && $degree < 180){
        echo "Boa Tarde!!\n";
    }elseif($degree >= 180 && $degree < 270){
        echo "Boa Noite!!\n";
    }elseif($degree >= 270 && $degree < 360){
        echo "De Madrugada!!\n";
    }

}

?>