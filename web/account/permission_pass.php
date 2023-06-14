<?php
// Check if the user is logged in and has the appropriate permission level
if (isset($_SESSION['permission']) && $_SESSION['permission'] == 1) {
    // Redirect the user to index.php
    header("Location: ../index.php");
    exit;
} elseif (isset($_SESSION['permission']) && $_SESSION['permission'] == 3) {
    // Redirect the user to administrator.php
    header("Location: role-3.php");
    exit;
} elseif (isset($_SESSION['permission']) && $_SESSION['permission'] == 2) {
    // Redirect the user to administrator.php
    header("Location: role-2.php");
    exit;
} else {
    // User doesn't have the required permission level, redirect to a login page or display an error message
    // You can replace 'login.html' with the URL of your login page
    header("Location: login.php");
    exit;
}
?>
