<?php
// function to get_numebr : return false if user dose not enter the number
function get_number(){
    $line = readline();

    if($line){
        return (int) $line;
    }

    return false;
}

$current_copies = get_number();

while($current_copies){
    $copies = 1;
    $turn = 0;

    while($copies < $current_copies){
        $copies *= 2;
        $turn++;
    }

    // print turn
    echo "$turn\n";

    // update the current_copies for next iteration
    $current_copies = get_number();
}

/**
Problem : 
Kage Bunshin no Jutsu (or the "Shadow Clone Technique", for English speakers) is a ancient technique 
often used during ninja battles.

When used, the technique creates a copy identical to its user. That way, if a given ninja uses the 
technique, a copy of that ninja comes to existence, so there are two of the same ninja (the original one 
and his copy).

The technique is always executed by all ninjas existing in the moment. That way, if the technique is used 
again, there will be four ninjas in total (the two previous ones and two new copies), and so on.

There are N copies of a given ninja (including the original one). Your task is to determine how many 
imes the technique was used.

Input : 
The input contains several test cases. Each test case contains a line with the number N 
(1 ≤ N ≤ 106). It is guaranteed that N is such that it is possible to get exactly N copies of a 
ninja (including the original one).

The input ends with end-of-file (EOF).

Output:
For each test case, print a line with the number of times the technique was used.

Input Sample : 
1
2
4

Output Sample : 
0
1
2

*/

?>