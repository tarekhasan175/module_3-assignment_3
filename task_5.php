<?php

function generatePassword($length)
{
    // Define character sets for each category
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $specialChars = "!@#$%^&*()_+";

    // Combine all character sets
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomCharacter = $allChars[rand(0, strlen($allChars) - 1)];

        // Append the random character to the password
        $password .= $randomCharacter;
    }

    return $password;
}

// Generate a 12-character password
$password = generatePassword(12);

// Print the generated password
echo $password;

?>