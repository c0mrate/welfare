<?php
function createOrder($name)
{
    $orderHolderFile = 'orderholder.json';
    $jsonData = file_get_contents($orderHolderFile);
    $data = json_decode($jsonData, true);
    $existingEntryIndex = getExistingDataEntryIndex($data, 'name', $name);
    if ($existingEntryIndex !== -1) {
        $existingEntry = $data[$existingEntryIndex];
        $orderID = mt_rand(10000, 99999) . date('mdY');
        $newOrderEntry = array(
            "orderID" => $orderID,
            "orderDate" => date('Y-m-d H:i:s'),
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
        $existingEntry['order'][] = $newOrderEntry;
        $data[$existingEntryIndex] = $existingEntry;
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($orderHolderFile, $jsonData);
        header("Location: GuestOrderForm.php?orderID=$orderID");
        exit();
    }
    $orderID = mt_rand(10000, 99999) . date('mdY');
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
                "address" => "",
                "province" => "",
                "zipcode" => ""
            )
        ),
        "order" => array(
            array(
                "orderID" => $orderID,
                "orderDate" => date('Y-m-d H:i:s'),
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
    $data[] = $newUserEntry;
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($orderHolderFile, $jsonData);
    header("Location: GuestOrderForm.php?orderID=$orderID");
    exit();
}
function getExistingDataEntryIndex($data, $field, $value)
{
    foreach ($data as $index => $entry) {
        if (isset($entry['user_information'][0][$field]) && $entry['user_information'][0][$field] === $value) {
            return $index;
        }
    }
    return -1;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    createOrder($name);
}
