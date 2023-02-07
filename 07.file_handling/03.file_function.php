<?php

/**
 * function
 * file($string_file_path)
 * return the file text line by line in string array. Like below : 
 * 
 * ['string','string']
 * 
 */

$file_path = "./file/text.txt";

$file_content = file($file_path);

echo ">>> printing file lines : \n";
for($i = 0; $i < count($file_content);$i++){
    echo "Line $i : $file_content[$i]\n";
}

/**
 * ouptut :  
>>> printing file lines : 
Line 0 : Here,

Line 1 : it is a text

Line 2 : nothing else

Line 3 : hello.........................!

*/

?>