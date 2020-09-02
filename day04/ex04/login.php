<?php
include "auth.php";

session_start();


if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd'])){
    $_SESSION['loggued_on_user'] = $_POST['login'];
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>42сhat</title>
    </head>
    <body>
    <a href="logout.php"><input name="logout" type="submit" value="Logout" style="float: right"></a>
    <header><h1>42chat</h1></header>
        <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
        <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
    </body>
    </html>
    <?php
}
else {
    $_SESSION['loggued_on_user'] = "";
    header('Location: index.front');
    echo "ERROR\n";
}

?>
