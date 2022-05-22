<?php 
/**
 * First enabled the strict for create strict type
 * function here.
 * 
 */
declare(strict_types = 1); // enabled strict first

// declear strict function structure
/**
 * function function_name(argument list with type) : return_type{
 *  // here code
 * }
 * 
 * return type as your whish to add.
 * 
 */

function hello(string $name = "anonymous"):int{
   echo "Hello, $name\n";
   // return "322"; // generate error
   return 322;
}

$number = hello("Alyath");
echo "\$number : $number\n";

// hello(32); // generate error


?>