#!/usr/bin/php
<?php

if ($argc == 1)
    exit;

$i = 0;
while (++$i < count($argv)) {
    echo "$argv[$i]\n";
}

?>