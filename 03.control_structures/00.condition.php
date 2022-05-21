<?php

// if else condition
$num = 32;

echo ">>>> If, else if, else <<<\n";
if($num == 0){
    echo "Number is ZERO!!";
    echo PHP_EOL;
}else if($num > 0){
    echo "Number  is Greater than 0!!";
    echo PHP_EOL;
}elseif($num == -3){
    echo "Number is -3";
    echo PHP_EOL;
}else{
    echo "Number is Less then 0!!";
    echo PHP_EOL;
}

?>