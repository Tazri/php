<?php

// function for get two number
function get_number(){
    $line = readline();
    
    if($line){
        $words = explode(" ",$line);

        return [(int)$words[0],(int)$words[1]];
    }

    return false;
}

// function for generate map
function generate_map($string_one,$string_two,$size){
    $map = array();

    // first generating for string_one
    for($i = 0;$i < $size;$i++){
        // string one
        $map[$string_one[$i]] = $string_two[$i];
        $map[strtolower($string_one[$i])] = strtolower($string_two[$i]);

        $map[$string_two[$i]] = $string_one[$i];
        $map[strtolower($string_two[$i])] = strtolower($string_one[$i]);
    }

    return $map;
}

// deciphered
function deciphered($map,$line){
    $deciphered_line = "";

    for($i = 0;$i < strlen($line);$i++){
        $char = $line[$i];

        // checking is character in $map
        if(array_key_exists($char,$map)){
            $deciphered_line .= $map[$char];
        }else{
            $deciphered_line .= $char;
        }
    }

    return $deciphered_line;
}

// start to solving problem
$numbers = get_number(); // get input

while($numbers){
    $word_size = $numbers[0]; // word size
    $total_line = $numbers[1]; // total sentence

    // get two line
    $line_one = readline();
    $line_two = readline();
    
    // generate the map
    $map = generate_map($line_one,$line_two,$word_size);

    // start to deciphered
    for($i = 0;$i < $total_line;$i++){
        $line = readline();
        $deciphered_line = deciphered($map,$line);
        echo "$deciphered_line\n";
    }
    echo "\n";

    // get input again
    $numbers = get_number();
}

/**
Problem : 
The oldest known cipher is the Cipher of Caesar. Caesar wrote his letters by exchanging each 
letter for the next in the alphabet, to avoid that, when the letter was intercepted, enemy could 
read it. Over time, encryption has acquired better quality, but encryption based on substitution is 
still an interesting child's play, for example:

ZENIT
POLAR

In this child's play, when writing a letter, the letter Z is replaced by the letter P and vice versa, 
as well as: E by O and so on. The phrase coded as follows: "Osro roxre osri caftide" can be deciphered as:
"Este texto esta cifrado". As the game got serious, you were prompted for a program that decrypts 
encrypted messages from a supplied key. 
  
Input : 
The input contains several test cases. Each test case begins with a line indicating two integers C and N,
 0 < C < 21 and 0 < N < 100. C is the size of the cipher. On the next two lines is the C-sized cipher 
 indicating which characters from the first line will be replaced by characters from the second line, 
 a character appears only once, on the first or second line.

The cipher can contain letters from 'A' to 'Z', numbers from '0' to '9' plus white space and some 
punctuation symbols: '.' ',' ';' ':' '(' ')' '!' and '?'. In the next N lines are sentences and sentences 
encrypted by the cipher provided, which you must decipher. Each line contains a minimum of 1 and a maximum
of 1000 characters. Any printable ASCII (non-extended) characters are allowed, in this case no accented 
characters are present, not even 'ç'.

output : 
For each input test case your program must generate for each sentence line at the input a sentence line 
with the deciphered output, respecting the capitalization of the letter (capital letters are deciphered as
case-sensitive when it is possible to apply, If it is not possible then it will be deciphered as lowercase
letters). After each test case, a blank line should be printed, including after the last one.

Sample input : 
5 3
ZENIT
POLAR
Osro roxre osri caftide
Osri o umi roclaci do ctazregtifai zet subsraruacie
Zedo sot ficanmolro quobtide i zitrat do umi bei imesrti do roxre
3 2
UMA
123
C3d3 12 por si
123 3 123

Sample output : 
Este texto esta cifrado
Esta e uma tecnica de criptografia por substituicao
Pode ser facilmente quebrado a partir de uma boa amostra de texto

Cada um por si
uma a uma

*/

?>