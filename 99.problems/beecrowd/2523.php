<?php

// get input, if nothing to input then it return false
function get_input(){
    $line = readline();

    if($line){
        return $line;
    }

    return false;
}

// generate map from pattern
function generate_map($line){
    $map = [];

    // traverse the line  and create map
    for($i = 0;$i < strlen($line);$i++){
        $char = $line[$i];

        $map[$i+1] = $char;
    }

    return $map;
}

function get_messages(){
    $words = explode(" ",readline());
    $numbers = [];

    foreach($words as $word){
        array_push($numbers,(int)$word);
    }
    return $numbers;
}

// start to solving the problem
$input = get_input();

while($input){// if user input exist
    // create map with user input
    $map = generate_map($input);
    
    // get size of array and numbers messages
    $size = (int)readline();
    $messages = get_messages();

    // decoded_message
    $decoded_message = "";

    // decoding the message
    for($i = 0;$i < $size;$i++){
        $message = $messages[$i];
        $char = $map[$message]; // get the character from map
        $decoded_message .= $char;
    }

    echo "$decoded_message\n";

    // get another input
    $input = get_input();
}

/**
Problem : 
After an intense match of a RPG game at the house of one of his friends, young Will disappeared 
mysteriously! Everyone is desperately looking for him everywhere. Meanwhile, strange things are 
happening at your home. One of these things, however, allows you to communicate with the boy!

There are exactly 26 bulbs attached to the wall of your living room, numbered from 1 to 26 from left 
to right. Also, there is a letter drawn in the wall bellow each bulb. When Will wants to send you a 
message, he will (mysteriously) blink the bulbs corresponding to each letter of his message, one at a 
time. For example, if he wants to send you the message HELP, he will blink, in this order, the bulbs 
above the letters H, E, L and P.

Given the letter associated to each bulb and the order of the bulbs Will blinked, decipher the message 
he sent!

input : 
The input contains several test cases. The first line of each test case contains a string with 
exactly 26 uppercase letters, containing all letters of the English alphabet. The first letter in the 
string is associated to bulb 1; the second letter in the string is associated to bulb 2; and so on. The 
next line contains an integer N (1 ≤ N ≤ 104), the number of bulbs that were blinked. The third line 
contains N integers li (1 ≤ li ≤ 26), indicating the bulbs that were blinked, in that order.

The input ends with end-of-file (EOF).

output : 
For each test case, print a single line containing the message sent by Will.

input sample : 
ABCDEFGHIJKLMNOPQRSTUVWXYZ
4
8 5 12 16
QWERTYUIOPASDFGHJKLZXCVBNM
10
16 3 19 19 9 2 9 4 19 13

output sample : 
HELP
HELLOWORLD

*/
?>