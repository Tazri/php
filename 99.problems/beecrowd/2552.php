<?php

// function to make matrix, $rowx$col, all value are 0
function make_matrix($row,$col){
    $matrix = [];

    for($i = 0;$i < $row;$i++){
        // make row
        $one_row = [];
        for($j = 0;$j < $col;$j++){
            $one_row[$j] = 0;
        }

        // insert row in matrix
        $matrix[$i] = $one_row;
    }

    return $matrix;
}

// function to print matrix
function print_matrix($matrix){
    foreach($matrix as $row){
        foreach($row as $char){
            echo $char;
        }
        echo "\n";
    }
}

// get input from user
$input = readline();

while($input){// if user something enter
    $numbers = explode(" ",$input);

    $row_size = (int)$numbers[0];
    $col_size = (int)$numbers[1];

    // make matrix
    $matrix = make_matrix($row_size,$col_size);

    // start to gating input and enter the 9 in matrix if found 1
    for($rowi = 0;$rowi < $row_size;$rowi++){// $rowi mean row index
        $coli = 0; // $coli mean col index

        // get line and traverse the line
        $line = readline();

        for($i = 0;$i < strlen($line);$i++){
            if($line[$i] === "1"){
                $matrix[$rowi][$coli] = 9;
                $coli++;
            }elseif($line[$i] === "0"){// in that case update only coli
                $coli++;
            }
        }
    }

    // logic -> fill up matrix 0 filled
    for($rowi=0;$rowi < $row_size;$rowi++){// $rowi mean row index
        for($coli=0;$coli < $col_size;$coli++){// $coli mean column index
            // get value first
            $value = $matrix[$rowi][$coli];

            if($value){ // something here then continue
                continue;
            }

            $total_nine = 0;

            // checking up
            if($rowi !== 0 and $matrix[$rowi-1][$coli] === 9){
                $total_nine++;
            }

            // cheking down
            if($rowi+1 !== $row_size and $matrix[$rowi+1][$coli] === 9){
                $total_nine++;
            }

            // checking left
            if($coli !== 0 and $matrix[$rowi][$coli-1] === 9){
                $total_nine++;
            }

            // checking right
            if($coli !== ($col_size-1) and $matrix[$rowi][$coli+1] === 9){
                $total_nine++;
            }

            $matrix[$rowi][$coli] = $total_nine; // set the value
        }
    }

    // print the matrix 
    print_matrix($matrix);

    // update the input for next testing
    $input = readline();
}

/**
Problem : CheeseBreadSweeper
The Nlogonian Aquatic Surf Championship, to be hosted in Bonita Horeleninha (BH) city, is about to 
start! The game CheeseBreadSweeper is very popular in this town!

The game board consists on a matrix with N rows and M columns. Each cell contains a Cheese Bread or 
the number of Cheese Breads present in its adjacent cells. A cell is adjacent to another if it is 
immediately on the left, the right, above or bellow the cell. Please notice that, if a cell does 
not contain a Bread Cheese, then it must have a number from 0 to 4, inclusive.

Given the positions of the Cheese Breads, determine the game board!

Input : 
The input contains several test cases. The first line of each test case contains integers 
N and M (1 ≤ N, M ≤ 100). Next N lines contains M integers each, separated by spaces, 
describing the Cheese Breads on the board. The j-th integer in the i-th line is 1 if there 
is a Cheese Bread at row i and column j of the board, or 0 otherwise.

The input ends with end-of-file (EOF).

Output : 
For each test case, print N lines with M integers each, not separated by spaces, describing 
the board’s configuration. If a cell contains a Cheese Bread, print 9 for it; otherwise, 
print the number the cell must contain.

Input Sample : 
4 4
0 0 1 1
0 1 0 1
0 0 1 0
1 1 0 1
1 2
0 1

Output Sample : 
0299
1949
1393
9939
19
*/
?>