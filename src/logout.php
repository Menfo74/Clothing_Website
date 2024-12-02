<?php
session_start(); // Start the session

// Destroy all session data
session_unset();
session_destroy();

// Redirect to the login page or home page
header("Location: login.php"); // Adjust the redirection path as needed
exit();
?>