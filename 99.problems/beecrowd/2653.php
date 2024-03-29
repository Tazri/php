<?php
$treasure = [];
$input = readline();

while($input){// if enter something
    if(!array_key_exists($input,$treasure)){
        $treasure[$input] = 1;
    }

    $input = readline();
}

$total_jewels = count($treasure);
echo "$total_jewels\n";

/**
Problem : Dijkstra
In the game The Witcher, Sigismund Dijkstra is the leader of the Redanian Secret Service, 
because of this he is one of the most important people in the world.

In addition Dijkstra has a large treasure, which has several types of jewelry.

Dijkstra is very curious to know how many different types of jewelry his treasure has.

Knowing that you are the best programmer on the continent Dijkstra hired you to check how many 
different types of jewelry he has in his treasure.

Input : 
The entry consists of several lines and each contains a string describing one of Dijkstra's jewels. 
This string is composed only of the characters '(' and ')', the sum of the length of all the string 
does not exceed 106.

Output : 
Print how many different kinds of jewelry Dijkstra has.

Input Sample : 
((
))
((
))
(

Output Sample : 
3

*/

?>