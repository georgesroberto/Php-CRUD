<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to view this page.";
    // Redirect to the login page
    header("Location: users/login.php");
    exit();
}
?>
