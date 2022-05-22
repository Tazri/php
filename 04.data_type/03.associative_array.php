<?php 
/**
 * Associative array is a array which store values by
 * key value pairs. Here example : 
 * array("key" => "value","key" => "value");
 * 
 */

$person = array(
    "name" => "Alatyh",
    "age" => 33333,
    "type" => "red giants"
);

echo "\$person[\"name\"] : ",$person["name"],"\n";

// foreach loop on associative array
echo "\n\n>>> foreach loop on associative array <<<\n";
foreach($person as $person_topics => $value){
    echo "$person_topics : $value";
    echo PHP_EOL;
} 

?>