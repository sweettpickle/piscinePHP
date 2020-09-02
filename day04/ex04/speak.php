<?php

session_start();

if ($_SESSION['loggued_on_user']){
    ?>
    <script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
    <form action="speak.php" method="post">
        <input type="text" name="msg" size="40" value=""/>
        <input type="submit" name="send" value="send"/>
    </form>
    <?php
    if ($_POST['msg'] && $_POST['send'] == "send"){
        if (!file_exists("../private"))
            exec("mkdir ../private");

        if (!file_exists("../private/chat"))
            exec(file_put_contents("../private/chat", null));

        $chats = unserialize(file_get_contents("../private/chat"));
        $chats[] = ['login' => $_SESSION['loggued_on_user'], 'time'=> time(), 'msg' => $_POST['msg']];

        $fp = fopen('../private/chat', "w");
        if (flock($fp, LOCK_EX)){
            flock($fp, LOCK_UN);
            fwrite($fp, serialize($chats));
        }
        fclose($fp);
    }
}
else
    echo "ERROR\n";

?>