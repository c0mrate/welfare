<?php
// Read the existing data from the JSON file
$jsonFile = 'dashboard/users_db.json';

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
    $role = $_POST['role'];

    // Set default values for user information
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $line = isset($_POST['line']) ? $_POST['line'] : '';
    $address1 = isset($_POST['address1']) ? $_POST['address1'] : '';
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';

    // Generate the user ID
    $lastUser = end($data); // Get the last user in the array
    $lastUserID = isset($lastUser['userID']) ? $lastUser['userID'] : 'STU01000100223'; // Set a default value for the first user
    $userID = generateUserID($lastUserID, $role);

    // Get the current date and time
    $currentDateTime = date('Y-m-d H:i:s');

    // Set the image URL based on the selected role
    if ($role === 'PER') {
        $imgURL = 'https://api.dicebear.com/6.x/initials/svg?seed=PS&backgroundColor=d81b60';
    } elseif ($role === 'STU') {
        $imgURL = 'https://api.dicebear.com/6.x/initials/svg?seed=SD&backgroundColor=3949ab';
    } else {
        $imgURL = '';
    }

    // Create an array with the user data
    $userData = array(
        'userID' => $userID,
        'createDate' => $currentDateTime,
        'role' => $role,
        'img' => $imgURL, // Added the 'img' field
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'permission' => '1',
        'user_information' => array(
            array(
                'name' => $name,
                'phone' => $phone,
                'line' => $line,
                'address1' => $address1,
                'province' => $province,
                'zipcode' => $zipcode
            )
        )
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

// Function to generate the user ID
function generateUserID($lastUserID, $role) {
    // Extract the components from the last user ID
    $group = $role;
    $userNumber = intval(substr($lastUserID, 5, 4));
    $userSet = intval(substr($lastUserID, 9, 3));
    $year = intval(substr($lastUserID, -2));

    // Get the current year
    $currentYear = intval(date('y'));

    // Increment the user number and check if it exceeds the maximum
    $userNumber++;
    if ($userNumber > 9999) {
        $userNumber = 1;
        $userSet++;
        if ($userSet > 999) {
            $userSet = 1;
        }
    }

    // Update the year if it's a new year
    if ($year != $currentYear) {
        $year = $currentYear;
    }

    // Format the components
    $userNumberFormatted = sprintf('%04d', $userNumber);
    $userSetFormatted = sprintf('%03d', $userSet);
    $yearFormatted = sprintf('%02d', $year);

    // Generate the new user ID
    $newUserID = $group . $userNumberFormatted . $userSetFormatted . $yearFormatted;

    return $newUserID;
}
?>
