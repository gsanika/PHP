<?php
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    echo "Searching for: " . htmlspecialchars($search_query) . "<br>";
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Logging in user: " . htmlspecialchars($username) . "<br>";
}
?>

<h2>Search for Books (GET Method)</h2>
<form action="index.php" method="GET">
    <input type="text" name="query" placeholder="Search for books">
    <button type="submit">Search</button>
</form>

<h2>Login (POST Method)</h2>
<form action="index.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
