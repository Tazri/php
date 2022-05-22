<?php
/**
 * Here structure of declear function in php
 * function function_name(arguments list with default parameter){
 * 
 * execute some syntax here.
 * 
 * return or not as your whish
 * }
 */

function operation($function, $number_one, $number_two){
    /**
     * Here $function is function name as string.
     * You called this function like this as well.
     */
   return $function($number_one,$number_two);
}

function  function_one($num_one,$num_two){
    return $num_one + $num_two;
}

function function_two($num_one,$num_two){
    return $num_one * $num_two;
}

function hello($name = "Anonymous"){
    echo "Hello, ",$name,"\n";
}

// you can not store the function in variable but you can store function name in variable
$sum = "function_one";
$multiply = "function_two";

echo "operation(\$sum,3,23) : ", operation($sum,3,23),"\n";
echo "operation(\$multiply,3,3) : ", operation($multiply,3,3),"\n";
$what_return_hello = hello("Alayth");
hello();
echo "\$what_return_hello : $what_return_hello\n";

?>