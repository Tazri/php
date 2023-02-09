<?php
// function to figure out two point distane
function calculate_distance($one,$two){// one, and two is point array, one [x,y],two [x,y]
    $diff_x = $one[0] - $two[0];
    $diff_y = $one[1] - $two[1];

    $square_diff_x = $diff_x * $diff_x;
    $square_diff_y = $diff_y * $diff_y;

    $distance = sqrt($square_diff_x+$square_diff_y);
    return $distance;
}

// damage for every spell
$spell_list = [
  //"spell_name"=>[damage,[radius1,radius2,radius3]] positition = level - 1
    "fire" => [200,[20,30,50]],
    "water" => [300,[10,25,40]],
    "earth" => [400,[25,55,70]],
    "air" => [100,[18,38,60]]
];

// fucntion get rectangle width,height and position 
function get_rect(){
    /**
     * return a array
     * [
     *  w -> width:int
     *  h -> height:int,
     *  [rx,ry] -> position x and y from lower left corner
     * 
     * ]
     */

    $words = explode(" ",readline());

    return [
            (int)$words[0], // width
            (int)$words[1], // height
            [
             (int)$words[2], // rx -> x position from lower left corner
             (int)$words[3] // ry -> y position from lower right corner
            ]
     ];
}

// function to get spell with damge and radius
function get_spell($spell_list){
    /**
     * [damage:int,
     *  r:int,
     *  [cx,cy]], r mean radius
     * cx,cy -> point the circle position
     * 
     */

     $words = explode(" ",readline());
     
     $damage = $spell_list[$words[0]][0];
     $level = (int)$words[1];
     $radius = $spell_list[$words[0]][1][$level-1];
     $circle_point = [(int)$words[2],(int)$words[3]]; // (cx,cy)

     return [$damage,$radius,$circle_point];
}

// function to get TRC,TLC,BLC,BRC
function get_all_rect_point($rect){
    /**
     * TRC -> Top Right Corner
     * TLC -> Top Left Corner
     * BLC -> Bottom Left Corner
     * BRC -> Bottom Right Corner
     * 
     */

     // extract data from $rect
     $w = $rect[0]; // width
     $h = $rect[1]; // height
     $rx = $rect[2][0]; // x position of rect
     $ry = $rect[2][1]; // y position of rect

     $BLC = [$rx,$ry];
     $BRC = [$rx+$w,$ry];
     $TLC = [$rx,$ry+$h];
     $TRC = [$rx+$w,$ry+$h];

     return [$TRC,$TLC,$BLC,$BRC];
}

// return smallest number from array
function smallest($array){
    $min = $array[0];

    foreach($array as $item){
        if($item < $min){
            $min = $item;
        }
    }
    return $min;
}

// start to solve the main problem
$testcase = (int)readline();

while($testcase--){
    // get rect and spell
    $rect = get_rect();
    $spell = get_spell($spell_list);

    // get all rectangle corner
    $all_corner = get_all_rect_point($rect);
    $cp = $spell[2]; // circle point
    
    // calculate all distance from circle point to all rect point
    $all_distance = [];
    foreach($all_corner as $corner){
        array_push($all_distance,calculate_distance($corner,$cp));
    }

    // smalest distance
    $smallest_distance = smallest($all_distance);
    $spell_radius = $spell[1];
    $spell_damage = $spell[0];

    if($smallest_distance <= $spell_radius){
        echo "$spell_damage\n";
    }else{
        echo "0\n";
    }
}

?>