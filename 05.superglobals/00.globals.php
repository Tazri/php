<?php

$number_one = 23;
$name_of_star = "Alyath";

/**
 * $GLOBALS is php superglobal variable which is used to access gobals variable 
 * from anywhere in php script.
 *
 * $Globals is one kind of php associative array
 * 
 */

 function afdkljaldf(){
    echo "\n>>>Here access global variable by \$GLOBALS<<<\n";
    echo "\$GLOBALS['number_one'] : ",$GLOBALS['number_one'],"\n";
    echo "\$GLOBALS['name_of_star'] : ",$GLOBALS['name_of_star'],"\n";
 }

 $call_me = 'afdkljaldf';

 $call_me();
?>