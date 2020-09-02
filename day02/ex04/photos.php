#!/usr/bin/php
<?php

function get_img_url($url, $img){
    if (!filter_var($img, FILTER_VALIDATE_URL))
        $img = $url . $img;
    if (($img = file_get_contents($img)))
        return $img;
    else
        return false;
}

if ($argc == 2){
    $content = file_get_contents($argv[1]);

    if (preg_match_all('/<img.*?src="(.*?)"/', $content, $matches, PREG_SET_ORDER)){
        $dir = explode("//", $argv[1])[1];
        if (!file_exists($dir))
            exec("mkdir $dir");

        foreach ($matches as $key => $value){
            $file_name = explode("/", $value[1]);
            $file_name = $file_name[count($file_name) - 1];
            if (($img = get_img_url($argv[1], $value[1])))
                    file_put_contents("./$dir/$file_name", $img);
        }
    }
}
else
    exit();

?>