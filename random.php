<?php


$gamecount = 0;
$gameslost = 0;
$points = 0;

while (true) {
    $roundcount = 0;
    $gamespoints = 10;
    
    $rand = rand(1, 100);
    echo($rand . "\n");
    while ($roundcount < 2) {
        $inter = readline("MINI CIPARU NO 1-100 --> ");
        if ($inter == $rand) {
            echo("you guessed it right". $rand . "\n" );
            $gamecount = $gamecount + 1;
            break;
        } elseif ($inter > $rand) {
            echo("you guessed a bit to large\n" );
            $roundcount = $roundcount + 1;
            $gamespoints = $gamespoints - 1;
        } elseif ($inter < $rand) {
            echo("you guessed a bit to small\n" );
            $roundcount = $roundcount + 1;
            $gamespoints = $gamespoints - 1;
        } else {
                echo("round lost \n");
                $gameslost = $gameslost + 1;
                $gamecount = $gamecount + 1;
                break;
            }
        }

    $pointsObtained = $pointsObtained + $gamespoints - $gameslost; 
    $ask = readline("vai vēlis doties?");

    switch ($ask) {
        case 'ja':
            $pointsObtained
            echo("you won". $points . "this time\n");
            exit;
        case 'ne';
            break;
        
        default:
            echo("i guess you dont want to go  :)   \n");
            break;
    }

}

