<?php
/**
 * include and require both work as well
 * include can not throw error if file dose not exist
 * but 
 * require throw error if file dose not exist.
 * 
 */
// include "./lib/lib.php";
require "./lib/lib.php";

echo "hello(\"Alyath\") : ". hello("Alyath");
echo "sum(32,33) : ",sum(32,33),"\n";

?>