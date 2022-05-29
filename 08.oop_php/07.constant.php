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