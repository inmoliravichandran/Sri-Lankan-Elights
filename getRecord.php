<?php
header('Content-Type: application/json');

// Get the ID from the GET request
$id = $_GET['id'];

// Load the JSON file
$data = file_get_contents('data.json');

// Decode the JSON data into an array
$records = json_decode($data, true);

// Find the record with the specified ID
$record = null;
foreach ($records as $rec) {
    if ($rec['id'] == $id) {
        $record = $rec;
        break;
    }
}

// Return the record if found
if ($record) {
    echo json_encode($record);
} else {
    echo json_encode(['message' => 'Record not found']);
}
?>
