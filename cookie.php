<?php
setcookie("user", "abcd", time() + 3600, "/");

if (isset($_COOKIE['user'])) {
    echo "Cookie 'user' is set!<br>";
    echo "Value: " . $_COOKIE['user'];
} else {
    echo "Cookie 'user' is not set!";
}
?>
