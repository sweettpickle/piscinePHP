#!/usr/bin/php
<?php

if ($argc != 4)
    exit;
$a = trim($argv[1]);
$s = trim($argv[2]);
$b = trim($argv[3]);

if ($s== '+')
    echo $a+ $b."\n";
elseif ($s== '-')
    echo $a- $b."\n";
elseif ($s== '*')
    echo $a* $b."\n";
elseif ($s== '/')
    echo $a/ $b."\n";
elseif ($s== '%')
    echo $a% $b."\n";

?>