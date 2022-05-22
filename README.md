![https:://www.github.com/Tazri/php.git](https://img.shields.io/badge/PHP-Programming-blue)

![https:://www.github.com/Tazri](https://img.shields.io/badge/PHP-Programming-blue?style=plastic&logo=github)


# PHP Programming Language
This is a simple documentation on php for me. I create this repository to note about what I learn about php. 

## Table of Context
- [Hello World](#Hello_World)
- [Simple Variable](#Simple_Variable)
- [Operator](#Operator)
- [Control Structures](#Control_Structures)
- [Data Type](#Data_Type)

# Hello_World
Here basic syntax to print hello world in php. 

***Program : hello_world.php***
```php
<?php # write this must. it mean here start php code

// hello world by php 
echo "Hello, World!\n";

?> # close the php code block
```

***Output : hello_world.php***
```
Hello, World!
```

## echo vs print
Here different bitween echo and print with simple example : 

***Program : 01.print_vs_echo***
```php
<?php # start php

// echo
echo "This " , "is " , "my ", "universe\n" ; // print this is my universe
// echo("this ", "is " "my ", "universe"); get error
echo ("Hello,"." World!\n");
echo "Hello,". " World!\n";

// print
print("This is my universe!\n");
print "Hello, World!\n";
// print "Hello, " , "World!\n"; // get error
print("Hello, "."Wrold!\n");


# if whole file contain php code then dose not need to close php block
```

***Output : 01.print_vs_echo***
```
This is my universe
Hello, World!
Hello, World!
This is my universe!
Hello, World!
Hello, Wrold!
```

## comment
Three way to comment in php

***Program : 02.comment.php***
***
```php
<?php

// Here simple inline comment example
# here another simple inline comment example like python
/**
 * Here double line comment example like c, c++ and javascript
 */

?>
```

# Simple_Variable
Here basic variable in php by example : 

***Program : 00.simple_variable_and_constant.php***
```php
<?php

// here decleare variable
$number = 20;

echo "number" , $number, "\n";
echo "number is { $number }\n";
echo 'number is { $number }',"\n"; // take is simple string 


// declear constant
/**
 * There two way to declear constant in php
 * by define funciton
 * define(
 * constant_name_as_string,
 * value of constant,
 * is case insensitive ? by default value false
 * )
 * 
 * by const keyword
 * const const_name = value;
 * 
 */

define("PI",3.14167);
const PI_TWO_DIGIT = 3.14;

echo "PI ", PI , "\n";
echo "PI_TWO_DIGIT ", PI_TWO_DIGIT , "\n";
```

***Output : 00.simple_variable_and_constant***
```
number20
number is { 20 }
number is { $number }
PI 3.14167
PI_TWO_DIGIT 3.14
```

## all datatype in php basic

***Program: 01.basic_datatype.php***
```php
<?php
// php support 11 datatype

// var_dump use for know about variable type

// first 4 scalar datype in php
# 1 -> boolean value either true or false
$bool = true; 
echo "bool ->";
var_dump($bool);

# 2 -> integer
$int = 32;
echo "\n";
var_dump($int);

# 3 -> float
$float = 4.32;
echo "\nfloat ->";
var_dump($float);

# 4 -> string
$name = "string value";
echo "\nstring -> ", var_dump($name) ,"\n";

// secound 4 compound datatype in php
# 1-> array
$numbers = [3,2];
echo "numbers -> ", var_dump($numbers),"\n";

# 2-> object
class Simple_object{

};
$object = new Simple_object;
echo "object -> ", var_dump($object),"\n";
# 3-> callable
# 4-> iterable

// third 2 special datatype
# 1-> Resource
# 2-> Object 

// null
$null_value = NULL;
echo "null_value -> ",var_dump($null_value),"\n";

?>
```

***Output : 01.basic_datatype.php***
```
bool ->bool(true)

int(32)

float ->float(4.32)

string -> string(12) "string value"

numbers -> array(2) {
  [0]=>
  int(3)
  [1]=>
  int(2)
}

object -> object(Simple_object)#1 (0) {
}

null_value -> NULL

```

## magic and predefine constant
***Program : 02.magic_constant.php***
```php
<?php

// php has 7 magic constant. Here 3 magic constant

echo "__DIR__ ", __DIR__,"\n";
echo "__FILE__ ", __FILE__,"\n";
echo "__LINE__ ", __LINE__ ,"\n";

// Here example predefine constant
echo "PHP_VERSION", PHP_VERSION, "\n"; 
echo "PHP_OS", PHP_OS, "\n";
echo "PHP_EOL" , PHP_EOL, "finish\n";
```

***Output : 02.magic_constant.php***
```
__DIR__ /home/tazri/Documents/work-place/php/php/01.basic_variable
__FILE__ /home/tazri/Documents/work-place/php/php/01.basic_variable/02.magic_constant.php
__LINE__ 7
PHP_VERSION7.0.33-57+ubuntu20.04.1+deb.sury.org+1
PHP_OSLinux
PHP_EOL
finish
```

# Operator
PHP Operator work like common programming language. But PHP has some operator which not ableabaile another programming language. Here Describe it : 

## Arithmematics Operator

***Program : 00.arithmematics_operator.php***
```php
<?php
// arithematic operator
/**
 * php arithematic is like common what every programming language has.
 * Here all arithematic operator...
 * +, -, *, /, ++, --, **
 *  
 */

$num = 5;
echo "\$num : ", $num, "\n";
echo "\$num ** 2 = ", $num**2 , "\n";

?>
```

***Output : 00.arithmematics_operator.php***
```
$num : 5
$num ** 2 = 25
```

## Ralational Operator
***Program : 01.ralational_operator.php***
```php
<?php

// Ralational and Comparision Operator
/**
 * PHP has common comparision operator which reaturn boolean
 * value. Here all php Ralational Operator : 
 * ===, ==, !=, !==, >, <, >=, <=,  
 * 
 * special : 
 * <> // not equal ( check value and type like !== )
 * <=> // spaceship operator ( return 0 when both operand equal )
 *  <=> // ( return 1 when first operand is big )
 *  <=> // ( return -1 when first operand is small )
 * 
 */

echo ">>>> Check Spcial Ralational Operator in PHP <<<<\n";
echo "var_dump(10 <> 15) ", var_dump(10 <> 15);
echo "var_dump(10 <=> 13) ", var_dump(10 <=> 13);
echo "var_dump(10 <=> 10) ", var_dump(10 <=> 10);
echo "var_dump(8 <=> 13) ", var_dump(8 <=> 13);

?>
```

***Ouput : 01.ralational_operator.php***
```
>>>> Check Spcial Ralational Operator in PHP <<<<
var_dump(10 <> 15) bool(true)
var_dump(10 <=> 13) int(-1)
var_dump(10 <=> 10) int(0)
var_dump(8 <=> 13) int(-1)
```

## Logical Operator

***Program : 02.logical_operator.php***
```php
<?php

// Logical Operator
/**
 * Here common php logical operator : 
 * or, || ( Or operator, both keyword use for same reason )
 * and, && ( And operator, both keyword use for same reason )
 * ! ( not operator )
 * xor ( Xor operator, Use like xor gate )
 */

echo ">>>> Logical Operator <<<<\n";
echo "var_dump( true and true ) : ", var_dump( true and true );
echo "var_dump( true or false ) : ", var_dump(true or false);
echo "var_dump( true xor false ) : ", var_dump(true xor false);

?>
```

***Output : 02.logical_operator***
```
>>>> Logical Operator <<<<
var_dump( true and true ) : bool(true)
var_dump( true or false ) : bool(true)
var_dump( true xor false ) : bool(true)
```

## More Operator
***Program : 03.extra_operator.php***
```php
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
```

***Output : 03.extra_operator.php***
```
>>>> Extra Operator <<<<
gettype(30)  : integer
gettype(40.43) : double
gettype("string") : string
PHP 7.0.33-57+ubuntu20.04.1+deb.sury.org+1 (cli) (built: Nov 19 2021 06:39:53) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
    with Zend OPcache v7.0.3
```

# Control_Structures
PHP has some control structor like condition, loop, switch statement etc.

## Condition
***Program : 00.condition.php***
```php
<?php

// if else condition
$num = 32;

echo ">>>> If, else if, else <<<\n";
if($num == 0){
    echo "Number is ZERO!!";
    echo PHP_EOL;
}else if($num > 0){
    echo "Number  is Greater than 0!!";
    echo PHP_EOL;
}elseif($num == -3){
  echo "Number is -3";
  echo PHP_EOL;
}
else{
    echo "Number is Less then 0!!";
    echo PHP_EOL;
}

?>
```

***Output : 00.condition.php***
```
>>>> If, else if, else <<<
Number  is Greater than 0!!
```

## Alternative Condition Syntax
***Program : 01.alternative_condition_syntax.php***
```php
<?php 
$num = 40;

// indention dose't matter here
if ($num > 0) : 
    echo "num is greaterthen 40\n";
elseif($num == 0):
    echo "num is zero!!\n";
else:
    echo "num is less than 0\n";
endif;
?>



<?php
$result = "Hello";
// alternative syntax use like this

if ($result == "Bye"):
?>
<h1> html syntax can run here. (Bye) </h1>

<?php
elseif($result =="Hello"):
?>
<h1> html syntax can run here. (Hello) </h1>

<?php
endif;
echo PHP_EOL;
?>
```

***Ouput : 01.alternative_condition_syntax.php***
```
num is greaterthen 40



<h1> html syntax can run here. (Hello) </h1>


```


## while loop
***Program : 02.while_loop.php***
```php
<?php
// here basic while loop in php
$num = 0;
while($num <= 5){
    echo "\$num : $num";
    echo PHP_EOL;
    $num++;
}

// alternative while loop
echo "\n>>> Print 5 to 1 by Alternative while loop syntax <<<\n";
while(--$num):
    echo "\$num : $num";
    echo PHP_EOL;
endwhile;

?>
```

***Output :02.while_loop.php***
```
$num : 0
$num : 1
$num : 2
$num : 3
$num : 4
$num : 5

>>> Print 5 to 1 by Alternative while loop syntax <<<
$num : 5
$num : 4
$num : 3
$num : 2
```

## do while loop
***Program : 03.do_while_loop.php***
```php
<?php
// here simple do while loop

$num = 0;

do{
    echo "\$num : $num";
    echo PHP_EOL;
    $num++;
}while($num <= 5);

?>
```

***Output : 03.do_while_loop.php***
```
$num : 0
$num : 1
$num : 2
$num : 3
$num : 4
$num : 5
```

## for loop
***Program : 04.for_loop.php***
```php
<?php
// print 0 to 5 by for loop in php

for($num = 0; $num <= 5; $num++){
    echo "\$num : $num";
    echo PHP_EOL;
}

// using alternative for loop syntax
echo "\n>>>> print 0 to 5 by alternative for loop syntax <<<<\n";
for($num = 0; $num <= 5; $num++):
    echo "\$num : $num";
    echo PHP_EOL;
endfor;

?>
```

***Output : 04.for_loop.php***
```
$num : 0
$num : 1
$num : 2
$num : 3
$num : 4
$num : 5

>>>> print 0 to 5 by alternative for loop syntax <<<<
$num : 0
$num : 1
$num : 2
$num : 3
$num : 4
$num : 5
```

## foreach loop
***Program : 05.foreach_loop.php***
```php
<?php

// foreach loop runing on just a array. Here example : 
$names = [
    "Alyath",
    "Eren Yeager",
    "Armin",
    "Levi Akerman",
    "L Lawliet"
];

// foreach loop example 
foreach($names as $name){
    echo "Hello, $name";
    echo PHP_EOL;
}

// foreach loop on associative array
echo "\n\n>>> foreach loop on associative array <<<\n";
$person = [
    "name" => "Eren Yeager",
    "age" => 23,
    "titan_power" => "Attack Titan"
];

foreach ($person as $key => $value){
    echo "$key : $value";
    echo PHP_EOL;
}

?>
```

***Output : 05.foreach_loop.php***
```
Hello, Alyath
Hello, Eren Yeager
Hello, Armin
Hello, Levi Akerman
Hello, L Lawliet


>>> foreach loop on associative array <<<
name : Eren Yeager
age : 23
titan_power : Attack Titan
```

## break and continue
In php break and continue work like another programming language what do with those keyword. Nothing else.

## switch

***Program : 06.switch.php***
```php
<?php

$number = 5;

// basic switch in php : 

switch($number){
    case 2 : 
        echo "number is two\n";
        break;
    case 3 : 
        echo "number is three\n";
        break;
    case 4 :
        echo "number is four\n";
        break;
    case 5 : 
        echo "number is five\n";
        break;
    default : 
        echo "number is unknown\n";
}

?>
```

***Ouput : 06.switch.php***
```
number is five
```

# Data_Type
Here this section I Describe about data type in php. Start with array. Also I use w3 school reference. 


## String

***Program : 00.string.php***
```php
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
```

***Output : 00.string.php***
```
Message is : Hello, World!
strlen($message) : 13
str_word_count($message) : 2
strrev($message) : !dlroW ,olleH
strpos($message,"World!") : 7
str_replace("World!","Universe!",$message) : Hello, Universe!
At last Message is : Hello, World!
```

## number

***Program : 01.number.php***
```php
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

// convertion string
echo "(int) 3.46 : ", (int)3.46, "\n";
echo "(float) 3 : ",(float)3,"\n";
echo "(int) \"3\" : ",(int)"3","\n";

?>
```

***Output : 01.number.php***
```
PHP_INT_MAX : 9223372036854775807
PHP_INT_MIN : -9223372036854775808
PHP_INT_SIZE : 8
(int) 3.46 : 3
(float) 3 : 3
(int) "3" : 3
```