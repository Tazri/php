<?php
// print 0 to 5 by for loop in php

for($num = 0; $num <= 5; $num++){
    echo "\$num : $num";
    echo PHP_EOL;
}

// using alternative for loop syntax
echo "\n>>>> print 0 to 5 by alternative for loop syntax <<<<\n";
for($num = 0; $num <= 5; $num++):
    echo "\$num : $num";
    echo PHP_EOL;
endfor;

?>