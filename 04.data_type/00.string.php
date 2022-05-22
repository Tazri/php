<?php
$message = "Hello, World!";

echo "Message is : $message\n";

// apply string method on message 
// strlen return the string length
echo "strlen(\$message) : ", strlen($message),"\n";

// str_word_count return how many word contain this string
echo "str_word_count(\$message) : ",str_word_count($message),"\n";

// strrev reverse the string
echo "strrev(\$message) : ",strrev($message),"\n";

// strpos() search position of word in string
echo "strpos(\$message,\"World!\") : ", strpos($message,"World!"),"\n";

// str_replace()
/**
 * str_replace(word,replace_by,string);
 * 
 */
echo "str_replace(\"World!\",\"Universe!\",\$message) : ", str_replace("World!","Universe!",$message),"\n";


echo "At last Message is : $message\n";
?>