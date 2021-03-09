<?php

$heads = 0;
$tails = 0;

for($i = 1; $i<=100; $i++) {
    $coinToss = rand(1,2);
    if($coinToss == 1) {
        echo 'Heads! I WIN!!<br>';
        $heads++;
    } else {
        echo 'Tails! You Lose!<br>';
        $tails++;
    }
}

echo 'Heads = ' . $heads . '; and Tails = ' . $tails;