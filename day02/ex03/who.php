#!/usr/bin/php
<?php

date_default_timezone_set('Africa/Johannesburg');
if (!file_exists('/var/run/utmp'))
    exit();

$file = file_get_contents('/var/run/utmp');
//$file = unpack("a256user/a4id/a32line/ipid/itype/itime", $file);
$file = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $file);
ksort($file);


print_r($file);

//date_default_timezone_set('Europe/Paris');
//$file = fopen("/var/run/utmp", "r");
//while ($utmpx = fread($file, 628)){
//    $unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
//    $array[$unpack['c']] = $unpack;
//}
//ksort($array);
//foreach ($array as $v){
//    if ($v['e'] == 7) {
//        echo str_pad(substr(trim($v['a']), 0, 8), 8, " ")." ";
//        echo str_pad(substr(trim($v['c']), 0, 8), 8, " ")." ";
//        echo date("M", $v["f1"]);
//        echo str_pad(date("j", $v["f1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $v["f1"]);
//        echo "\n";
//    }
//}

?>