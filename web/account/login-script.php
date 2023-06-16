<?php
session_start();

function login($username, $password) {
    // Read the dashboard/users_db.json file
    $users = json_decode(file_get_contents('dashboard/users_db.json'), true);
    
    // Check if the username exists in the users array
    foreach ($users as $user) {
        if ($user['username'] === $username) {
            // Verify the password
            if ($user['password'] === $password) {
                // Login successful, create a session for the user
                $_SESSION['username'] = $username;
                $_SESSION['permission'] = $user['permission'];
                
                // Redirect the user based on their permission level
                if ($user['permission'] == 1) {
                    header('Location: ../index.php');
                } elseif ($user['permission'] == 3) {
                    header('Location: dashboard/Dashboard.php');
                }
                exit;
            }
        }
    }
    
    // Login failed
    return false;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (login($username, $password)) {
        echo 'Login successful!';
    } else {
        echo 'Invalid username or password.';
    }
}

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    // Redirect the user based on their permission level
    if ($_SESSION['permission'] == 1) {
        header('Location: index.php');
        exit;
    } elseif ($_SESSION['permission'] == 3) {
        header('Location: dashboard/Dashboard.php');
        exit;
    }
}
?>
