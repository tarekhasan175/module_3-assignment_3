<?php

function sortGradesDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);
    
    // Print the sorted grades as an array
    print_r($grades);
}

// Create an array with the grade values
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort the grade values in descending order
sortGradesDescending($grades);

?>
