<?php
header('Content-Type: application/json');

// Load the JSON file
$data = file_get_contents('data.json');

// Decode the JSON data into an array
$records = json_decode($data, true);

// Return all records
echo json_encode($records);
?>
