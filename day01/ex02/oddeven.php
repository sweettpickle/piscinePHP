#!/usr/bin/php
<?php

while (true){
//    $var=readline("Enter a number: ");
    echo "Enter a number: ";
    $var= trim(fgets(STDIN));

    if (feof(STDIN))
    {
        echo "\n";
        exit();
    }

    if(is_numeric($var)){
        if ($var % 2 == 0)
            echo "The number $var is even\n";
        else
            echo "The number $var is odd\n";
    }
    else
        echo "'$var' is not a number\n";
}

?>