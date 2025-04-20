<?php
use Loader\Core\Validator;

require_once(dirname(__DIR__) . '/Core/functions.php');
findFile('Validator.php', 'Core');

// get username and password from user

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $errors = [];

// make sure the submitted data is valid
    $authorize = new Validator();

    if (!$authorize->email($email)) {
        $errors['email'] = "Sorry, that email is invalid.";
    }

    if (!$authorize->password($password)) {
        $errors['password'] = "Password must be between 8 and 20 characters.";
    }

    if (!$authorize->confirmedPassword($confirmPassword, $password)) {
        $errors['confirmPassword'] = "Passwords do not match.";
    }

    session_start();
    $_SESSION['errors'] = $errors;
    header("Location: /dashboard");
    exit();

}

// prepare a statement to post the data to the database. Send info

// Once data has been sent, redirect to login page with message "You have registered, please log in"

// Stop POST requests when doing a refresh.