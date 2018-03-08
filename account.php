<?php

$errorMessage = '';

if ( !is_string($_POST['username'])) {
    $errorMessage += 'Invalid username: you are not logged in';
    $errorMessage += '<br>';
}
if ( !is_string($_POST['password'])) {
    $errorMessage += 'Invalid password: you are not logged in';
    $errorMessage += '<br>';
}


$usernameLength = strlen($_POST['username']);
$passwordLength = strlen($_POST['password']);

if ($usernameLength < 5 || $usernameLength > 30) {

}
