#!/usr/bin/php
<?php

if ($argc == 1)
    exit;

$rez = array();

for ($i = 1; $i < $argc; $i++){
    $text = array_filter(explode(" ", $argv[$i]));
    $rez = array_merge($rez, $text);
}

sort($rez);
//print_r($rez);

for ($i = 0; $i < count($rez); $i++)
    echo "$rez[$i]\n";

?>