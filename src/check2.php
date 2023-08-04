<?php

// Define a string with the full name
$name = "John Smith";

// Split the full name into first and last name parts
$name_parts = explode(" ", $name);

// Assign the first name
$first_name = $name_parts[0];

// Assign the last name
$last_name = $name_parts[1];

// Output the first and last name
echo "First name: " . $first_name . "\n";
echo "Last name: " . $last_name . "\n";

// Output: 
// First name: John
// Last name: Smith

?>
