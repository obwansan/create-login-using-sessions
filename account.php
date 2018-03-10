<?php

session_start();
var_dump($_SESSION);

$username = $_POST['username'];
var_dump($username);

$password = $_POST['password'];
var_dump($password);

$correctUsername = 'obwansan';
$correctPassword = 'turnip204';

$usernameLength = strlen($username);
var_dump($usernameLength);

$passwordLength = strlen($password);
var_dump($passwordLength);

/*
function validateInput($username,  $password ) {

    $errorMessage = '';

    if ($username != 'obwansan' ) {
        $errorMessage = '<p>Invalid username</p>';
    }
    if ($password != 'turnip204' ) {
        $errorMessage .= '<p>Invalid password</p>';
    }
    if ($errorMessage == '') {
        return 'Your input is valid';
    } else {
        return $errorMessage;
    }
}
*/

function checkCredentials($username, $correctUsername, $password, $correctPassword) {

    if ($username == $correctUsername && $password == $correctPassword) {
        $_SESSION['loggedIn'] = true;
//        header('Location: account.php');
        return 'Logged in';
    } else {
        $_SESSION['loggedIn'] = false;
//        header('Location: index.php');
        return 'Not logged in';
    }
}

//echo validateInput($username, $password);
echo checkCredentials($username, $correctUsername, $password, $correctPassword);

/*
 * || !is_string($username) || $usernameLength < 5 || $usernameLength > 30
 * || !is_string($password) || $passwordLength < 5 || $passwordLength > 30
 *
 * */


