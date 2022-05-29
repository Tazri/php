<?php 
/**
 * final is the keyword in php which is prevent inheritan from derived class.
 * 
 */

final class Person{ // no one class can inherit it
    function useless_person(){
        echo "This is useless class and method.\n";
    }
}

// try to inherting person and get error 
// class Student extends Person{ // must throw error.
//     function useless_student(){
//         echo "This is useless student and method\n";
//     }
// }
?>