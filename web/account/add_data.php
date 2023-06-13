<?php
// Start the session
session_start();

// Read the JSON file
$jsonFile = 'users.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

// Get the form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$line = $_POST['line'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$zipcode = $_POST['zipcode'];

// Get the logged-in username from the session
$username = $_SESSION['username'];

// Find the logged-in user in the JSON data
foreach ($data as &$user) {
    if ($user['username'] === $username) {
        // Update the user information
        $user['user_information'][0]['name'] = $name;
        $user['user_information'][0]['phone'] = $phone;
        $user['user_information'][0]['line'] = $line;
        $user['user_information'][0]['address1'] = $address1;
        $user['user_information'][0]['address2'] = $address2;
        $user['user_information'][0]['zipcode'] = $zipcode;
        break;
    }
}

// Convert the data back to JSON format
$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Write the updated JSON data back to the file
file_put_contents($jsonFile, $jsonData);

// Redirect back to the form page
header("Location: account.php");
exit();
?>
