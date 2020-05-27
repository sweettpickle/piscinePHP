#!/usr/bin/php
<?php

if ($argc != 2)
{
    echo "Incorect Parametrs\n";
    exit;
}

$arr = array();
if (stripos($argv[1], "+"))
{
    $arr = explode("+", $argv[1]);
    $s = "+";
}
elseif (stripos($argv[1], "-"))
{
    $arr = explode("-", $argv[1]);
    $s = "-";
}
elseif (stripos($argv[1], "*"))
{
    $arr = explode("*", $argv[1]);
    $s = "*";
}
elseif (stripos($argv[1], "/"))
{
    $arr = explode("/", $argv[1]);
    $s = "/";
}
elseif (stripos($argv[1], "%"))
{
    $arr = explode("%", $argv[1]);
    $s = "%";
}

$arr[0] = trim($arr[0]);
$arr[1] = trim($arr[0]);

if (is_numeric($arr[0]) && is_numeric($arr[1]))
    resolve();
else{
    echo "Syntax Error\n";
    exit;
}

function resolve(){
    global $arr, $s;

    if ($s== '+')
        echo $arr[0]+ $arr[1]."\n";
    elseif ($s== '-')
        echo $arr[0]- $arr[1]."\n";
    elseif ($s== '*')
        echo $arr[0]* $arr[1]."\n";
    elseif ($s== '/')
        echo $arr[0] / $arr[1]."\n";
    elseif ($s== '%')
        echo $arr[0]% $arr[1]."\n";
}

//echo $arr[0]."\n";
//echo $arr[1]."\n";

?>