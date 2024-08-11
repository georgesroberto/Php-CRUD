<?php
session_start();
session_destroy();
echo "You have been logged out.";
// Redirect to the login page or home page
?>
