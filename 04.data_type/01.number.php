<?php

/**
 * Here some method for number
 * is_int() -- check is int or not 
 * is_float() -- check is float or not
 * is_nan() -- check is nan or not
 * is_infinit() -- check is infinit or not
 * 
 */

echo "PHP_INT_MAX : ",PHP_INT_MAX,"\n";
echo "PHP_INT_MIN : ",PHP_INT_MIN,"\n";
echo "PHP_INT_SIZE : ",PHP_INT_SIZE,"\n";

// convertion
echo "(int) 3.46 : ", (int)3.46, "\n";
echo "(float) 3 : ",(float)3,"\n";
echo "(int) \"3\" : ",(int)"3","\n";

// pi() return the value of pi
echo "pi()  : ", pi(),"\n";

// min() return the minimum value in list of arguments
echo "min(3,23,23,34,345) : ",min(3,23,23,34,345),"\n";

// max() return the maximum value in list of arguments
echo "max(3,23,23,34,345) : ",max(3,23,23,34,345),"\n";

// abs() return absolute value (positive value) of a number
echo "abs(-45.4) : ",abs(-45.4),"\n";

// sqrt() return square root of a number : 
echo "sqrt(4) : ",sqrt(4),"\n";

// round() round the number to its nearest integer.
echo "round(4.33) : ",round(4.33),"\n";

// rand(min,max), rand() return random number
echo "rand() : ",rand(),"\n";
echo "rand(3,10) : ",rand(3,10),"\n";
?>