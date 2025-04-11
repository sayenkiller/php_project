<?php
include 'DB.php';

$q = trim($_GET['q'] ?? '');
$response = [];

if ($q !== '') {
    $stmt = $conn->prepare("SELECT id, title, description, image FROM jewelry WHERE title LIKE ? OR description LIKE ? ORDER BY id DESC");
    $like = '%' . $q . '%';
    $stmt->bind_param('ss', $like, $like);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $response[] = [
            'id' => $row['id'],
            'title' => $row['title'],
            'description' => $row['description'],
            'image' => $row['image']
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($response);