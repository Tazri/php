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
function print_something($string=""){
    echo "|";
    space(8);
    echo $string;
    // ramain space
    $remain_space = 29 - strlen($string);
    space($remain_space);
    echo "|\n";
}


// start to draw
print_dash();
print_something("Roberto");
print_something();
print_something("5786");
print_something();
print_something("UNIFEI");
print_dash();

/**
Problem : Output 2

Input : no input

Output : 
---------------------------------------
|        Roberto                      |
|                                     |
|        5786                         |
|                                     |
|        UNIFEI                       |
---------------------------------------
*/
?>