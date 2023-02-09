<?php
// function for get rgb value from user
function get_rgb(){ // return -> [r,g,b]
    $words = explode(" ",readline());

    return [(int)$words[0],(int)$words[1],(int)$words[2]];
}

// return maximum from array
function return_max($array){
    $max =  $array[0];

    foreach($array as $item){
        if($item > $max){
            $max = $item;
        }
    }

    return $max;
}

// return minimum value from array
function return_min($array){
    $min = $array[0];

    foreach($array as $item){
        if($item <$min){
            $min = $item;
        }
    }

    return $min;
}

// return average from rgb array, remove fraction
function return_average($rgb_array){
    $sum = $rgb_array[0] + $rgb_array[1] + $rgb_array[2];
    return (int)($sum/3);
}

// return eye grascale from rgb array
function return_eye($rgb_array){ // 0 mean red, 1 mean green and 2 mean blue
    $eye = (0.30*$rgb_array[0]) + (0.59*$rgb_array[1]) + (0.11*$rgb_array[2]);

    return (int)$eye;
}

// start to solve the problem
$testcase = (int)readline();
for($test_number = 1;$test_number <= $testcase;$test_number++){
    $topic = readline(); // which topic will figure out
    $result; // where result is store

    // get rgb_array
    $rgb_array = get_rgb();

    if($topic === "min"){
        $result = return_min($rgb_array);
    }elseif($topic === "max"){
        $result = return_max($rgb_array);
    }elseif($topic === "mean"){
        $result = return_average(($rgb_array));
    }elseif($topic === "eye"){
        $result = return_eye($rgb_array);
    }

    // print the result
    echo "Caso #$test_number: $result\n";
}

/**
Problem : Greyscale
Some image processing algorithms require preprocessing in which it is necessary to turn a color 
image into a greyscale image. This conversion can be done in several ways, depending on the result 
you want to achieve.

To preserve the perception of basic colors by the human eye, an appropriate conversion would be to 
take 30% of the red component (R), 59% of the green component (G) and 11% of the blue component (B). 
In mathematical terms:

P = 0, 30R + 0, 59G + 0, 11B

Other possible approaches would be to determine the value of P through the arithmetic mean of the 
three components or assign P to the highest or the lowest values among the three components.

Given the RGB components of one pixel of the color image, determine the value of pixel P of the 
corresponding gray scale image, determining the conversion to be used. Neglect the decimal part 
of the result, if it exists.

Input : 
The input in T (1 ≤ T ≤ 100) test cases, where the value of T is given in the first 
line of the input. Each test case consists of two lines: the first line contains the conversion 
to be used: eye for the first approach described, mean for the arithmetic mean, max for the largest 
component value and min for the lowest component value. The second line contains the R, G, B 
(0 ≤ R, G, B ≤ 255) values of the colored image pixel.

Ouput : 
For each test case the following message "Caso #t: P" should be printed, where P is the gray 
level of the pixel of the grayscale image after the conversion of the colored image pixel. 
This message must be followed by a line break.

Input Sample : 
3
min
35 70 35
mean
10 74 181
eye
23 78 197

Output Sample : 
Caso #1: 35
Caso #2: 88
Caso #3: 74

*/

?>