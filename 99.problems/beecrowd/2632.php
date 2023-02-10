<?php
// Rect class
class Rect{
    public $wdith,
    $height,
    $rx,
    $ry,
    $rxw, // rx + width
    $ryh; // ry + height
    
    function __construct()
    {
        $words = explode(" ",readline());

        // set width and height;
        $this->wdith = (int) $words[0];
        $this->height = (int) $words[1];

        // set position rx,ry
        $this->rx = (int)$words[2]; // position x
        $this->ry = (int)$words[3]; // position y

        // set upper lower
        $this->rxw = $this->rx + $this->wdith; // rx + w
        $this->ryh = $this->ry + $this->height; // ry + h
    }
}

// speel class
class Spell{
    // damage for every spell
    public $spell_list = [
      //"spell_name"=>[damage,[radius1,radius2,radius3]] positition = level - 1
        "fire" => [200,[20,30,50]],
        "water" => [300,[10,25,40]],
        "earth" => [400,[25,55,70]],
        "air" => [100,[18,38,60]]
    ];

    public $damage,
           $radius, // radius
           $cx, // circle position x
           $cy; // circle postion y

    function __construct()
    {
        $words = explode(" ",readline());

        $this->damage = $this->spell_list[$words[0]][0];
        $level = (int)$words[1];
        $this->radius = $this->spell_list[$words[0]][1][$level-1];
        $this->cx = (int)$words[2];
        $this->cy = (int)$words[3];
    }
}

// start to solve the main problem
$testcase = (int)readline();

while($testcase--){
    // get rect and spell
    $rect = new Rect();
    $spell = new Spell();
    $is_damaged = false;

    // check circle point under the rect
    if($spell->cx >= $rect->rx && // first two determine that 
       $spell->cx <= $rect->rxw && // circle point is under the rect in horizontal
       $spell->cy >= $rect->ry && // next two dtermine that circle point is
       $spell->cy <= $rect->ryh){ // under the rect vertially
        echo "$spell->damage\n";
        continue; // already demaged so continue
    }

    // check circle cross the rect in horizontally
    $y_pdiff = pow($rect->ry-$spell->cy,2); // square of rect y difference with circle y
    $uy_pdiff = pow($rect->ryh-$spell->cy,2); // square of upper rect y difference with circle y

    for($rx = $rect->rx;$rx <= $rect->rxw;$rx++){
        $rx_pdiff = pow($rx-$spell->cx,2); // square of rect x difference with circle x
        $distance_one = sqrt($rx_pdiff+$y_pdiff);
        $distance_two = sqrt($rx_pdiff+$uy_pdiff);

        // check the circle cross the rect horizontally
        if($spell->radius >= $distance_one ||
           $spell->radius >= $distance_two){
            echo "$spell->damage\n";
            $is_damaged = true;
            break;
        }
    }

    // if it already damaged
    if($is_damaged){
        continue;
    }

    // check circle cross the rect in vertically
    $x_pdiff = pow($rect->rx-$spell->cx,2); // square of rect x difference with circle x
    $ux_pdiff = pow($rect->rxw-$spell->cx,2); // square of upper rect x difference with circle x
    
    for($ry = $rect->ry;$ry <= $rect->ryh;$ry++){
        $ry_pdiff = pow($ry-$spell->cy,2);
        $distance_one = sqrt($ry_pdiff+$x_pdiff);
        $distance_two = sqrt($ry_pdiff+$ux_pdiff);

        // check the circle cross the rect vertically
        if($spell->radius >= $distance_one ||
           $spell->radius >= $distance_two){
            echo "$spell->damage\n";
            $is_damaged = true;
            break;
        }
    }

    // if rect dose not damaged
    if(!$is_damaged){
        echo "0\n";
    }
    
}

/**
Problem : Magic and Sword
In the Magic and Sword Tower defense, the player can cast area spells to defeat the enemy units. 
The spells are elemental: fire, water, air and earth, and the affected region is determined by a 
circle whose radius depends on the level of the spell.

The table below lists each spell, damage and its radius per level:

         spell        damage  level1  lvel2  level3
        "fire"    =>   200      20     30      50
        "water"   =>   300      10     25      40
        "earth"   =>   400      25     55      70
        "air"     =>   100      18     38      60

The enemy units are delimited by a rectangle of width w and height h, with the lower left corner 
positioned at the point (x0, y0). The enemy will suffer damage if their bounding rectangle has any 
intercession with the area defined by the spell circle.

Given the position and the bounding rectangle of the enemy unit, the center of the explosion, the 
identifier and level of the  spell, determine the damage to the unit. If the unit is out of the 
spell range, the damage is equal to zero.

Input :
The input consists of T (1 ≤ T ≤ 1000) test cases, where the value of T is reported in the first 
line of the input. Each test case consists of two lines. The first contains four integers representing 
the dimensions w and h (1 ≤ w, h ≤ 1000) of the rectangle and the coordinates x0 and y0 
(0 ≤ x0, y0 ≤ 1000) from the lower left corner. The second line of the test case contains a 
string with the spell identifier (fire, water, earth and air), the level N of this spell 
(1 ≤ N ≤ 3) and the coordinates cx e cy (0 ≤ cx, cy ≤ 1000) from the center of the explosion area.

Output : 
For each test case, the output must be the value of the damage received by the unit, 
followed by a line break.

Input Sample : 
4
10 10 50 50
fire 1 85 55
10 10 50 50
fire 2 85 55
10 10 50 100
water 3 100 100
10 10 50 100
air 3 100 100

Output Sample : 
0
200
300
100

*/

?>