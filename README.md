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
- [Superglobals](#Superglobals)
- [Methods](#Methods)
- [File Handling](#File_Handling)

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

## function
***Program : 07.function.php***
```php
<?php
/**
 * Here structure of declear function in php
 * function function_name(arguments list with default parameter){
 * 
 * execute some syntax here.
 * 
 * return or not as your whish
 * }
 */

function operation($function, $number_one, $number_two){
    /**
     * Here $function is function name as string.
     * You called this function like this as well.
     */
   return $function($number_one,$number_two);
}

function  function_one($num_one,$num_two){
    return $num_one + $num_two;
}

function function_two($num_one,$num_two){
    return $num_one * $num_two;
}

function hello($name = "Anonymous"){
    echo "Hello, ",$name,"\n";
}

// you can not store the function in variable but you can store function name in variable
$sum = "function_one";
$multiply = "function_two";

echo "operation(\$sum,3,23) : ", operation($sum,3,23),"\n";
echo "operation(\$multiply,3,3) : ", operation($multiply,3,3),"\n";
$what_return_hello = hello("Alayth");
hello();
echo "\$what_return_hello : $what_return_hello\n";

?>
```

***Ouput : 07.function.php***
```
operation($sum,3,23) : 26
operation($multiply,3,3) : 9
Hello, Alayth
Hello, Anonymous
$what_return_hello : 
```

## strict function
***Program : 08.strict_function.php***
```php
<?php 
/**
 * First enabled the strict for create strict type
 * function here.
 * 
 */
declare(strict_types = 1); // enabled strict first

// declear strict function structure
/**
 * function function_name(argument list with type) : return_type{
 *  // here code
 * }
 * 
 * return type as your whish to add.
 * 
 */

function hello(string $name = "anonymous"):int{
   echo "Hello, $name\n";
   // return "322"; // generate error
   return 322;
}

$number = hello("Alyath");
echo "\$number : $number\n";

// hello(32); // generate error


?>
```

***Output : 08:strict_function.php***
```
Hello, Alyath
$number : 322
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

## Array
***Program : 02.array.php***
```php
<?php
// basic way to declear array in php
$names = array("Eren Yeager","Armin","Mikasa Akerman","Levi Akerman");

var_dump($names);

// count() return length of array
echo "count(\$names) : ",count($names);
echo PHP_EOL;

// print array by indexed
echo "\n\n>>> Print Value of Array by Index Number <<<\n";
echo "\$names[0] : ",$names[0],"\n";
echo "\$names[1] : ",$names[1],"\n";
echo "\$names[2] : ",$names[2],"\n";
echo "\$names[3] : ",$names[3],"\n";
// echo "\$names[-1] : ",$names[-1],"\n"; // can not work here

// change value by index
$names[0] = "Erwin Smith";
echo "After first value change \$names[0] : ",$names[0],"\n";

// loop through on array
echo "\n>>> Foreach Loop Through On Array <<<\n";
foreach($names as $name){
    echo "Hello, $name!";
    echo PHP_EOL;
}
?>
```

***Output : 02.array.php***
```
array(4) {
  [0]=>
  string(11) "Eren Yeager"
  [1]=>
  string(5) "Armin"
  [2]=>
  string(14) "Mikasa Akerman"
  [3]=>
  string(12) "Levi Akerman"
}
count($names) : 4


>>> Print Value of Array by Index Number <<<
$names[0] : Eren Yeager
$names[1] : Armin
$names[2] : Mikasa Akerman
$names[3] : Levi Akerman
After first value change $names[0] : Erwin Smith

>>> Foreach Loop Through On Array <<<
Hello, Erwin Smith!
Hello, Armin!
Hello, Mikasa Akerman!
Hello, Levi Akerman!
```

## Associative Array
***Program : 03.associative_array.php***
```php
<?php 
/**
 * Associative array is a array which store values by
 * key value pairs. Here example : 
 * array("key" => "value","key" => "value");
 * 
 */

$person = array(
    "name" => "Alatyh",
    "age" => 33333,
    "type" => "red giants"
);

echo "\$person[\"name\"] : ",$person["name"],"\n";

// foreach loop on associative array
echo "\n\n>>> foreach loop on associative array <<<\n";
foreach($person as $person_topics => $value){
    echo "$person_topics : $value";
    echo PHP_EOL;
} 

?>
```

***Output : 03.associative_array.php***
```
$person["name"] : Alatyh


>>> foreach loop on associative array <<<
name : Alatyh
age : 33333
type : red giants
```

## Sorting Array
***Program : 04.sort_array.php***
```php
<?php
// another way declare array
$numbers = [32,2,4,5];
$names = ["Erwin Smith","Xenon","Armin"];
$person = [
    "names" => "Eren Yeager",
    "titan power" => "attack Titan",
    "Nationality" => "Eldians"
];

// function to print array
function print_array($array){
    echo "[ ";
    foreach($array as $value){
        echo "$value, ";
    }
    echo "]";
}

// print both array
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";

// sort() sort arrays in accending order
sort($numbers);
sort($names);
echo "\n >>> After Apply Sort Method on Both Array <<<\n";
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";

// rsort() // sort array in deccending order
rsort($numbers);
rsort($names);
echo "\n >>> After Apply Sort Method on Both Array <<<\n";
echo "\$numbers : ",print_array($numbers),"\n";
echo "\$names : ",print_array($names),"\n";


// asort(); sort associative array in accending order, according to the value
asort($person);
echo "\n>>> After Apply asort on person<<<\n";
var_dump($person);

/**
 * more method
 * ksrot() sort associative array in accending order, according to the key
 * arsort() sort associative array in deccending order, according to the value
 * krsort() sort associative array in deccending order, according to the key
 * 
 */
?>
```

***Output : 04.sort_array.php***
```
$numbers : [ 32, 2, 4, 5, ]
$names : [ Erwin Smith, Xenon, Armin, ]

 >>> After Apply Sort Method on Both Array <<<
$numbers : [ 2, 4, 5, 32, ]
$names : [ Armin, Erwin Smith, Xenon, ]

 >>> After Apply Sort Method on Both Array <<<
$numbers : [ 32, 5, 4, 2, ]
$names : [ Xenon, Erwin Smith, Armin, ]

>>> After Apply asort on person<<<
array(3) {
  ["Nationality"]=>
  string(7) "Eldians"
  ["names"]=>
  string(11) "Eren Yeager"
  ["titan power"]=>
  string(12) "attack Titan"
}
```

# Superglobals
Some predefined variable in php are "Superglobals" which means that they are accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special. Here descibe some superglobals variable.

## GLOBALS
***Program : 00.globals.php***
```php
<?php

$number_one = 23;
$name_of_star = "Alyath";

/**
 * $GLOBALS is php superglobal variable which is used to access gobals variable 
 * from anywhere in php script.
 *
 * $Globals is one kind of php associative array
 * 
 */

 function afdkljaldf(){
    echo "\n>>>Here access global variable by \$GLOBALS<<<\n";
    echo "\$GLOBALS['number_one'] : ",$GLOBALS['number_one'],"\n";
    echo "\$GLOBALS['name_of_star'] : ",$GLOBALS['name_of_star'],"\n";
 }

 $call_me = 'afdkljaldf';

 $call_me();
?>
```

***Output : 00.globals.php***
```

>>>Here access global variable by $GLOBALS<<<
$GLOBALS['number_one'] : 23
$GLOBALS['name_of_star'] : Alyath
```

## _SERVER
***Program : 01._server.php***
```php
<?php
/**
 * $_SERVER superglobals which holds infromation about headers, path and script
 * location.
 * 
 */

echo "\$_SERVER['PHP_SELF'] : ",$_SERVER['PHP_SELF'],"\n";
echo "\$_SERVER['SCRIPT_NAME'] : ",$_SERVER['SCRIPT_NAME'],"\n";

/**
 * $_SERVER[value];
 * Here some value describe : 
 * SERVER_NAME // return the name of host server
 * SERVER_PROTOCOL // return the name and rivision of the infromation protocol
 * REQUEST_METHOD // return the request method used to access the page
 * 
 */
?>
```

***Output : 01._server.php***
```
$_SERVER['PHP_SELF'] : 01._server.php
$_SERVER['SCRIPT_NAME'] : 01._server.php
```

## _REQUEST
Here example of _REQUEST : 

# Methods
Here I explain some built in function like date, time,file handling etc;

## Regex
***Program : 00.regex.php***
```php
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
```

***Output : 00.regex.php***
```
The Sentence : 
-------------------------Hello, Universe! I am Tazri. Do you know me? Here I come to tell you about myself. I am nothing but a human. Who is totally borken inside and show the outside front of world that everything ok with a smile.
-------------------------
$name_regex : /Tazri/i
preg_match($name_regex,$sentence) : 1
preg_match_all('/am?/i',$sentence) : 10

$message : Hello, World!
$replaced_message : Hello, Universe!
```


## date
***Program : 01.date.php***
```
<?php 
/**
 * date(format,timestamp)
 * 
 * d - day of month
 * m - month of year
 * Y - represents a year in four digit (in four digits)
 * l - represents the day of the week
 * H - hour 24 format
 * h - hour 12 format with leading zeros
 * i - minutes with leading zeros
 * s - secound with leading zeros
 * a - lowercase ante merdiem and post meridiem (am or pm)
 * 
 */

echo "Date : ".date("> Y-m-d (l) <")."\n";
echo "TIME : ".date("H:i:s")."\n";
echo "TIME(12) : ".date("h-i-s-a")."\n";

/**
 * date_default_timezone_set("Bangladesh/Dhaka");
 * This function use for set time zone.
 * 
 */

?>
```

***Output : 01.date.php***
```
Date : > 2022-05-24 (Tuesday) <
TIME : 14:47:40
TIME(12) : 02-47-40-pm
```

## include and require
***Program : 02.include_require.php***
```php
<?php
/**
 * include and require both work as well
 * include can not throw error if file dose not exist
 * but 
 * require throw error if file dose not exist.
 * 
 */
// include "./lib/lib.php";
require "./lib/lib.php";

echo "hello(\"Alyath\") : ". hello("Alyath");
echo "sum(32,33) : ",sum(32,33),"\n";

?>
```

***Output : 02. include_require.php***
```
hello("Alyath") : Hello, Alyath!
sum(32,33) : 65
```

# File_Handling
Here I discuse about file handling in php. First see some file handling function : 

***Program : 01.file_function.php***
```php
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
```

***Output : 01.file_function***
```
content : 
Here,
it is a text
nothing else
hello.........................!
------------------
feof($file) :
```

## fwrite()
***Program : 02.file_write.php***
```php
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
```

***Ouput : 2.file_write.php***
```
Text : 
This is the simple text
which is write in the file.
...
..
.
Easy.........
----------------
```
