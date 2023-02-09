<?php
// define some constant
const paper = "papel";
const rock = "pedra";
const scissors = "tesoura";

// text for all 
$game_draw = "Putz vei, o Leo ta demorando muito pra jogar...\n";
$dodo_win = "Os atributos dos monstros vao ser inteligencia, sabedoria...\n";
$leo_win = "Iron Maiden's gonna get you, no matter how far!\n";
$pepper_win = "Urano perdeu algo muito precioso...\n";

// remove duplicate from array
function remove_duplicate($array){
    $final_array = [];

    foreach($array as $item){
        if(!in_array($item,$final_array,true)){ // if not in array
            array_push($final_array,$item);
        }
    }

    return $final_array;
}

// check item spacify item is twice in array
function is_item_twice($array,$target_item){
    $item_found = 0;
    foreach($array as $item){
        if($item === $target_item){
            $item_found++;
        }
    }

    if($item_found === 1){
        return false;
    }else{
        return true;
    }
}

$input = readline();
while($input){
    $all_choose = explode(" ",$input);
    
    // select all choose
    $dodo = $all_choose[0];
    $leo = $all_choose[1];
    $pepper = $all_choose[2];
    

    // remove duplicate
    $final_choose = remove_duplicate($all_choose);
    $final_array_length = count($final_choose);

    // if $final_choose has 3 different value then it draw
    if($final_array_length === 3){
        echo $game_draw;
    }

    // if array lengh is 1, that's mean every one same choose. in that case draw
    elseif($final_array_length === 1){
        echo $game_draw;
    }

    else{ // here now only two choose is left from final array
        // now find who is win
        $choose_one = $final_choose[0];
        $choose_two = $final_choose[1];
        $winner;

        // decide two who is winner
        // first check for rock
        if($choose_one === rock and $choose_two === paper){
            $winner = $choose_two;
        }elseif($choose_one === rock and $choose_two === scissors){
            $winner = $choose_one;
        }

        // second for check paper
        if($choose_one === paper and $choose_two === scissors){
            $winner = $choose_two;
        }elseif($choose_one === paper and $choose_two === rock){
            $winner = $choose_one;
        }

        if($choose_one === scissors and $choose_two ===  rock){
            $winner = $choose_two;
        }elseif($choose_one == scissors and $choose_two === paper){
            $winner = $choose_one;
        }

        // now check is winner is two in all choose then it is draw
        $is_winner_two = is_item_twice($all_choose,$winner);

        if($is_winner_two){ // if winner two then game draw
            echo $game_draw;
        }else{
            // print the winner spacify message
            if($winner === $dodo){
                echo $dodo_win;
            }elseif($winner === $leo){
                echo $leo_win;
            }elseif($winner === $pepper){
                echo $pepper_win;
            }
        }
    }

    // input for next round
    $input = readline();
}

/**
Problem : JB6 Team
Dodô, Leo e Pepper often spend the early hours of the morning chatting somewhere in the condominium 
Jardim Botânico IV. In the last few sessions, Dodo has been talking about the RPG game he and Leo are 
creating, and Leo (not surprisingly) has spoken about heavy metal and Pepper was fascinated by the 
story of Greek mythology told by Leo.

The boys decided to adopt a strategy to divide the sessions equally among the subjects, só each one 
to them can speculate as much as possible and arrive at unbilievable conclusions. They wall play “rock, 
paper and scissors” to decide the subject of today’s session, and then they will alternate the subjects 
in the next sessions. Given the moves of Dodo, Leo and Pepper, in this order, you must determine the 
subject of today’s session.

Input : 
The input is composed of several test cases and ends with end of file (EOF). Each test case consists 
of a single line, which contains the plays of each of the boys, as shown in the exemples.

Output : 
For each test case, print a single line with the message "Os atributos dos monstros vao ser inteligencia, 
sabedoria…" to indicate that Dodo is the winner, the message "Iron Maiden's gonna get you, no matter 
how far!" to indicate that Leo is the winner, the message "Urano perdeu algo muito precioso…" to indicate 
that Pepper is the winner, of the message "Putz vei, o Leo ta demorando muito pra jogar…" if there is a 
tie.

Input Sample : 
papel pedra pedra
papel tesoura papel
pedra pedra papel
papel papel pedra

Output Sample : 
Os atributos dos monstros vao ser inteligencia, sabedoria...
Iron Maiden's gonna get you, no matter how far!
Urano perdeu algo muito precioso...
Putz vei, o Leo ta demorando muito pra jogar...

*/
?>