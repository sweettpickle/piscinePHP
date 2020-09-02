<?php

function have_login($accounts, $login){
    foreach ($accounts as $key => $value){
        if (($value['login']) == $login)
            return true;
    }
    return false;
}

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK") {
    if (!file_exists("../private"))
        exec("mkdir ../private");

    if (!file_exists("../private/passwd"))
        exec(file_put_contents("../private/passwd", null));
    $accounts = unserialize(file_get_contents("../private/passwd"));

    if (!have_login($accounts, $_POST['login'])){
        $accounts[] = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd'])];
        file_put_contents('../private/passwd', serialize($accounts));
        echo "OK\n";
    }
    else
        echo "ERROR\n";

//    print_r($accounts);
}
else
    echo "ERROR\n";

?>
