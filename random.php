<?php


$gamecount = 0;
$gameslost = 0;
$points = 0;
$pointsObtained = 0;

while (true) {
    $gamespoints = 10;
    
    $rand = rand(1, 100);
    echo($rand . "\n");
    while (true) {
        $inter = readline("MINI CIPARU NO 1-100 --> ");
        if ($inter == $rand) {
            echo("you guessed it right". "" . $rand . "\n" );
            $gamecount = $gamecount + 1;
            break;
        } elseif ($inter > $rand) {
            echo("you guessed a bit to large\n" );
            $gamespoints = $gamespoints - 1;
        } elseif ($inter < $rand) {
            echo("you guessed a bit to small\n" );
            $gamespoints = $gamespoints - 1;
        } 
        
        if ($gamespoints == 0) {
            echo("round lost \n");
            $gameslost = $gameslost + 1;
            $gamecount = $gamecount + 1;
            break;
            }
        }
            
    $pointsObtained = $pointsObtained + ($gamespoints * 10); 
    $ask = readline("vai vēlis doties? --> ");

    switch ($ask) {
        case 'ja':
            echo("you won ". $pointsObtained . " point/s this time\n");
            echo("you lost ". $gameslost . " this time\n");
            exit;
        case 'ne';
            break;
        
        default:
            echo("i guess you dont want to go  :)   \n");
            break;
    }

}

