<?php
// get_number return number if user enter the number otherwise return false
function get_number(){
    $line = readline();

    if(is_string($line)){
        return (int)$line;
    }

    return false;
}

// get vote, return total votes
function get_votes(){
    $words = explode(" ",readline());
    $votes = 0;

    // traverse the string
    foreach($words as $word){
        if((int)$word === 1){
            $votes++;
        }
    }

    return $votes;
}

$players = get_number();
while($players){
    $votes = get_votes();
    $required = 0.666 * (float) $players;

    if($votes >= $required){
        echo "impeachment\n";
    }else{
        echo "acusacao arquivada\n";
    }

    // update $players
    $players = get_number();
}

/**
problem : Leader's Impeachment
Analógimôn Go! is a very popular game. The players of this game are divided in three teams: 
Team Valor, Team Instinct and Team Mystic, which are led by their leaders, Kandera, Esparky and 
Blanque, respectively. Of course, you belong to one of these teams!

The leader of your team is being accused of cheating by incorrectly managing the candies the 
team receives from the Professor. This fact created a big controversy among the players in the team: 
some players state that the leader really cheated, must suffer an impeachment and must leave his position 
as a leader, while other players state that he did not cheat, that the accusation is false and he must 
keep leading the team.

To solve this situation, a poll will be held with all N players in your team. Each player must vote if 
the impeachment must or must not occur. If the number of votes for the impeachment is greater than or 
equal to 2/3 (two thirds) of the total number of players in the team, the leader will lost his position. 
Otherwise, the accusation will be filed and he will keep leading the team.

Given the votes of all players, determine the result of the poll.

input : 
The input contains several test cases. The first line of each test case contains the integer 
N (1 ≤ N ≤ 105), the number of players in your team. Next line contains N integers v1, ..., vN 
(vi = 0 or 1), indicating the votes of each player. The value 1 indicates a vote for the impeachment, 
while value 0 indicates a vote against it.

The input ends with end-of-file (EOF).

output : 
For each test case, print a single line containing the word impeachment if 
the leader must leave his position, or acusacao arquivada otherwise.

input sample : 
6
1 0 1 1 0 1
5
0 1 1 1 0

output sample : 
impeachment
acusacao arquivada
*/
?>