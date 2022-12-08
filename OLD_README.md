![https:://www.github.com/Tazri/php.git](./asset/badge/github.svg)

![https:://www.github.com/Tazri](asset/badge/php_icon_bgpurple_textwhite.svg)


# PHP Programming Language
This is a simple documentation on php for me. I create this repository to note about what I learn about php. 

> 🟢 I refactor this whole documentation for easy to read. I divide the old documentation into so many part. Here new documentation : [NEW README](./README.md)

## Table of Context
- [Hello World](#Hello_World)
- [Simple Variable](#Simple_Variable)
- [Operator](#Operator)
- [Control Structures](#Control_Structures)
- [Data Type](#Data_Type)
- [Superglobals](#Superglobals)
- [Methods](#Methods)
- [File Handling](#File_Handling)
- [OOP](#OOP)

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

# OOP
Here I describe OOP in php for me.

## Class
***Program : 01.class.php***
```php
<?php
// role declare class here
/**
 * class class_name{
 *  // code goes here
 * }
 * 
 */

// here declare a class with two properties and some methods
class Person{
    // properties
    public $name;
    public $power;

    // methods
    function set_name($name = "ANONYMOUS"){
        // access class properties inside the methods
        $this->name = $name;
    }

    function set_power($powerr){
        $this->power = $powerr;
        // $power = $powerr; // not working here
    }

    function get_name(){
        return $this->name;
    }

    function get_power(){
        return $this->power;
    }

    function print(){
        echo "$this->name($this->power)\n";
    }

}

// create object
$first_person = new Person();
$first_person->set_name("Eren Yeager");
$first_person->set_power("Attack Titan");
$secound_person = new Person();
$secound_person->set_name("Reinar");
$secound_person->set_power("Armor Titan");

// printing persons details
echo "\$first_person-> print() : ";
$first_person->print();
echo "\$secound_person-> print() : ";
$secound_person->print();

// changing first person details by manual
$first_person->name = "Levi Akerman";
$first_person->power = "Akerman";
echo "After change \$first_person-> print() : ";
$first_person->print();

/**
 * object instanceof class
 * this keyword use to checking object is instanceof class.
 */
echo "var_dump(\$first_person instanceof Person) : ";
var_dump($first_person instanceof Person);

?>
```

***Output : 01.class.php***
```
$first_person-> print() : Eren Yeager(Attack Titan)
$secound_person-> print() : Reinar(Armor Titan)
After change $first_person-> print() : Levi Akerman(Akerman)
var_dump($first_person instanceof Person) : bool(true)
```

## __construct
***Program : 02.constructor.php***
```php
<?php
// here to declare constructor
class Person{
    public $name;
    public $age;

    // constructor
    function __construct($name = "Anonymous",$age = 0){
        $this->name = $name;
        $this->age = $age;
        
    }
    // print methods
    function print(){
        echo "$this->name($this->age)\n";
    }
}

$person = new Person();
$me = new Person("Md Tazri",19);
echo "\$person->print : ";
$person->print();
echo "\$me->print : ";
$me->print();
?>
```

***Output : 02.constructor.php***
```
$person->print : Anonymous(0)
$me->print : Md Tazri(19)
```

## __destruct
***Program : 04.destructor.php***
```php
<?php 

/**
 * class Class_name{
 * 
 *  function __destruct(){
 *      // destructor defination
 *  }
 * }
 */

class Person{
    public $name;
    public $age;

    // constructor
    function __construct($name="ANONYMOUS",$age="000"){
        $this->name = $name;
        $this->age = $age;
    }

    // method
    function details(){
        echo "$this->name($this->age)\n";
    }

    // destructor
    function __destruct()
    {
        echo "$this->name is dead\n";
    }
}

$anonymous = new Person();

$anonymous->details();
?>
```

***Output : 04.destructor.php***
```
ANONYMOUS(000)
ANONYMOUS is dead
```

## access modifiers
***Program : 03.access_modifiers.php***
```php
<?php 
/**
 * public -> can be accessed from everywhere. This is default
 * protected -> can be accessed from the class and access from derived class
 * private -> can be accessed only with in the class
 *  
 */

// here example 
class Person{
    public $name; // it's public
    protected $salary; // it's protected
    private $age; // it private

    // constructor
    function __construct($name="ANONYMOUS",$salary=0,$age='unknow'){
        $this->name = $name;
        $this->salary = $salary;
        $this->age = $age;
    }

    // method
    function show_salary(){
        echo "$this->name's Salary is $this->salary\n";
    }
    function show_age(){
        echo "$this->name's age is $this->age\n";
    }
}

//create person me
$me = new Person("MD Tazri",100,19);
echo "\$me->name : ",$me->name,"\n";

// echo "\$me->salary : ",$me->salary,"\n"; // protected property, can not work here.
// echo "\$me->age : ",$me->age,"\n"; // private property, can not work here.

// get age and salary by method
$me->show_salary();
$me->show_age();

?>
```

***Ouput : 03.access_modifiers.php***
```
$me->name : MD Tazri
MD Tazri's Salary is 100
MD Tazri's age is 19
```

## inheritance
***Program : 05.inheritance.php***
```php
<?php

/**
 * inheritance syntax in php here : 
 * class derived_class extends base_class{
 *  public $public_property;
 *  protected $protected_property;
 *  private $private_property;
 * 
 *  function __construct(){ // it will override derived class constructor
 *      parent::__construct() // call the parent constructor
 *  }
 * 
 *  // method here
 *  
 *  funtion __destruct(){ // destruct also override
 *  // destruct call at last when interpreter complate execute whole program.
 *  }
 * }
 * 
 */

class Fruit{
    public $name;
    public $color;
    
    // constructor
    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    // some method
    function details(){
        echo "Fruits($this->name,$this->color)\n";
    }
}

// inheriting class
class Apple extends Fruit{
    public $test;

    // child construct
    function __construct($color,$test){
        // call the base class constructor
        parent::__construct("Apple",$color);
        $this->test = $test;
    }

    // derived method
    public function apple_details(){
        echo "APPLE($this->color,$this->test)\n";
    }
    
}

// create child object
$my_apple = new Apple("Red","Sweet");

$my_apple->details();
$my_apple->apple_details();

?>
```

***Output : 05.inheritance.php***
```
Fruits(Apple,Red)
APPLE(Red,Sweet)
```

## final 
***Program : 06.final.php***
```php
<?php 
/**
 * final is the keyword in php which is prevent inheritan from derived class.
 * 
 */

final class Person{ // no one class can inherit it
    function useless_person(){
        echo "This is useless class and method.\n";
    }
}

// try to inherting person and get error 
class Student extends Person{ // must throw error.
    function useless_student(){
        echo "This is useless student and method\n";
    }
}
?>
```

***Output : 06.final.php***
```
PHP Fatal error:  Class Student may not inherit from final class (Person) in /home/tazri/Documents/work-place/php/php/08.oop_php/06.final.php on line 18
```

## class constant
***Program : 07.constant.php***
```php
<?php 
/**
 * // in php constant in class declear like
 * class Class_name{
 *  const constant_name = constant_value;
 * 
 *  function something_say(){
 *      self::constant_name; // access constant inside the class self
 *  }
 *
 * }
 * 
 * // access consant outside the class
 * class_name::constant_name;
 * 
 */

class Box{
    const message = "This is useless message\n";

    function what_message(){
        echo "Message is : ",self::message;
    }
}

echo "Box::message : ",Box::message;
$box = new Box();
$box->what_message();
?>
```

***Output : 07.constant.php***
```
Box::message : This is useless message
Message is : This is useless message
```

## Abstract Class
***Program : 08.abstract.php***
```php
<?php

use Person as GlobalPerson;

/**
 * // here deination of abstract class
 * abstract class Class_name{
 *  abstract protected function function_name(); // this function defination must be write inside the child class
 *  abstract public function function_name(); // this function defination must be write inside the child class
 * }
 * 
 * class Child_class extends Parent_class{
 *  public function function_name(){
 *      // write defnation
 *  }
 * 
 * protected function fuction_name(){
 *      // write defnation
 * }
 * }
 */

// parent class
abstract class Person{
    public $name;
    public $age;

    function __construct($name = "ANONYMOUS",$age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    abstract protected function details() : string;
}

// child class
class Student extends Person{
    public function details():string{
        return "Student($this->name,$this->age)\n";
    }
}

class Employee extends Person{
    public function details():string{
        return "Employee($this->name,$this->age)\n";
    }
}

// class Investor extends Person{ // this class will throw error because can not write defination about abstract method from parent class.
//     function mesage(){
//         echo "This is a mesage useless from investor\n";
//     }
// }

$me = new Student("Md Tazri",19);
$someone = new Employee("Nobody",22);

echo "\$me->details() : ", $me->details();
echo "\$somone->details() : ", $someone->details();

?>
```

***Output : 08.abstract.php***
```
$me->details() : Student(Md Tazri,19)
$somone->details() : Employee(Nobody,22)
```

## Interface 
***Program : 09.interface.php***
```php
<?php
/**
 * interface look like abstract class but some difference bitween 
 * interface and abstract class. here
 * 1. interface can not have a properties. while abstract classes can.
 * 2. all interface method must be public. while abstract class method public or protected
 * 3. all method in interface are abstract, so they cannot be implemented in code.
 * 4. abstract keyword use not neccessary.
 * 5. classes can implement an interface while inheriting from another class at the same time.
 * 
 */

/**
 * interface syntax : 
 * interface Interface_name{
 *  public function method_name();
 *  public function method_name_one();
 * }
 * 
 * class Class_name implements interface_name{
 *  // must write defination of interface abstract method.
 * }
 * 
 */

// create interface
interface Animal{
    public function make_sound();
}

// create class
class Cat implements Animal{
    public function make_sound(){
        echo "Meow...!!Meooooooow.............!!!!\n";
    }
}

class Dog implements Animal{
    public function make_sound(){
        echo "Bark.........!!! Bark............!!!!\n";
    }
}

// class Tiger implements Animal{ // it will throw error because don't hame abstract method which is inside Animal interface is make_sound.
//     public function details(){
//         echo "This is useless tiger!!!!!!\n";
//     }
// }

$cat = new Cat();
$dog = new Dog();

$cat->make_sound();
$dog->make_sound();

?>
```

***Output : 09.interfaces.php***
```
Meow...!!Meooooooow.............!!!!
Bark.........!!! Bark............!!!!
```

## Traits
***Program : 10.traits.php***
```php
<?php
/**
 * php can support single level parent inheritance. That way traits come for.
 * Here trait work like class but inherit multiple train in single class.
 * Here syntax of traits : 
 * 
 * trait Trait_Name{
 *  // some code
 * }
 * 
 * // use trait
 * class Class_Name{
 *  use trait_name_one,trait_name_two;
 * }
 * 
 */

trait Person{
    public $name;
    public $age;

    function set_person($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Student{
    use Person;

    function __construct($name="ANONYMOUS",$age="000"){
        $this->set_person($name,$age);
    }

    function details(){
        echo "STUDENT($this->name,$this->age)\n";
    }
}

$me = new Student("Md Tazri");
$me->details();

?>
```

***Output : 10.traits.php***
```
STUDENT(Md Tazri,000)
```

## Static Method
***Program : 11.static_method.php***
```php
<?php
/**
 * here defination of static method
 * class Class_Name{
 *  public static funciton method_name(){
 *      // deination here
 *    }
 * 
 *  function method(){
 *          // call static method inside the class
 *          self::method_name(); 
 *    }
 * }
 * 
 * // call static method
 * Class_Name::method_name();
 * 
 * // call the static method from child class
 * class Class_Name extends Parent_class{
 *      function method(){
 *          parent::static_method();
 *      }
 * }
 * 
 */

class Box{
    public static function message(){
        echo "useless box it is!\n";
    }

    function show(){
        self::message();
    }
}

echo "Box::message() : ",Box::message();
$box = new Box();
$box->show();

?>
```

***Output : 11.static_method.php***
```
Box::message() : useless box it is!
useless box it is!
```

## iterator
***Program : 13.iterator.php***
```php
<?php
/**
 * iterator must have this methods : 
 * current() -> return the current value.
 * key() -> return the key associated with the current in the list.
 * next() -> moves the pointer to the next element in the list
 * rewind() -> moves the pointer to the first element in the first
 * valid() -> if the internal pointer is not pointing to element this should be return false, it return true in any other case
 * 
 */

// create iterator 
class Box implements Iterator{
    private $items = [];
    private $pointer = 0;

    // constructor
    public function __construct($items)
    {
        $this->items = array_values($items);
    }
    
    // iterator method
    function current()
    {
        // current position value
        return $this->items[$this->pointer];
    }

    function next()
    {
        $this->pointer++;
    }

    function key()
    {
        return $this->pointer;
    }

    function valid()
    {
        return $this->pointer < count($this->items);
    }

    function rewind()
    {
        $this->pointer = 0;
    }
}

$new_box = new Box(["Alyath","Anonymo","Focasa","Farabi"]);
foreach($new_box as $name){
    echo "Hello, $name";
    echo PHP_EOL;
}
?>
```

***Output : 13.iterator.php***
```
Hello, Alyath
Hello, Anonymo
Hello, Focasa
Hello, Farabi
```