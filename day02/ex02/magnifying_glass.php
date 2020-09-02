#!/usr/bin/php
<?php

//echo $argc;

if ($argc != 2 || !file_exists($argv[1]))
    exit();

$content = file_get_contents($argv[1]);
//print($content."\n");

$content = preg_replace_callback(
//        '/<a.*?title="(.*?)">/',
        '/<a.*?title="(.*?)">/',
        function ($matches) {
//            print_r($matches);
//            print_r("1\n");
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
    },
        $content);

//print($content."\n");

$content = preg_replace_callback(
        '/<a.*?>(.*?)</',
        function ($matches) {
//            print_r($matches);
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
            },
        $content);

echo $content;

?>