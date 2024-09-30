<?php


// first function to check request method is an post or not
function checkRequestMethod($method)
{
    if ($method === "POST") {
        return true;
    } else {

        return false;

    }

}








// function to sanitize inputs
function sanitizeInputs($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}


function checkIsSet($input)
{
    global $errors;


    if (!isset($_POST[$input]) || empty($_POST[$input])) {
        $errors[$input] = "$input field is requierd!";
    }
}
