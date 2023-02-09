<?php

// get sum of two numeber, which is value of two button
function button_pressed(){
    $words = explode(" ",readline());

    return (int)$words[0] + (int)$words[1];
}

// all song name with index
$songs = [
    0 => "PROXYCITY",
    1 => "P.Y.N.G.",
    2 => "DNSUEY!",
    3 => "SERVERS",
    4 => "HOST!",
    5 => "CRIPTONIZE",
    6 => "OFFLINE DAY",
    7 => "SALT",
    8 => "ANSWER!",
    9 => "RAR?",
    10 => "WIFI ANTENNAS"
];

$testcase = (int)readline();

while($testcase--){// if testcase exist
    $index = button_pressed();

    // print song name
    $song = $songs[$index];
    echo "$song\n";
}

?>