<?php
function postDataToJSON($orderID, $data)
{
    // Read the JSON file
    $jsonString = file_get_contents('orderholder.json');
    $jsonArray = json_decode($jsonString, true);

    // Search for the matching orderID in the "order" array
    foreach ($jsonArray['order'] as &$order) {
        if ($order['orderID'] === $orderID) {
            // Overwrite the data for the matching orderID
            $order['product'] = $data;
            break;
        }
    }

    // Convert the updated array back to JSON format
    $updatedJsonString = json_encode($jsonArray, JSON_PRETTY_PRINT);

    // Write the updated JSON string back to the file
    file_put_contents('orderholder.json', $updatedJsonString);
}
?>
