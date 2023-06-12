<?php
// Function to check if user login is successful
function login($username, $password)
{
    // Read the users.json file
    $usersData = file_get_contents('users.json');
    $users = json_decode($usersData, true);

    // Loop through the users to find a match
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            return true; // User login successful
        }
    }

    return false; // User login failed
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if user login is successful
    if (login($username, $password)) {
        // User login successful, redirect to google.com
        header("Location: https://www.google.com");
        exit();
    } else {
        // User login failed, display an error message or perform any desired action
        echo "Invalid username or password. Please try again.";
    }
}
?>
