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