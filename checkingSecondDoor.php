<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index"); // Redirect to the login page if not logged in
    exit();
}
?>
