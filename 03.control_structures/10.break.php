<?php

/**
 * break keyword just break the loop
 * or stop the loop
 * 
 */

for($i = 0;$i < 10;$i++){
    echo "> $i\n";

    if($i == 5)
        break;
}

/**
> 0
> 1
> 2
> 3
> 4
> 5 
*/

?>