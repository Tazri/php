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