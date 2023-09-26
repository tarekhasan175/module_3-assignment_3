<?php

function removeEvenNumbers($numbers) {
    $result = array();
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            // If the number is not even, add it to the result array
            $result[] = $number;
        }
    }
    return $result;
}

// Create an array containing the numbers 1 to 10
$numbers = range(1, 10);

// Call the function to remove even numbers
$filteredNumbers = removeEvenNumbers($numbers);

// Print the resulting array
print_r($filteredNumbers);

?>
