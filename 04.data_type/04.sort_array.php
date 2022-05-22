<?php
// another way declare array
$numbers = [32,2,4,5];
$names = ["Erwin Smith","Xenon","Armin"];
$person = [
    "names" => "Eren Yeager",
    "titan power" => "attack Titan",
    "Nationality" => "Eldians"
];

// function to print array
function print_array($array){
    echo "[ ";
    foreach($array as $value){
        echo "$value, ";
    }
    echo "]";
}

// print both array
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";

// sort() sort arrays in accending order
sort($numbers);
sort($names);
echo "\n >>> After Apply Sort Method on Both Array <<<\n";
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";

// rsort() // sort array in deccending order
rsort($numbers);
rsort($names);
echo "\n >>> After Apply Sort Method on Both Array <<<\n";
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";


// asort(); sort associative array in accending order, according to the value
asort($person);
echo "\n>>> After Apply asort on person<<<\n";
var_dump($person);

/**
 * more method
 * ksrot() sort associative array in accending order, according to the key
 * arsort() sort associative array in deccending order, according to the value
 * krsort() sort associative array in deccending order, according to the key
 * 
 */
?>