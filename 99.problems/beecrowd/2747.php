<?php
// function to print dash
function print_dash(){
    for($i = 0;$i < 39;$i++){
        echo "-";
    }

    echo "\n";
}

// print line
function print_line(){
    echo "|";
    for($i = 0;$i < 37;$i++){
        echo " ";
    }
    echo "|\n";
}

// start to draw
print_dash();

// print line
for($i = 0;$i < 5;$i++){
    print_line();
}

print_dash();


/**
Probem : Ouptut 1

Input : no input

Output : 
---------------------------------------
|                                     |
|                                     |
|                                     |
|                                     |
|                                     |
---------------------------------------

*/

?>