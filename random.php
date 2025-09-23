<?php


$gamecount = 0;
$gameswon = 0;
$gameslost = 0;

while (true) {
    $roundcount = 0;
    $rand = rand(1, 100);
    echo($rand . "\n");
    while ($roundcount < 10) {
        $inter = readline("MINI CIPARU NO 1-100 --> ");
        if ($inter == $rand) {
            echo("you guessed it right". $rand . "\n" );
            $gameswon = $gameswon + 1;
            $gamecount = $gamecount + 1;
            break;
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
        }}
    $ask = readline("vai vēlis doties?");

    switch ($ask) {
        case 'ja':
            echo ($gameswon . "" . "<--- uzvarēji tik spēles\n");
            echo ($gameslost . "" . "<--- zaudēji tik spēles\n");
            exit;
        case 'ne';
            break;
        
        default:
            echo("what?");
    }

}

