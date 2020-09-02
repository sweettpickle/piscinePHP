#!/usr/bin/php
<?php

date_default_timezone_set("Europe/Paris");

if ($argc != 2)
    exit();

$month = array(
    "janvier" => "1",
    "février" => "2",
    "mars" => "3",
    "avril" => "4",
    "mai" => "5",
    "juin" => "6",
    "juillet" => "7",
    "août" => "8",
    "septembre" => "9",
    "octobre" => "10",
    "novembre" => "11",
    "décembre" => "12",
);

$day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");

$input = explode(" ", strtolower($argv[1]));

if(count($input) != 5 || !array_key_exists($input[2], $month) || !in_array($input[0], $day)){
    print("Wrong Format\n");
    exit();
}
elseif ($date = strtotime($input[1] .".". $month[$input[2]] . "." . $input[3] . " " . $input[4]) == false){
    print("Wrong Format\n");
    exit();
}
else
    print(strtotime($input[1] .".". $month[$input[2]] . "." . $input[3] . " " . $input[4]));

?>

