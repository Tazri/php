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