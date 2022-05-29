<?php

/**
 * inheritance syntax in php here : 
 * class derived_class extends base_class{
 *  public $public_property;
 *  protected $protected_property;
 *  private $private_property;
 * 
 *  function __construct(){ // it will override derived class constructor
 *      parent::__construct() // call the parent constructor
 *  }
 * 
 *  // method here
 *  
 *  funtion __destruct(){ // destruct also override
 *  // destruct call at last when interpreter complate execute whole program.
 *  }
 * }
 * 
 */

class Fruit{
    public $name;
    public $color;
    
    // constructor
    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }

    // some method
    function details(){
        echo "Fruits($this->name,$this->color)\n";
    }
}

// inheriting class
class Apple extends Fruit{
    public $test;

    // child construct
    function __construct($color,$test){
        // call the base class constructor
        parent::__construct("Apple",$color);
        $this->test = $test;
    }

    // derived method
    public function apple_details(){
        echo "APPLE($this->color,$this->test)\n";
    }
    
}

// create child object
$my_apple = new Apple("Red","Sweet");

$my_apple->details();
$my_apple->apple_details();

?>