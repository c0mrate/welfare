<?php
// Read the existing data from the JSON file
$jsonFile = 'users.json';

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
} else {
    $data = [];
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create an array with the user data
    $userData = array(
        'username' => $username,
        'email' => $email,
        'password' => $password
    );

    // Add the new user data to the existing data
    $data[] = $userData;

    // Write the updated data back to the JSON file
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $jsonData);

    // Redirect to the previous page or refresh the current page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
