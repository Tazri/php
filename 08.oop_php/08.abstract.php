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