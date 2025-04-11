<?php
session_start();
require 'DB.php';
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Check if the welcome popup has been shown before
if (!isset($_SESSION['welcome_popup_shown'])) {
    $_SESSION['welcome_popup_shown'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Luna Jeweler</title>
    <link rel="icon" href="icons8-jewelry-100.png" type="image/svg+xml">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        background-color: #F5EAE4;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    header {
        background-color: #E63946;
        color: white;
        padding: 20px 40px;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Welcome Popup Style */
    .welcome-popup {
        position: fixed;
        top: 90px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #FF6B6B;
        color: white;
        padding: 15px 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    /* Animation for showing the popup */
    .show-popup {
        display: block;
        opacity: 1;
    }

    /* Delete Confirmation Modal Style */
    .delete-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #FF6B6B;
        color: white;
        padding: 30px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    /* Modal content */
    .delete-modal .modal-content {
        text-align: center;
    }

    /* Buttons for confirmation */
    .modal-buttons {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .modal-buttons button {
        background: linear-gradient(135deg, #E63946, #FF6B6B);
        color: white;
        border: none;
        padding: 14px 20px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .modal-buttons button:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.5);
    }

    /* Close button style */
    .delete-modal .close-btn {
        position: absolute;
        top: 5px;
        right: 10px;
        font-size: 30px;
        cursor: pointer;
        color: white;
    }

    /* Rest of the page styles (keep as it is) */
    .upload-section {
        background: white;
        padding: 30px;
        margin: 30px auto;
        max-width: 700px;
        border-radius: 16px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    }

    body {
        background-color: #F5EAE4;
        margin: 0;
        font-family: 'Poppins', sans-serif;
    }

    header {
        background-color: #E63946;
        color: white;
        padding: 20px 40px;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .upload-section {
        background: white;
        padding: 30px;
        margin: 12px auto;
        max-width: 700px;
        border-radius: 16px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.05);
    }

    .upload-section h2 {
        color: #333;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    form label {
        font-weight: 500;
        text-align: left;
    }

    .description-row {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .description-row label {
        min-width: 0px;
        font-weight: 00;
        color: #333;
    }

    .description-row textarea {
        flex: 1;
        padding: 3px 5px;
        margin-top: 10px;
        overflow: hidden;
        max-height: 3.2em;
        /* around 2 lines */
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 8px;
        resize: vertical;
        min-height: 10px;
        font-family: 'Poppins', sans-serif;
    }

    form input[type="text"],
    form textarea,
    form select {
        padding: 10px;
        font-size: 14px;
        color: auto;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    form input[type="text"],
    form textarea,
    form select :hover {
        padding: 10px;
        font-size: 14px;
        color: auto;
        border: 1px solid #ccc;
        border-radius: 8px;
    }


    form input[type="submit"] {
        background: linear-gradient(135deg, #E63946, #FF6B6B);
        color: white;
        border: none;
        padding: 14px 20px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4);
        cursor: pointer;
        transition: all 0.3s ease;
        letter-spacing: 0.5px;
    }

    form input[type="submit"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.5);
    }

    .dashboard-section {
        max-width: 1200px;
        margin: 0px auto;
        padding: 10px;
    }

    .dashboard-section h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .cards-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        justify-items: center;
    }

    .card,
    .card2 {
        background-color: white;
        border-radius: 16px;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        transition: transform 0.3s ease;
        font-weight: bold;
    }

    .card:hover,
    .card2:hover {
        transform: scale(1.02);
    }

    .card img,
    .card2 img {
        width: 100%;
        max-height: 230px;
        /*restrict tall images */
        object-fit: cover;
    }

    .card {
        width: 300px;
        height: 420px;
        font-weight: bold;
    }

    .card2 {
        font-weight: bold;
        width: 800px;
        height: 420px;
    }

    /* 🆕 Ensure long content doesn't overflow or push buttons out of view */
    .card-content,
    .card2-content {
        padding: 15px;
        display: flex;
        flex-direction: column;
        height: calc(100% - 200px);
        /* Remaining height after image */
        overflow: hidden;
    }

    .card h3,
    .card2 h3 {
        margin: 0;
        font-size: 18px;
        color: #E63946;
    }

    .card p,
    .card2 p {
        font-size: 14px;
        color: #555;
        margin: 10px 0;
    }

    .card p::first-line,
    .card2 p::first-line {
        font-weight: bold;
    }

    .card a,
    .card2 a {
        color: #E63946;
        font-weight: 600;
        margin: 0 5px;
        text-decoration: none;
    }

    .card a:hover,
    .card2 a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .card2 {
            width: 100%;
        }
    }

    /* Enhance the file input for 2025 modern styling */
    .upload-section input[type="file"] {
        display: none;
        /* Hide default file input */
    }

    .upload-section .custom-file-input {
        position: relative;
        display: inline-block;
        padding: 10px 9px;
        background: linear-gradient(135deg, #E63946, #FF6B6B);
        color: white;
        font-size: 16px;
        font-weight: 600;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(230, 57, 70, 0.4);
    }

    .upload-section .custom-file-input:hover {
        background: linear-gradient(135deg, #FF6B6B, #E63946);
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(230, 57, 70, 0.5);
    }

    .upload-section .custom-file-input::before {
        content: "Choose a file";
        display: block;
        color: white;
        text-align: center;
        font-size: 16px;
    }

    .upload-section input[type="file"]:focus+.custom-file-input {
        border: 2px solid #E63946;
        outline: none;
    }

    /* Show file name once selected */
    .upload-section .file-name {
        font-size: 14px;
        margin-top: 12px;
        color: #3f9635;
        font-weight: 500;
    }
    </style>
</head>

<body>

    <header>Luna Jeweler Admin Panel</header>

    <div id="welcomePopup" class="welcome-popup">
        Welcome Hadil!
    </div>

    <section class="upload-section">
        <h2>Upload New Jewelry</h2>
        <!-- Add this modal structure inside the body -->
        <div id="logoutModal" class="logout-modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Are you sure you want to log out?</h3>
                <div class="modal-buttons">
                    <button id="confirmLogout" class="confirm-btn">Yes</button>
                    <button id="cancelLogout" class="cancel-btn">No</button>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div id="deleteModal" class="delete-modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h3>Are you sure you want to delete this item?</h3>
                <div class="modal-buttons">
                    <button id="confirmDelete" class="confirm-btn">Yes</button>
                    <button id="cancelDelete" class="cancel-btn">No</button>
                </div>
            </div>
        </div>

        <!-- Logout button, this triggers the popup -->
        <a href="javascript:void(0);" class="logout-button" onclick="showLogoutModal();">
            🔒 Logout
        </a>
        <form action="uploadScript.php" method="post" enctype="multipart/form-data">
            <label>Price: <input type="text" name="title" required></label>
            <div class="description-row">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>
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
            <label>Image:
                <!-- Custom file input -->
                <input type="file" name="image" id="imageInput" accept="image/*" required>
                <label for="imageInput" class="custom-file-input"></label>
                <div class="file-name" id="fileName"></div>
            </label>
            <label for="card_type">Card Style:</label>
            <select name="card_type" id="card_type">
                <option value="card">Normal</option>
                <option value="card2">Wide</option>
            </select>
            <input type="submit" value="Upload">
        </form>
    </section>

    <section class="dashboard-section">
        <h2>Manage Jewelry Posts</h2>
        <div class="cards-grid">
            <?php
        $result = $conn->query("SELECT * FROM jewelry ORDER BY id DESC");
        while ($row = $result->fetch_assoc()):
            $cardClass = htmlspecialchars($row['card_type'] ?? 'card');
        ?>
            <div id="card-<?= $row['id'] ?>" class="<?= $cardClass ?>">
                <img src="uploads/<?= $row['image'] ?>" alt="<?= htmlspecialchars($row['title']) ?>">
                <div class="<?= $cardClass ?>-content">
                    <h3><?= htmlspecialchars($row['title']) ?></h3>
                    <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                    <a href="editScript.php?id=<?= $row['id'] ?>">Edit</a> ―
                    <a href="javascript:void(0);" onclick="showDeleteModal(<?= $row['id'] ?>)">Delete</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>

    <script>
    // Display the selected file name
    const fileInput = document.getElementById('imageInput');
    const fileNameDisplay = document.getElementById('fileName');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : 'No file selected';
        fileNameDisplay.textContent = fileName;
    });
    </script>
    <script>
    // Show the logout confirmation modal
    function showLogoutModal() {
        document.getElementById('logoutModal').style.display = 'flex';
        document.getElementById('logoutModal').style.opacity = '1';
    }

    // Hide the modal
    function hideLogoutModal() {
        document.getElementById('logoutModal').style.display = 'none';
        document.getElementById('logoutModal').style.opacity = '0';
    }

    // Close the modal when clicking on the close button (×)
    document.querySelector('.close-btn').addEventListener('click', hideLogoutModal);

    // Close the modal when clicking on the "No" button
    document.getElementById('cancelLogout').addEventListener('click', hideLogoutModal);

    // Handle confirmation to logout
    document.getElementById('confirmLogout').addEventListener('click', function() {
        window.location.href = 'logout.php'; // Redirect to logout script
    });
    </script>

    <script>
    // Show the delete confirmation modal
    function showDeleteModal(id) {
        // Show the delete modal with fade-in effect
        document.getElementById('deleteModal').style.display = 'flex';
        document.getElementById('deleteModal').style.opacity = '1';

        // Attach the confirm button action to delete
        document.getElementById('confirmDelete').onclick = function() {
            // Perform the delete operation without reloading the page
            fetch('deleteScript.php?id=' + id, {
                    method: 'POST', // Use POST for security
                })
                .then(response => response.json()) // Expecting a JSON response from PHP
                .then(data => {
                    if (data.success) {
                        // Remove the card from the page immediately
                        document.querySelector(`#card-${id}`)
                            .remove(); // Assuming you have added an id to each card
                        hideDeleteModal(); // Close the modal
                    } else {
                        alert('Failed to delete item. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error deleting item:', error);
                    alert('An error occurred. Please try again later.');
                });
        };
    }

    // Hide the delete confirmation modal
    function hideDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
        document.getElementById('deleteModal').style.opacity = '0';
    }

    // Close the modal when clicking on the close button (×)
    document.querySelector('.close-btn').addEventListener('click', hideDeleteModal);

    // Close the modal when clicking on the "No" button
    document.getElementById('cancelDelete').addEventListener('click', hideDeleteModal);
    </script>

    <script>
    window.onload = function() {
        const popupShown = <?php echo $_SESSION['welcome_popup_shown'] ? 'true' : 'false'; ?>;

        if (!popupShown) {
            const popup = document.getElementById("welcomePopup");
            popup.classList.add("show-popup");

            setTimeout(() => {
                popup.classList.remove("show-popup");
            }, 4000); // Hide after 4 seconds

            // Update session so it doesn't show again
            fetch('setPopupShown.php'); // You'll need to create this script
        }
    };
    </script>

</body>

</html>