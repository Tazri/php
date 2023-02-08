<?php
// get_numbers return the number line if provide the numbers otherwise return false
function get_numbers(){
    $line = readline();

    // it is empty line
    if(!$line){
        return false;
    }

    $numbers = [];
    $numbers_in_string = explode(" ",$line);
    for($i = 0;$i < count($numbers_in_string);$i++){
        array_push($numbers,(int)$numbers_in_string[$i]);
    }

    return $numbers;
}

// get number matrix
function get_matrix($row_size){
    $matrix = [];

    for($i = 0;$i < $row_size;$i++){
        $numbers = get_numbers();
        $matrix[$i] = $numbers;
    }

    return $matrix;
}

// calculate_move : calculate move for position to destination
function calculate_move($point_one,$point_two){
    // calculate row difference
    $row_diff = $point_one[0] - $point_two[0];
    $row_diff = $row_diff < 0 ? $row_diff * -1 : $row_diff;

    // calculate col difference
    $col_diff = $point_one[1] - $point_two[1];
    $col_diff = $col_diff < 0 ? $col_diff * -1 : $col_diff;

    // return total move
    return $row_diff + $col_diff;
}

$numbers = get_numbers();
while($numbers){
    // get row,col and matrix
    $row_size = $numbers[0];
    $col_size = $numbers[1];
    $matrix = get_matrix($row_size);

    // pokemon and ash position
    $pokemon = [];
    $ash = []; // ash is me

    // traverse the array
    for($row = 0; $row < $row_size;$row++){
        for($col = 0;$col < $col_size;$col++){
            $value = $matrix[$row][$col];
    
            if($value == 1){ // set ash position which is me
                $ash[0] = $row;
                $ash[1] = $col;
            }elseif($value == 2){// set pokemon position
                $pokemon[0] = $row;
                $pokemon[1] = $col;
            }
        }
    }

    // calculate move
    $move = calculate_move($pokemon,$ash);
    echo "$move\n";

    // get another numbers
    $numbers = get_numbers();
}

/**
problem : 
Analógimôn Go! is a very popular game. During his quest, the player travels across many cities capturing 
virtual little monsters called analógimôns. You just entered a city that contains the very last analógimôn 
you still don’t have!

The city can be described as a grid with N rows and M columns. You are at a given position in the city, 
while the last analógimôn is at another position in the same city. In one second, you can move (exactly) 
one position to the north, to the south, to the west or to the east. Considering that the analógimôn does 
not move at all, you task is to determine the minimum amount of time you need to reach it.

 2 0 0 0
 |         
 0 0 0 0
 |
 0-0-0 0
     |
 0 0 1 0

The following figure shows the first sample input, and shows a path that can be made in 5 seconds. There 
are other paths that can be used that take the same amount of time, but there is no path that takes less 
time than this one.

input : 
The input contains several test cases. The first line of each test case contains two integers N and M 
(2 ≤ N, M ≤ 100), the number of rows and columns, respectively. Next N lines contains M integers each, 
describing the city. Integer 0 indicates an empty position; integer 1 indicates your position; and 
integer 2 indicates the analógimôn’s position. It is guaranteed that there is exactly one integer 1 
and exactly one integer 2 in the test case, and that all other integers are equal to 0.

The input ends with end-of-file (EOF).

ouptut : 
For each test case, print a line containing the minimum time needed to reach the last analógimôn, 
in seconds.

sample inptut : 
4 4
2 0 0 0
0 0 0 0
0 0 0 0
0 0 1 0

sample output : 
5
*/

?>