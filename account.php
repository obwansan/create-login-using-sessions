<?php

$errorMessage = '';
$successMessage = 'You are logged in'
$usernameLength = strlen($_POST['username']);
$passwordLength = strlen($_POST['password']);

if ( !is_string($_POST['username'])) {
    $errorMessage += 'Invalid username: you are not logged in';
    $errorMessage += '<br>';
}
if ( !is_string($_POST['password'])) {
    $errorMessage += 'Invalid password: you are not logged in';
    $errorMessage += '<br>';
}
if ($usernameLength < 5 || $usernameLength > 30) {
    $errorMessage += 'Invalid username: you are not logged in';
    $errorMessage += '<br>';
}

if ($passwordLength < 5 || $passwordLength > 30) {
    $errorMessage += 'Invalid password: you are not logged in';
    $errorMessage += '<br>';
}

if (empty($errorMessage)) {
    echo $successMessage;
} else {
    echo $errorMessage;
}



