<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$correctUsername = 'obwansan';
$correctPassword = 'turnip204';
$usernameLength = strlen($username);
$passwordLength = strlen($password);

function validateInput($username,  $password ) {

    $errorMessage = '';

    if ($username != 'obwansan')
        $errorMessage = '<p>Invalid username</p>';

    if ($password != 'turnip204')
        $errorMessage .= '<p>Invalid password</p>';

    if ($errorMessage != '')
        return $errorMessage;
}

function checkCredentials($username, $correctUsername, $password, $correctPassword) {

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedIn'] = true;
        return 'Logged in';
    } else {
        $_SESSION['loggedIn'] = false;
//        header('Location: index.php');  // message not echoed if relocated to index.php
        return 'Not logged in';
    }
}

echo validateInput($username, $password);
echo checkCredentials($username, $correctUsername, $password, $correctPassword);



