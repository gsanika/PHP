<?php
session_start(); // Start the session

// Handle Login
if (isset($_POST['login'])) {
    $_SESSION['user'] = $_POST['username']; // Store username in session
    header("Location: sessionmanage.php"); // Refresh page to show session data
    exit();
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy session
    header("Location: sessionmanage.php"); // Redirect to login form
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Management</title>
</head>
<body>
    <?php if (isset($_SESSION['user'])): ?>
        <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
        <a href="sessionmanage.php?logout=true">Logout</a>
    <?php else: ?>
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Enter Username" required>
            <button type="submit" name="login">Login</button>
        </form>
    <?php endif; ?>
</body>
</html>
