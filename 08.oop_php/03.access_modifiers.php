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