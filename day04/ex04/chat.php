<?php

session_start();

if ($_SESSION['loggued_on_user']) {
    if (file_exists('../private') && file_exists('../private/chat')) {
        $chats = unserialize(file_get_contents('../private/chat'));
        foreach ($chats as $val) {
            echo "[" . date('H:i', $val['time']) . "] <b>" . $val['login'] . "</b>: " . $val['msg'] . "<br /><br />";
        }
    }
}
else
    echo "ERROR\n";

?>