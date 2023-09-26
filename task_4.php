<?php

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for each student
        $average = array_sum($grades) / count($grades);

        // Print the average grade for the current student
        echo "Average grade for $student: $average" . PHP_EOL;
    }
}

// Create a multidimensional array to store student grades
$studentGrades = array(
    'Student 1' => array(
        'Math' => 85,
        'English' => 92,
        'Science' => 78
    ),
    'Student 2' => array(
        'Math' => 88,
        'English' => 95,
        'Science' => 90
    ),
    'Student 3' => array(
        'Math' => 75,
        'English' => 87,
        'Science' => 90
    ),
);

// Call the function to calculate and print average grades
calculateAverageGrades($studentGrades);

?>