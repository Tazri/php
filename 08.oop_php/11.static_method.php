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