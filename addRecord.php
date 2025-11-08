<?php
header('Content-Type: application/json');

// Get the POST data
$newRecord = json_decode(file_get_contents('php://input'), true);

// Load the existing data from the JSON file
$data = file_get_contents('data.json');
$records = json_decode($data, true);

// Add the new record
$records[] = $newRecord;

// Save the updated records back to the JSON file
file_put_contents('data.json', json_encode($records, JSON_PRETTY_PRINT));

// Return a success message
echo json_encode(['message' => 'Record added successfully']);
?>
