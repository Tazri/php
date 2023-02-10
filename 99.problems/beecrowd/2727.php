<?php

function print_letter(){
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $code = readline();
    $dot = 0;
    $space = 0;

    for($i = 0;$i <strlen($code);$i++){
        if($code[$i] === "."){
            $dot++;
        }elseif($code[$i] === " "){
            $space++;
        }
    }
    
    $behind = $space*3;
    $group_index = (int) ($dot/($space+1));
    $index = $behind + $group_index;

    $letter = $letters[$index-1];
    echo "$letter\n";
}

$input = readline();


while($input){// if user enter something
    $n = (int)$input;

    for($i = 0;$i < $n;$i++){
        print_letter();
    }

    $input = readline();
}

/**
 * 
chr space  group  dot 
abc   0     1     1-3    
def   1     2     2-6
ghi   2     3     3-9
jkl   3     4     4-12
mno   4     5     5-15
pqr   5     6     6-18
stu   6     7     7-21
vwx   7     8     8-24
yz    8     9     9-27

behind = space * 3
group_index = dot / (space + 1)

character index = behind + group_index;

*/

?>