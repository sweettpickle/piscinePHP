<?php

$login = 'zaz';
$password = 'jaimelespetitsponeys';

//print_r($_SERVER);
if ($_SERVER['PHP_AUTH_USER'] === $login && $_SERVER['PHP_AUTH_PW'] === $password){
    echo "<front><body>Hello {$_SERVER['PHP_AUTH_USER']}<br />";
    echo "<img src='data:image/png;base64, ";
//    echo base64_encode(file_get_contents('/img/42.png')) . "'>";
    echo base64_encode(file_get_contents("../img/42.png")) . "'>";
    echo "</body></front>";
}
else {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<front><body>That area is accessible for members only</body></front>";
    exit;
}

?>



