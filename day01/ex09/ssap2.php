#!/usr/bin/php
<?php

if ($argc == 1)
    exit;

print_r($argv);
$rez = array();

for ($i = 1; $i < $argc; $i++){
    $text = array_filter(explode(" ", $argv[$i]));
    $rez = array_merge($rez, $text);
}

$alpha = [];
$numeric = [];
$symbol = [];

for ($i = 0; $i < count($rez); $i++){
    if (ctype_alpha($rez[$i][0]))
        array_push($alpha, $rez[$i]);
    elseif (is_numeric($rez[$i]))
        array_push($numeric, $rez[$i]);
    else
        array_push($symbol, $rez[$i]);
}

//echo "alpha";
//print_r($alpha);
natcasesort($alpha);
//print_r($alpha);

//echo "numeric";
//print_r($numeric);
rsort($numeric);
//print_r($numeric);

//echo "symbol";
//print_r($symbol);
sort($symbol);
//print_r($symbol);

$rez = array_merge($alpha, $numeric, $symbol);

//print_r($rez);
for ($i = 0; $i < count($rez); $i++)
    echo "$rez[$i]\n";

?>