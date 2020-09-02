<?php

function valid_data($login, $passwd){
    global $accounts;
    foreach ($accounts as $key => $value){
        if (($value['login']) == $login && $value['passwd'] == $passwd){
            unset($accounts[$key]);
            return true;
        }
    }
    return false;
}

if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] == 'OK') {
    $accounts = unserialize(file_get_contents("../private/passwd"));

    if (valid_data($_POST['login'], hash('whirlpool', $_POST['oldpw']))){
        $accounts[] = ['login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['newpw'])];
        file_put_contents('../private/passwd', serialize($accounts));
        header('Location: modif.front');
        echo "OK\n";
    }
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";

?>
