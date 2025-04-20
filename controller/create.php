<?php

use Loader\Core\Validator;

require_once(dirname(__DIR__) . '/Core/functions.php');
findFile('Validator.php', 'Core');
$errors = [];
// get username and password from user
$email = $_POST['email'];
$password = $_POST['password'];
$confirmedPassword = $_POST['repassword'];

// make sure the submitted data is valid
$authorize = new Validator();
$emailValid = $authorize->email($email);
$passwordValid = $authorize->password($password);
$confirmedPasswordValid = $authorize->repassword($confirmedPassword, $password);

errorHandler($errors);
// prepare a statement to post the data to the database. Send info

// Once data has been sent, redirect to login page with message "You have registered, please log in"

// Stop POST requests when doing a refresh.