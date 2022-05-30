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