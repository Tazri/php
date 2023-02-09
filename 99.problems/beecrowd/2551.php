<?php
// return the minute and kilometer, [minute,kilometer]
function train_details(){
    $words = explode(" ",readline());

    return [(int)$words[0],(int)$words[1]];
}

// get input
$input = readline();

while($input){// if user input the number
    $days = (int)$input; // number of day he trained

    // get first training details 
    $minute_kilo = train_details(); // return [minute,kilometer]
    $best_speed = $minute_kilo[1] / $minute_kilo[0]; // thing first day is best

    echo "1\n";

    // get other days details,starting to day = 2
    for($day = 2;$day <= $days;$day++){ // calculate for every day
        // get details , calculate speed by = kilometer / minute
        $minute_kilo = train_details();
        $speed =  $minute_kilo[1] / $minute_kilo[0];

        if($speed > $best_speed){ // if beat the previous day
            echo "$day\n";
            $best_speed = $speed;
        }
    }
    
    // input next training details
    $input = readline();
}

/**
Problem : New Record : 2551
The great Curitiban street marathon will occur in the next few days! Many athletes are training 
for the big day! Flávio is one of these athletes. He trains daily, hoping to be well placed in the
marathon. He runs every morning on the streets near to his house.

His trainings are monitored by an app installed on his smartphone. After each training, Flávio knows 
both the duration and the distance he ran. With these information, he can determine his average speed in 
the training.

Flávio is really concerned about the evolution of his performance in his trainings, and, in particular, 
about the records of his average speed. Such record is beaten in some training when the average speed of 
that training is greater than all average speeds of the previous trainings. Help Flávio to determine in 
which trainings he beat his record.

Input : 
The input contains several test cases. The first line of each test case contains an integer 
N (1 ≤ N ≤ 30), the number of trainings. Consider that the trainings were done in days 1, 2,...,N. T
he next N lines describe the trainings. Line i (1 ≤ i ≤ N) contains two integers Ti and Di 
(1 ≤ Ti, Di ≤ 100), the duration of the training (in minutes) and the distance ran during it 
(in kilometers).

The input ends with end-of-file (EOF).

Output : 
For each test case, print a list of integers indicating the days in which the record was beaten. 
Each day must be printed in a single line. Print them in ascending order. Please notice that day 1 
must always be printed.

Input Sample : 
3
1 1
2 1
2 3
2
2 16
4 20

Output Sample : 
1
3
1
*/
?>