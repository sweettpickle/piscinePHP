#!/usr/bin/php
<?php

function ft_is_sort($tab){
    $arr = $tab;
    sort($tab);

    if ($arr == $tab)
        return true;
    else
        return false;
}

//$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
//$tab[] = "What are we doing now ?";
//if (ft_is_sort($tab))
//    echo "The array is sorted\n";
//else
//    echo "The array is not sorted\n";

?>