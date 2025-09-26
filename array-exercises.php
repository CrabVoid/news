<?php

#$fruit = ["apple", "pineapple", "pear", "melon", "orange"];

#echo($fruit[2]);

#$country =["LV" => "Rīga", "D" => "Berlin", "EST" => "Tallin", "P" => "Lisbon", "F" => "Paris", "JP" => "Tokyo"];
#echo $country["JP"];

$cataloge = array (
    array(212, "iRobots" , 3.20 , "Xiomi"),
    array(321, "tējkanna" , 55.20 , "Bosch"),
    array(303, "Dators" , 320 , "Dell"),
);

echo $cataloge[1][1];
echo("\n");
echo $cataloge[2][2]. ' ' .$cataloge[2][0];
echo("\n");
echo $cataloge[0][3];