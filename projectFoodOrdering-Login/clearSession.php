<?php
// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to indexMain.php
header('Location: indexMain.php');
exit();
?>
