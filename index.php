<?php

session_start();
var_dump($_SESSION);

if ($_SESSION['loggedIn']) {
    header('Location: account.php');
    exit;
}

?>

<form method="post" action="account.php">
    <label>Username:
        <input type="text" name="username">
    </label>
    <label>Password:
        <input type="text" name="password">
    </label>
    <input type="submit">
</form>

