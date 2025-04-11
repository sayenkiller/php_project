<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'DB.php';

$title = $_POST['title'];
$description = $_POST['description'];
$card_type = $_POST['card_type'] ?? 'card'; // default to 'card'

$imageName = $_FILES['image']['name'];
$imageTmp = $_FILES['image']['tmp_name'];
$imageFolder = 'uploads/' . $imageName;

if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

if (move_uploaded_file($imageTmp, $imageFolder)) {
    $stmt = $conn->prepare("INSERT INTO jewelry (title, description, image, card_type, created_at) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $title, $description, $imageName, $card_type);
    
    if ($stmt->execute()) {
        echo "Jewelry uploaded successfully!";
        header("Location: admin.php");
    } else {
        echo "Database error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Failed to upload image.";
}

$conn->close();
?>