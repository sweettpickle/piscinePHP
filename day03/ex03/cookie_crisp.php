<?php

$action = $_GET['action'];

if ($action == 'set' && $_GET['name'] && $_GET['value'])
    setcookie($_GET['name'], $_GET['value'], time() + 3600);
elseif ($action == 'get' && $_GET['name'] && $_COOKIE[$_GET['name']])
    echo $_COOKIE[$_GET['name']].'<br>';
elseif ($action == 'del' && $_GET['name'])
    setcookie($_GET['name'], '', time() - 3600);

?>

