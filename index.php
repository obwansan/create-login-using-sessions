<?php

session_start();

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

<!-- How does the HTML work without the HTML and body tags etc? -->
