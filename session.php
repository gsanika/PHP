<?php
session_start();

$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "johndoe@example.com";

echo "Session variables are set.<br>";

echo "Welcome, " . $_SESSION["username"] . "!<br>";
echo "Your email is " . $_SESSION["email"] . ".<br>";

unset($_SESSION["email"]);

if (!isset($_SESSION["email"])) {
    echo "Email session variable is unset.<br>";
}

session_destroy();
echo "Session destroyed.";
?>

















