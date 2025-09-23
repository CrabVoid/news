<?php

$rand = rand(1, 100);
echo($rand); #to see if you can actualy win


while (true) {
    $inter = readline("MINI CIPARU NO 1-100 --> ");
    if ($inter == $rand) {
        echo("you guessed it right". $rand . "\n" ); 
    } else {
        echo("try again \n");
    }
}
