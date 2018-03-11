<?php

session_start();

if ($_SESSION['loggedIn']) {
    header('Location: account.php');
    exit;  // terminate the current script
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

<!-- How do index.php and account.php interact if you're not rediected
to account.php until you've logged in? Form data is sent to account.php by action="".
 Must be in same directory?-->
