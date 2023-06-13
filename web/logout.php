<?php
// logout.php

// Start or resume the session
session_start();

// Check if the logout button was clicked
if (isset($_POST['logout'])) {
    // Destroy all session data
    session_destroy();
    
    // Redirect to the login page or any other desired page
    header("Location: index.php");
    exit;
}
?>
