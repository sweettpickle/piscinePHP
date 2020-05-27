#!/usr/bin/php
<?php

if ($argc == 1)
    exit;

$arr = array_values(array_filter(explode(" ", $argv[1])));

$arr[count($arr)] = $arr[0];
unset($arr[0]);

$arr = implode(" ", $arr);
echo "$arr\n";

?>