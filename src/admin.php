<?php
session_start();
include 'db_connect.php';

// Verify if the user is logged in and is an admin
if (!isset($_SESSION['userid'])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SESSION['role'] != 'admin') {
    header("Location: access_denied.php"); // Redirect to a different page if not admin
    exit();
}
?>
