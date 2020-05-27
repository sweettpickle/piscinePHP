#!/usr/bin/php
<?php

if ($argc <= 2)
    exit();

$key = $argv[1];

for ($i = $argc - 1; $i > 1; $i--){
    $arr = explode(":", $argv[$i]);
    if ($arr[0] == $key){
        echo $arr[1]."\n";
        exit();
    }
}

?>