<?php

/**
 * static property look like static method but it is variabe and method is funciton.
 * class Class_Name{
 *  public static $name = value;
 * }
 * 
 * // access inside the class 
 * self::$name;
 * 
 * // access child class
 * parent::$name;
 * 
 * // access outside the class
 * Class_Name::$name;
 * 
 */

class Box{
    public static $message =  "USELESS\n";
}

echo "Box::\$message : ",Box::$message;

?>