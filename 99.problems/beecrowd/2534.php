<?php
// get_line, if user dose not enter anything then it return false
function get_line(){
    $line = readline();

    if($line){
        return $line;
    }

    return false;
}

// get_total_grades_ranks : return [total_grades,total_ranks]
function get_total_grades_ranks($line){
    $words = explode(" ",$line);

    return [(int)$words[0],(int)$words[1]];
}

// get_numberlist : function return the number list
function get_numberlist($n){
    $numberlist = [];

    for($i = 0;$i < $n;$i++){
        $numberlist[$i] = (int)readline();
    }

    return $numberlist;
}


$input = get_line();

while($input){// user enter the input something
    // get how many grades and ranks
    $numbers = get_total_grades_ranks($input);
    $total_grades = $numbers[0];
    $total_ranks = $numbers[1];

    // get grades and ranks
    $grades = get_numberlist($total_grades);
    $ranks = get_numberlist($total_ranks);

    // sort the grades, descending sort
    rsort($grades);

    // printing the grades
    foreach($ranks as $rank){
        $grade = $grades[$rank-1];

        echo "$grade\n";
    }

    // get another input
    $input = get_line();
}

/**
problem : General Exam
The national math exam is done every leap year in Nlogonia. Every citizen is evaluated, so it is 
possible to study the development of logic and math in the country along the years.

After their exams are graded, the citizens are sorted according to their grades (the higher the 
grade, the better the citizen). They get discounts in their taxes according to their positions in 
this rank.

The Statistic Central Office (SCO) is in charge of processing the grades obtained in the exam. 
This year, however, Vasya, one of the people in charge, is at the hospital, and so you were hired to 
finish his job.

Write a program that, given the number of citizens and their grades, answers queries informing the 
grade of the citizen that is ranked at a given position.

input : 
The input contains several test cases. The first line of each test case contains two 
integers N (1 ≤ N ≤ 100) and Q (1 ≤ Q ≤ 100), the number of citizens and the number of queries.

Each of the next N lines contains the grade ni obtained by the i-th citizen (0 ≤ ni ≤ 30000).

Each of the next Q lines contains a position pi.

The input ends with end-of-file (EOF).

output : 
For each test case, print, for each query, a line containing the grade of the citizen 
that is ranked at position pi.

input sample : 
6 5
30
30
40
250
100
15
1
5
3
2
4

output sample : 
250
30
40
100
30
*/

?>