<!-- search.php -->

<?php
// Function to read JSON file and find user by userID
function findUserByID($userID) {
    $data = file_get_contents('users_db.json');
    $users = json_decode($data, true);

    foreach ($users as $user) {
        if ($user['userID'] === $userID) {
            return $user;
        }
    }

    return null;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the entered userID from the form
    $userID = $_POST['userID'];

    // Find the user by userID
    $user = findUserByID($userID);

    if ($user) {
        // Redirect to the website and pass the user data in the URL
        $url = "MemberOrderForm.php?userID=" . urlencode($userID);
        header("Location: $url");
        exit;
    } else {
        echo "User not found.";
    }
}
?>
