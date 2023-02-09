<?php

// function to get requirement, if user dose not enter requirement then return false
function get_requirement(){
    $line = readline();

    if($line){
        $words = explode(" ",$line);
        $requirement = [];

        for($i = 0;$i < count($words);$i++){
            array_push($requirement,(int)$words[$i]);
        }

        return $requirement;
    }

    return false;
}

//get requirement first
$requirement = get_requirement();

while($requirement){
    $capacity = $requirement[0];
    $minimum_height = $requirement[1];
    $maximum_height = $requirement[2];
    $allows = 0; // total allows

    // enter the people in rolar coster
    for($i=0;$i < $capacity;$i++){
        $height = (int)readline();

        if($minimum_height <= $height && $height <= $maximum_height){
            $allows++;
        }
    }

    echo "$allows\n";


    // update requirement for next turn
    $requirement = get_requirement();
}

/**
Problem : Roller Coaster : 2547
Everyone in Nlogônia is really excited with the opening of Ricardo Barreiro World, the newest 
amusement park in the country. Its roller coaster, the fastest in the continent, is being widely 
advertised on TV and Radio. It’s the attraction everyone, from kids to grandmas, wants to ride.

Unfortunately, some restrictions were imposed by the government during the attraction’s homologation. 
For safety reasons, there is a minimum and a maximum height people must have to ride the roller coaster.

In the inauguration day, every guest filled a register in which they indicated their heights. In order 
to reduce lines and optimize the operation, you were hired to write a program that, given the number of 
guests, the minimum and maximum allowed height, and the height of every guest, determine how many guests 
are allowed to ride the roller coaster. 

Input : 
The input contains several test cases. The first line of each test case contains three integers 
N (1 ≤ N ≤ 100), Amin and Amax (50 ≤ Amin ≤ Amax ≤ 250), the number of guests, the minimum and 
the maximum allowed height, respectively, in centimeters.

Each of the next N lines contains an integer (50 ≤ Ai ≤ 250), the height of the i-th guest, 
in centimeters.

The input ends with end-of-file (EOF).

Output : 
For each test case, print a single line containing the number of guests allowed to ride the 
roller coaster.

Input Sample : 
8 160 182
160
182
183
159
250
170
172
173

Output Sample : 
5
*/

?>