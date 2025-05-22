<?php

session_start();

// Check if staff is not logged in
if (!isset($_SESSION['admin_id'])) {
    echo '<script>alert("You are not authorized to view this page.")</script>';
    echo '<script>window.location.assign("loginStaff.php")</script>'; // Redirect to login page
    exit();
}

?>
