<?php

/**
 * continue keyword skip the loop iteration
 * 
 */

for($i = 0;$i < 10;$i++){
    if($i % 2){ // 0 is falsy value
        continue;
    }

    echo "> odd : $i\n";
}

/**
 * output : 
> odd : 0
> odd : 2
> odd : 4
> odd : 6
> odd : 8
 */

?>