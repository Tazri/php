<?php
// here basic while loop in php
$num = 0;
while($num <= 5){
    echo "\$num : $num";
    echo PHP_EOL;
    $num++;
}

// alternative while loop
echo "\n>>> Print 5 to 1 by Alternative while loop syntax <<<\n";
while(--$num):
    echo "\$num : $num";
    echo PHP_EOL;
endwhile;

?>