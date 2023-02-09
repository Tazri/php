<?php

// answare
function answare(){
    echo "I am Toorg!\n";
}

$line = readline();

while($line){// if user enter something
    $testcase = (int)$line;

    for($i = 0;$i < $testcase;$i++){
        readline();
        answare(); // :)
    }

    $line = readline();
}

/**
Problem : I am Toorg!
Toorg is the wisest member of the group of heroes called The Protectors of the Milky Way. 
For any question, it has the ideal answer! Write a program that, given a question, tells Toorg's answer. 

Input : 
The input will have several test cases. For each test case, a N number is displayed, 
which represents the number of test cases. Then there will be N lines, with questions 
asked for Toorg.

Output : 
For each test case, print Toorg's answer.

Input Sample : 
3
Who are you?
How old are you?
What can I do for you?

Output Sample :
I am Toorg!
I am Toorg!
I am Toorg!
*/

?>