<?php

function createOrder($name) {
    $orderHolderFile = 'orderholder.json';

    // Read the existing JSON data from the file
    $jsonData = file_get_contents($orderHolderFile);
    $data = json_decode($jsonData, true);

    // Check if any existing data entry already has the given name
    $existingEntryIndex = getExistingDataEntryIndex($data, 'name', $name);

    if ($existingEntryIndex !== -1) {
        // Retrieve the existing user entry
        $existingEntry = $data[$existingEntryIndex];

        // Generate a new order ID for the existing user
        $orderID = mt_rand(10000, 99999) . date('mdY');

        // Create a new order entry for the existing user
        $newOrderEntry = array(
            "orderID" => $orderID,
            "product" => array(
                array(
                    "ProductID" => "",
                    "ProductName" => "",
                    "ProductQuality" => 0,
                    "ProductSize" => "",
                    "ProductColor" => "",
                    "ProductLength" => "",
                    "ProductPrice" => 0
                )
            )
        );

        // Add the new order entry to the existing user's order list
        $existingEntry['order'][] = $newOrderEntry;

        // Update the data with the modified user entry
        $data[$existingEntryIndex] = $existingEntry;

        // Update the JSON data with the modified values
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);

        // Write the updated JSON data back to the file
        file_put_contents($orderHolderFile, $jsonData);

        // Navigate to the website page with the order form and pass the orderID as a query parameter
        header("Location: GuestOrderForm.php?orderID=$orderID");
        exit();
    }

    // If the user doesn't exist, create a new user entry with the order as before
    // ...

    // Generate the orderID with a random 5-digit number appended with the current date
    $orderID = mt_rand(10000, 99999) . date('mdY');

    // Create a new user entry with the order
    $newUserEntry = array(
        "userID" => "",
        "createDate" => "",
        "role" => "",
        "img" => "",
        "username" => "",
        "email" => "",
        "password" => "",
        "permission" => "",
        "user_information" => array(
            array(
                "name" => $name,
                "phone" => "",
                "line" => "",
                "address1" => "",
                "province" => "",
                "zipcode" => ""
            )
        ),
        "order" => array(
            array(
                "orderID" => $orderID,
                "product" => array(
                    array(
                        "ProductID" => "",
                        "ProductName" => "",
                        "ProductQuality" => 0,
                        "ProductSize" => "",
                        "ProductColor" => "",
                        "ProductLength" => "",
                        "ProductPrice" => 0
                    )
                )
            )
        )
    );

    // Add the new user entry to the existing data
    $data[] = $newUserEntry;

    // Update the JSON data with the modified values
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Write the updated JSON data back to the file
    file_put_contents($orderHolderFile, $jsonData);

    // Navigate to the website page with the order form and pass the orderID as a query parameter
    header("Location: GuestOrderForm.php?orderID=$orderID");
    exit();
}

// Function to retrieve the index of the existing data entry for a given field and value
function getExistingDataEntryIndex($data, $field, $value) {
    foreach ($data as $index => $entry) {
        if (isset($entry['user_information'][0][$field]) && $entry['user_information'][0][$field] === $value) {
            return $index;
        }
    }
    return -1;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the name from the form
    $name = $_POST['name'];

    // Call the createOrder function
    createOrder($name);
}
