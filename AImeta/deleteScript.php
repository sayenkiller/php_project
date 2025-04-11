<?php
session_start();
require 'DB.php'; // Your database connection

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo json_encode(['success' => false, 'message' => 'Unauthorized access']);
    exit;
}

// Get the ID from the request
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
    // Prepare the query to delete the jewelry item by ID
    $stmt = $conn->prepare("DELETE FROM jewelry WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error deleting item']);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid item ID']);
}

$conn->close();
?>