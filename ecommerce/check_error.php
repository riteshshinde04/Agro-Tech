<?php
session_start();

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
} else {
    echo ""; // Return empty string if no error message
}
?>
