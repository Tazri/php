<?php
/**
 * $file = fopen("file_path","mode");
 * 
 * mode : 
 * r - open the file for read only
 * w - open the file for write only
 * a - open the file for write only appending
 * x - create a new file
 * r+ - open a file for read/write
 * w+ - open a file for read/write
 * a+ - open a file for read/write appending
 * x+ - creates a new file for read/write 
 * 
 * fclose($file)
 * close the open file
 * 
 * fgets($file)
 * read single line from file 
 * 
 * fread($file,size_to_read)
 * here we use this code for read the file fread($file,$filesize("file_path"))
 * 
 * feof($file)
 * check the file is end of file reached or not
 * 
 * fgetc($file)
 * read single character from file
 * 
 * 
 */

// open the file
$file_path = "./file/text.txt";
$file = fopen($file_path,"r");

// read the file
$content = fread($file,filesize($file_path));
echo "content : \n$content\n------------------\n";
echo "feof(\$file) : ",feof($file),"\n";
fclose($file);


?>