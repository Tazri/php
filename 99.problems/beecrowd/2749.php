<?php

// function to print dash
function print_dash(){
    for($i = 0;$i < 39;$i++){
        echo "-";
    }

    echo "\n";
}

// print line and space
function print_line(){
    echo "|";
    for($i = 0;$i < 37;$i++){
        echo " ";
    }
    echo "|\n";
}

// print space
function space($n){
    for($i =0;$i <$n;$i++){
        echo " ";
    }
}

// function to print space
function print_something($start=37,$string=""){
    echo "|";

    space($start);
    echo $string;
    
    $remain_space = 37 - strlen($string) - $start;
    space($remain_space); 
    echo "|\n";
}


// start to draw
print_dash();
print_something(0,"x = 35",31);
print_something();
print_something(16,"x = 35");
print_something();
print_something(31,"x = 35");
print_dash();


/**
Problem : Output 2

Input : no input

Output : 
---------------------------------------
|x = 35                               |
|                                     |
|                x = 35               |
|                                     |
|                               x = 35|
---------------------------------------
*/
?>