<?php
// extra operator
/**
 * gettype
 * return the data type as string.
 * 
 * execution operator
 * echo
 * echo work like execution operator. But it need shall command.
 * shall command like `command`
 * 
 */

echo ">>>> Extra Operator <<<<\n";
echo "gettype(30)  : ", gettype(30),"\n";
echo "gettype(40.43) : ", gettype(40.43),"\n";
echo "gettype(\"string\") : ", gettype("string"),"\n";

echo `php -v`;

?>