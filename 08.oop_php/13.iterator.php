<?php
/**
 * iterator must have this methods : 
 * current() -> return the current value.
 * key() -> return the key associated with the current in the list.
 * next() -> moves the pointer to the next element in the list
 * rewind() -> moves the pointer to the first element in the first
 * valid() -> if the internal pointer is not pointing to element this should be return false, it return true in any other case
 * 
 */

// create iterator 
class Box implements Iterator{
    private $items = [];
    private $pointer = 0;

    // constructor
    public function __construct($items)
    {
        $this->items = array_values($items);
    }
    
    // iterator method
    function current()
    {
        // current position value
        return $this->items[$this->pointer];
    }

    function next():void // void can not comportabe with php7.0
    {
        $this->pointer++;
    }

    function key()
    {
        return $this->pointer;
    }

    function valid():bool // bool can not comportable with php7.0
    {
        return $this->pointer < count($this->items);
    }

    function rewind():void // void can not comportable with php7.0
    {
        $this->pointer = 0;
    }
}

$new_box = new Box(["Alyath","Anonymo","Focasa","Farabi"]);
foreach($new_box as $name){
    echo "Hello, $name";
    echo PHP_EOL;
}
?>