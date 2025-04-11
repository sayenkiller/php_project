<?php
header('Content-Type: application/json');
include 'DB.php';

$result = $conn->query("SELECT * FROM jewelry ORDER BY id DESC");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>