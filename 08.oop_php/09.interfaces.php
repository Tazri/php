<?php
/**
 * interface look like abstract class but some difference bitween 
 * interface and abstract class. here
 * 1. interface can not have a properties. while abstract classes can.
 * 2. all interface method must be public. while abstract class method public or protected
 * 3. all method in interface are abstract, so they cannot be implemented in code.
 * 4. abstract keyword use not neccessary.
 * 5. classes can implement an interface while inheriting from another class at the same time.
 * 
 */

/**
 * interface syntax : 
 * interface Interface_name{
 *  public function method_name();
 *  public function method_name_one();
 * }
 * 
 * class Class_name implements interface_name{
 *  // must write defination of interface abstract method.
 * }
 * 
 */

// create interface
interface Animal{
    public function make_sound();
}

// create class
class Cat implements Animal{
    public function make_sound(){
        echo "Meow...!!Meooooooow.............!!!!\n";
    }
}

class Dog implements Animal{
    public function make_sound(){
        echo "Bark.........!!! Bark............!!!!\n";
    }
}

// class Tiger implements Animal{ // it will throw error because don't hame abstract method which is inside Animal interface is make_sound.
//     public function details(){
//         echo "This is useless tiger!!!!!!\n";
//     }
// }

$cat = new Cat();
$dog = new Dog();

$cat->make_sound();
$dog->make_sound();

?>