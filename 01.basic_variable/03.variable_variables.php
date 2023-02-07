<?php
/**
 * syntax to using string variable value to access another variable
 * 
 * $$variable_name;
 * 
 * Here first $ symbol to access the variable_name.
 * next $ symbol use string as a variable name to access another variable
 */

$live = "earth";
$earth = "asia";
$asia = "bangladesh";
$bangladesh = "comilla";

echo '$live :', $live ,"\n";
echo '$$live :', $$live ,"\n";
echo '$$$live : ', $$$live ,"\n";
echo '$$$$live : ', $$$$live, "\n";

// below line throw error because there ane no vairable named comilla
// echo '$$$$$live : ', $$$$$live, "\n";

/**
output :  
$live :earth
$$live :asia
$$$live : bangladesh
$$$$live : comilla
*/
?>