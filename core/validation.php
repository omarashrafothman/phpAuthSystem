<?php


function requiredVal($input)
{
    if (empty($input)) {
        return false;
    } else {
        return true;
    }
}

function validateInput($input, $pattern)
{


    // If input is not empty, check against the regex pattern
    if (preg_match($pattern, $input)) {

        return true;  // Input is valid
    } else {

        return false; // Input is invalid
    }
}



?>