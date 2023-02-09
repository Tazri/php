<?php

// return : [dates:string,total_votes:int]
function get_vote(){
    $words = explode(" ",readline());
    $vote = [$words[0],0]; // date and votes

    // traverse the whole words
    foreach($words as $word){
        if($word === "1"){
            $vote[1]++;
        }
    }

    return $vote;
}

// function to get votes in array, which return a table like
/*
[
    [date,totalvote],
    [date,totalvote],
    [date,totalvote]
    .....
]
*/
function get_all_date_and_votes($total_date){
    $table = [];

    for($i = 0;$i < $total_date;$i++){
        $table[$i] = get_vote();
    }

    return $table;
}

$input = readline();

while($input){ // if user enter something
    // extract total votes and dates
    $votes_and_dates = explode(" ",$input);
    $total_votes = (int)$votes_and_dates[0];
    $total_dates = (int)$votes_and_dates[1];

    // get tables of all date with votes
    $table = get_all_date_and_votes($total_dates);

    // consider first date is highest voted and not duplicat
    $select_date = $table[0][0];
    $highest_vote = $table[0][1];

    for($i = 1;$i < $total_dates;$i++){
        $vote = $table[$i][1]; // get vote first

        // if it is the highest vote
        if($vote > $highest_vote){
            $highest_vote = $vote; // change the heigest vote
            $select_date = $table[$i][0]; // highested date mustbe selected
        }
    }

    if($highest_vote === $total_votes){ 
        echo "$select_date\n";
    }else{
        echo "Pizza antes de FdI\n";
    }


    // get another input for next iteration
    $input = readline();
}

/**
Problem : Pizza Before BH
The Nlogonian Aquatic Surf Championship, to be hosted in Bonita Horeleninha (BH) city, 
is about to start! Before going to BH, you and your N-1 friends decided to go for a pizza, 
so you can relax and have some fun (and, of course, eat!).

At this moment you are choosing the date for the event. To make sure everyone can enjoy it, 
it was decided that the meeting is to be set in a day so that all the N people can show up at 
the pizzeria on that date.

Given the list of dates considered for the event and the information about which people can show 
up at which dates, determine if the event can happen and, if it can, its date. If more than one 
date is possible, the event must occur as early as possible.

Input : 
The input contains several test cases. The first line of each test case contains 
integers N and D (1 ≤ N, D ≤ 50), the number of people and the number of considered 
dates. People are numbered from 1 to N. Next D lines describe the considered dates. 
Each line begins with a date in the format day∕month∕year. The line is followed by N 
integers p1,p2,...,pN. The integer pi is 1 if the i-th person can show up at the considered 
date, or 0 otherwise. It is guaranteed that dates are always valid, and there aren’t leading 
zeros. Also, all dates are given in order, from the earliest to the latest day.

The input ends with end-of-file (EOF).

Output : 
For each test case, print one line with the date in the format day∕month∕year, exactly as 
it appears in the input. If it is not possible to hold the event, print “Pizza antes de FdI” 
(without quotes).

Input Sample : 
4 4
1/6/2016 0 0 1 0
12/7/2016 1 1 1 0
5/10/2016 1 1 1 1
25/12/2016 0 0 0 0
5 3
20/9/2016 0 1 1 1 1
30/9/2016 1 0 1 1 1
1/10/2016 1 1 0 1 1

Ouptut Sample : 
5/10/2016
Pizza antes de FdI
*/
?>