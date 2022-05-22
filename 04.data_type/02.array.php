<?php
// basic way to declear array in php
$names = array("Eren Yeager","Armin","Mikasa Akerman","Levi Akerman");

var_dump($names);

// count() return length of array
echo "count(\$names) : ",count($names);
echo PHP_EOL;

// print array by indexed
echo "\n\n>>> Print Value of Array by Index Number <<<\n";
echo "\$names[0] : ",$names[0],"\n";
echo "\$names[1] : ",$names[1],"\n";
echo "\$names[2] : ",$names[2],"\n";
echo "\$names[3] : ",$names[3],"\n";
// echo "\$names[-1] : ",$names[-1],"\n"; // can not work here

// change value by index
$names[0] = "Erwin Smith";
echo "After first value change \$names[0] : ",$names[0],"\n";

// loop through on array
echo "\n>>> Foreach Loop Through On Array <<<\n";
foreach($names as $name){
    echo "Hello, $name!";
    echo PHP_EOL;
}
?>