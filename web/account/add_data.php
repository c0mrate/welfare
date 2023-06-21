<?php
// Start the session
session_start();

// Read the JSON file
$jsonFile = 'dashboard/users_db.json';
$jsonData = file_get_contents($jsonFile);
$data = json_decode($jsonData, true);

// Get the form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$line = $_POST['line'];
$address = $_POST['address'];
$province = $_POST['province'];
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
        $user['user_information'][0]['address'] = $address;
        $user['user_information'][0]['province'] = $province;
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
