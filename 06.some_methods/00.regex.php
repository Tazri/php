<?php
/**
 * PHP important regex function
 * preg_match() return 1 if the pattern was found in the string otherwise return 0.
 * preg_match_all() return number of times the pattern was found in the string.
 * preg_replace() return string where matched patterns have been replaced with another string.
 * 
 */

 // preg_match();
 $sentence = "Hello, Universe! I am Tazri. Do you know me? Here I come to tell you about myself. I am nothing but a human. Who is totally borken inside and show the outside front of world that everything ok with a smile.";
 $name_regex = "/Tazri/i";

 echo "The Sentence : \n-------------------------", $sentence,"\n-------------------------\n";
 echo "\$name_regex : $name_regex\n";

 echo "preg_match(\$name_regex,\$sentence) : ",preg_match($name_regex,$sentence);
 echo PHP_EOL;

 echo "preg_match_all('/am?/i',\$sentence) : ",preg_match_all('/am?/i',$sentence);
 echo PHP_EOL;

/**
 * preg_replace(
 * $pattern,
 * "replace by",
 * "sentence or word
 * )
 * 
 */
$message = "Hello, World!";
echo "\n\$message : $message";
$replaced_message = preg_replace("/World!/i","Universe!",$message);
echo "\n\$replaced_message : $replaced_message\n";


?>