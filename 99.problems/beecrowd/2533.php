<?php

// function to get number, if not enter the number then return false
function get_number(){
    $line = readline();

    if($line){
        return (int)$line;
    }

    return false;
}

// get_n_c, return [n,c]
function get_n_c(){
    $words = explode(" ",readline());

    return [(int)$words[0],(int)$words[1]];
}

$number = get_number();

while($number){// if user enter the number
    $sum_c = 0;
    $sum_nc = 0;

    for($i = 0;$i < $number;$i++){
        $nc = get_n_c(); // get n and c 

        $sum_c += $nc[1];
        $sum_nc += ($nc[0] * $nc[1]);
    }

    // calculate the result 
    $result = (float)($sum_nc / ($sum_c*100));

    // round the result, precision is 4
    $result = round($result,4);

    // format the result 
    $result = number_format($result,4,'.','');

    echo "$result\n";

    // get another number for next iteration
    $number = get_number();
}

/**
problem : Internship
Googlbook is a famous IT company that opened an office in your town this year! Also, Googlbook has 
just offered interviews to an internship position in the company!

To be interviewed, you need to send some personal information to the company, that will be used to decide 
who will earn the position. You sent all information they need except one: your API (Academic Performance 
Index). To get things worse, Student’s Portal, the system that provide your API, is not working!

Fortunately, you remember all the grades you got in all M subjects you coursed, as well their workloads. 
You also remember how the API is calculated:

sumOf(NixCi) / (sumOf(ci)x100)

input : 
The input contains several test cases. The first line of each test case contains integer 
M (1 ≤ M ≤ 40), the number of subjects you coursed. Each of the next M lines describe a subject. 
Each line contains two integers Ni and Ci (0 ≤ Ni ≤ 100, 30 ≤ Ci ≤ 120), indicating the grade you 
got in that subject and its workload, respectively.

The input ends with end-of-file (EOF).

output : 
For each test case, print a line containing your API. Round and print it with exactly 4 decimal places.

input sample : 
3
70 60
90 60
80 120

output sample : 
0.8000
*/

?>