<?php

setcookie("user", "mnbv", time() + 3600, "/");

if (isset($_COOKIE['user'])) {
    echo "Cookie 'user' has been updated!<br>";
    echo "New Value: " . $_COOKIE['user'];
} else {
    echo "Cookie 'user' is not set!";
}
?>
