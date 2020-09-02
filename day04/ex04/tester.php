#!/usr/bin/php

<?php

//exec("curl -d login=titi -d passwd=titi -d submit=OK 'http://localhost:8000/create.php'");

$accounts = unserialize(file_get_contents("../private/passwd"));
print_r($accounts);

?>