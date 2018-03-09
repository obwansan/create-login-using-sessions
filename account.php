<?php

session_start();
var_dump($_SESSION);

$username = $_POST['username'];
var_dump($_POST['username']);

$password = $_POST['password'];
var_dump($_POST['password']);

$correctUsername = 'obwansan';
$correctPassword = 'turnip204';

$usernameLength = strlen($username);
var_dump($usernameLength);

$passwordLength = strlen($password);
var_dump($passwordLength);


function validateInput($username, $usernameLength, $password, $passwordLength) {

    $errorMessage = '';

    if ($username != 'obwansan' || !is_string($username) || $usernameLength < 5 || $usernameLength > 30) {
        $errorMessage = 'Invalid username' . '<br>';
    }
    if ($password != 'password' || !is_string($password) || $passwordLength < 5 || $passwordLength > 30) {
        $errorMessage .= 'Invalid password' . '<br>';
    }
    if ($errorMessage == '') {
        return 'Your input is valid';
    } else {
        return $errorMessage;
    }
}

function checkCredentials($username, $correctUsername, $password, $correctPassword) {

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedIn'] = true;
        header('Location: account.php');
        return 'Logged in';
    } else {
        $_SESSION['loggedIn'] = false;
        var_dump($username);
        var_dump($correctUsername);
//        var_dump($password);
//        var_dump($correctPassword);
//        header('Location: index.php');
        return "Not logged in";
    }
}

echo validateInput($username, $password);
echo checkCredentials($username, $correctUsername, $password, $correctPassword);




