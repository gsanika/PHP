<?php
setcookie("user", "", time() - 3600, "/");

if (isset($_COOKIE['user'])) {
    echo "Cookie 'user' is still set!<br>";
    echo "Value: " . $_COOKIE['user'];
} else {
    echo "Cookie 'user' has been deleted.";
}
?>
