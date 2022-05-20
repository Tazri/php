![https:://www.github.com/Tazri/php.git](https://img.shields.io/badge/PHP-Programming-blue)

![https:://www.github.com/Tazri](https://img.shields.io/badge/PHP-Programming-blue?style=plastic&logo=github)


# PHP Programming Language
This is a simple documentation on php for me. I create this repository to note about what I learn about php. 

## Table of Context
- [Hello World](#Hello_World)
- [Simple Variable](#Simple_Variable)

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