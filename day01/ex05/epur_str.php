#!/usr/bin/php
<?php

if ($argc != 2)
    exit;

$text = trim(preg_replace('|\s+|', ' ', $argv[1]));
echo "$text\n";

?>