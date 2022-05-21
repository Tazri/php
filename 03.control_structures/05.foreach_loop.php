<?php

// foreach loop runing on just a array. Here example : 
$names = [
    "Alyath",
    "Eren Yeager",
    "Armin",
    "Levi Akerman",
    "L Lawliet"
];

// foreach loop example 
foreach($names as $name){
    echo "Hello, $name";
    echo PHP_EOL;
}

// foreach loop on associative array
echo "\n\n>>> foreach loop on associative array <<<\n";
$person = [
    "name" => "Eren Yeager",
    "age" => 23,
    "titan_power" => "Attack Titan"
];

foreach ($person as $key => $value){
    echo "$key : $value";
    echo PHP_EOL;
}

?>
