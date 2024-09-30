<?php
session_start();
include("../core/functions.php");
include("../core/validation.php");
include("../locals/regxPattern.php");


$errors = [];


// first step to check method type

if (checkRequestMethod($_SERVER["REQUEST_METHOD"])) {

    // loop on _POST array and get inputs value
    foreach ($_POST as $key => $value) {
        $$key = sanitizeInputs($value);
        // filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    }

    // check input is empty
    checkIsSet("name");
    checkIsSet("email");
    checkIsSet("password");
    checkIsSet("confirm");
    checkIsSet("position");

    // Validation for email
    if (!validateInput($email, $emailPattern)) {
        $errors['email'] = "Invalid email format.";
    }

    // Validation for password
    if (!validateInput($password, $passwordPattern)) {
        $errors['password'] = "Invalid password format.";
    }

    // redirect when !empty errors

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        header("location:../register.php");
        die;
    } else {
        $users_file = fopen("../data/user.csv", "a+");
        $data = [$name, $email, sha1($password), $gender, $position];
        fputcsv($users_file, $data);
        $_SESSION["auth"] = [$name, $email, $gender, $position];
        header("location:../index.php");
        die;
    }



} else {
    echo "UNSUPPORTED METHOD";
}






?>