<?php

session_start();
var_dump($_SESSION);

$username = $_POST['username'];
$password = $_POST['password'];
$correctUsername = 'username';
$correctPassword = 'password';
$errorMessage = '';
$usernameLength = strlen($_POST['username']);
$passwordLength = strlen($_POST['password']);

function validateInput($username, $password) {

    if ($username != 'username' || !is_string($username) || $usernameLength < 5 || $usernameLength > 30) {
        $errorMessage += 'Invalid username' . '<br>';
    }
    if ($password != 'password' || !is_string($password) || $passwordLength < 5 || $passwordLength > 30) {
        $errorMessage += 'Invalid password' . '<br>';
    }
    if ($errorMessage == '') {
        return 'Your input is valid';
    } else {
        return $errorMessage;
    }
}

function checkCredentials($username, $correctUsername, $password, $correctPassword) {
    if ($username == $correctUsername && $password == $correctPassword || $_SESSION['loggedIn'] = true) {
        $_SESSION['loggedIn'] = true;
        return 'Logged in';
    } else {
        $_SESSION['loggedIn'] = false;
        header('Location: index.php');
        return "Not logged in";
    }
}

echo validateInput($username, $password);
echo checkCredentials($username, $correctUsername, $password, $correctPassword);




