<?php

$rand = rand(1, 100);

$gamecount = 0;
$gameswon = 0;
$gameslost = 0;

while ($gamecount < 10) {
    $roundcount = 0;
    while ($roundcount < 10) {
    $inter = readline("MINI CIPARU NO 1-100 --> ");
    if ($inter == $rand) {
        echo("you guessed it right". $rand . "\n" );
        $gameswon = $gameswon + 1;
        $gamescount = $gamescount + 1; 
    } else {
        if ($roundcount == 4) {
            echo("round lost \n");
            $gameslost = $gameslost + 1;
            $gamecount = $gamecount + 1;
            break;
        } else {
            echo("try again \n");
            $roundcount = $roundcount + 1;
        }
    }
    $ask = readline("vai vēlis doties?");
    if ($ask == "ja") {
        echo ($gameswon . "" . "<--- uzvarēji tik spēles\n");
        echo ($gameslost . "" . "<--- zaudēji tik spēles\n");
        break;
    }
    
    
}
}
