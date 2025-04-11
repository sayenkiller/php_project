<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'DB.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM jewelry WHERE id = $id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $cardType = $_POST['card_type'];

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $target = 'uploads/' . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);

        // Update with new image
        $stmt = $conn->prepare("UPDATE jewelry SET title=?, description=?, image=?, card_type=? WHERE id=?");
        $stmt->bind_param("ssssi", $title, $desc, $image, $cardType, $id);
    } else {
        // Update without changing the image
        $stmt = $conn->prepare("UPDATE jewelry SET title=?, description=?, card_type=? WHERE id=?");
        $stmt->bind_param("sssi", $title, $desc, $cardType, $id);
    }

    $stmt->execute();
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="icon" href="icons8-jewelry-100.png" type="image/svg+xml">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="edit-form-container">
        <div class="edit-form-card">
            <h2 class="edit-title">Edit Post ID: <?= $id ?></h2>
            <form method="POST" enctype="multipart/form-data" class="edit-form">
                <div class="input-group">
                    <label for="title" class="form-label">Price</label>
                    <input type="text" name="title" id="title" value="<?= htmlspecialchars($data['title']) ?>"
                        class="form-input" required>
                </div>

                <div class="input-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-input" required
                        oninput="limitLines(this, 2)"><?= htmlspecialchars($data['description']) ?></textarea>

                    <script>
                    const descriptionField = document.getElementById('description');

                    descriptionField.addEventListener('keydown', function(e) {
                        const lines = this.value.split('\n');

                        // If Enter is pressed and we already have 2 lines, block it
                        if (e.key === 'Enter' && lines.length >= 2) {
                            e.preventDefault();
                        }
                    });

                    descriptionField.addEventListener('input', function(e) {
                        const lines = this.value.split('\n');

                        if (lines.length > 2) {
                            this.value = lines.slice(0, 2).join('\n');
                        }
                    });
                    </script>
                </div>

                <div class="input-group">
                    <label class="form-label">Current Image</label><br>
                    <img src="uploads/<?= htmlspecialchars($data['image']) ?>" width="150" alt="Current Jewelry Image">
                </div>

                <div class="input-group">
                    <label for="image" class="form-label">Upload New Image (optional)</label>
                    <input type="file" name="image" id="image" class="form-input">
                </div>

                <div class="input-group">
                    <label for="card_type" class="form-label">Card Style</label>
                    <select name="card_type" id="card_type" class="form-input">
                        <option value="card" <?= $data['card_type'] === 'card' ? 'selected' : '' ?>>Normal</option>
                        <option value="card2" <?= $data['card_type'] === 'card2' ? 'selected' : '' ?>>Wide</option>
                    </select>
                </div>

                <div class="form-buttons">
                    <button type="submit" class="submit-btn">Update</button>
                    <a href="admin.php" class="cancel-btn">Cancel</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>