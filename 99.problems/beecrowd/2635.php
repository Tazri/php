<?php
// check a word start start with substring 
function start_with($string,$sub_string){
    if(strlen($sub_string) > strlen($string)){
        return false;
    }

    for($i = 0;$i < strlen($sub_string);$i++){
        if($string[$i] !== $sub_string[$i]){
            return false;
        }
    }

    return true;
}

// return longest string length from array
function logest_string_length($word_list){
    $longest = $word_list[0];

    foreach($word_list as $word){
        $length = strlen($word);
        if($length > $longest){
            $longest = $length;
        }
    }

    return $longest;
}

// get word list
function get_wordlist($n){
    $word_list = [];

    for($i = 0;$i < $n;$i++){
        array_push($word_list,readline());
    }

    return $word_list;
}

$input = readline();

while($input){// if user enter something
    $total_word = (int)$input;
    $wordlist = get_wordlist($total_word);


    // get query
    $total_query = (int)readline();
    
    for($i = 0;$i < $total_query;$i++){
        $query = readline();

        // check how many word match
        $match_wordlist = [];
        
        foreach($wordlist as $word){
            if(start_with($word,$query)){
                array_push($match_wordlist,$word);
            }
        }

        // if $math_worlist is empty
        $total_match = count($match_wordlist);
        if(!$total_match){
            echo "-1\n";
            continue;
        }

        $logest_word_length = logest_string_length($match_wordlist);
        
        echo "$total_match $logest_word_length\n";
    }

    // update for next input
    $input = readline();
}

/**
Problem : Web Browser
Lucas is a pretty radical guy when it comes to software licenses. Since beginning his undergraduate 
degree in computer engineering, he seeks to develop all the tools he needs. All this started after 
bad experiences using proprietary software. Now he believes that a real programmer must be 
self-sufficient, that is, he must build all the programs he needs, from a simple calculator to
his own operating system.

This semester, Lucas is studying the web systems development course. To continue his philosophy 
of life, using only software he built himself, Lucas is already programming his own web browser. 
Much of the work has been completed, but some functionality still needs to be finished.

Lucas' browser has a search field where the user can enter a keyword, and clicking a confirmation 
button it will redirect to another page with the results of his search. When some string is entered 
in the search field, Lucas wants his program to display, below, some options to auto complete this 
string according to the searches already performed by the user.

For example, if the words "algoritmos" and "algas" have already been searched, when typing the string 
"alg", the program should suggest the words "algorithms" and "algas". Therefore, for each string entered, 
the program should suggest previously searched words prefixed with this string. If any word is equal 
to the typed string, it should also be suggested.

Lucas is concerned about the amount of words his program can suggest, and the maximum size they can 
reach. So he asked you to help him by writing a program where given a few words already searched 
and a series of queries composed of a string, indicate how many words the browser should suggest 
to the user, and the length of the largest of these words.

Input : 
The input is composed of several test cases. The first line of a test case has an integer 
N (1 ≤ N ≤ 10^4) indicating the number of words that have already been searched by the Lucas’ 
program. Each of the next N lines contains a nonempty string of a maximum of 100 lowercase 
letters [a - z]. For each test case, N words are different. Then there will be an integer 
Q (1 ≤ Q ≤ 100) indicating the number of queries. Each of the next Q lines describes a 
query with a non-empty string of a maximum of 100 lowercase letters [a - z], representing a 
string entered in the search field.

Output : 
For each test case print Q lines, where the i-th row is the answer to the i-th query. 
The response of each query should be composed of two integers separated by space, representing, 
respectively, the number of words suggested by the program when entering the string indicated by 
the ith query, and the length of the largest word contained in that subset. If no words are 
suggested, print -1.

Input Sample : 
5
maratonaicpc
maraton
programacao
progress
inputs
3
marat
programacao
outputs

Ouptut : 
2 12
1 11
-1

*/
?>