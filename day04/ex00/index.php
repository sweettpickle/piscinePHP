<?php

session_start();

//print_r($_COOKIE);
//print_r("<br>");
//print_r($_GET);
//print_r($_SESSION);

if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] === "OK"){
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<h2>Registration</h2>
<form action="index.php" method="get">
    <p>
        <label>Username:<br></label>
        <input name="login" type="text" size="15" maxlength="15" value="<?php echo $_SESSION['login']; ?>">
    </p>

    <p>
        <label>Password:<br></label>
        <input name="passwd" type="password" size="15" maxlength="15" value="<?php echo $_SESSION['passwd']; ?>">
    </p>

    <p>
        <input type="submit" name="submit" value="OK">
    </p>
</form>

</body>
</html>
