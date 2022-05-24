<?php
// file write : 
/**
 * fwrite($file,$text)
 * this function use to write file. Here example : 
 * 
 */

 $file_path = "./file/new_file.txt";
 $file = fopen($file_path,"x+");

 // write the file
 $text = "This is the simple text\nwhich is write in the file.\n...\n..\n.\nEasy.........\n----------------\n";
 fwrite($file,$text);
 fclose($file);

 // open the file for read;
 $file = fopen($file_path,"r");
 echo "Text : \n";
 echo fread($file,filesize($file_path));
 fclose($file);
?>