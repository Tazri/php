<?php

// global variable
$name = "Anonymous";
$friend = "Alyath";
$another = "Sirius";

function callName(){    
    /**
     * before using global variabe in php
     * must use global keyword to knowning to
     * interpreter that is gloabl variable
     */

    global $name,$friend;
    echo "Hello, $name and $friend!\n";

    global $another;
    echo "Hey $another!\n";
}

callName();

/**
ouptut : 
Hello, Anonymous and Alyath!
Hey Sirius!
*/
?>