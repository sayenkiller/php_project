<?php
session_start();
require 'DB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Compare plain password directly
    if ($user && $password === $user['password']) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Luna Jeweler Admin</title>
    <link rel="icon" href="icons8-jewelry-100.png" type="image/svg+xml">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="fade-in-body">

    <div class="login-container">
        <div class="login-card">
            <h2>Login to Admin Page</h2>
            <?php if (!empty($error)) echo "<p class='error-message'>$error</p>"; ?>
            <form method="POST" action="">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required />
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

</body>

</html>