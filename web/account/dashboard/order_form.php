<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the orderID from the URL
    $orderID = $_GET['orderID'];

    // Read the JSON data from a file or database
    $jsonData = file_get_contents('orderholder.json');

    // Decode the JSON data into a PHP associative array
    $data = json_decode($jsonData, true);

    // Find the user with the matching orderID
    foreach ($data as &$user) {
        foreach ($user['order'] as &$order) {
            if ($order['orderID'] == $orderID) {
                // Update the user information and order details
                $user['user_information'][0]['name'] = $_POST['name'];
                $user['user_information'][0]['phone'] = $_POST['phone'];
                // Update other fields as needed

                $order['product'][0]['ProductID'] = $_POST['productID'];
                $order['product'][0]['ProductName'] = $_POST['productName'];
                // Update other fields as needed

                break 2; // Exit both loops once the order is found
            }
        }
    }

    // Encode the updated data back to JSON
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // Save the updated JSON data to a file or database
    file_put_contents('orderholder.json', $jsonData);

    // Redirect the user to a success page
    header('Location: create-order.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <div class="card-content">
        <form method="POST">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Order ID</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="orderID" value="<?php echo $_GET['orderID']; ?>" readonly>
                            <span class="icon is-small is-left"><i class="mdi mdi-account"></i></span>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="name" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-account"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Phone</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="phone" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-phone"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Product ID</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="productID" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-cart"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Product Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="productName" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-cart"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label"></div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        const orderID = '<?php echo $_GET['orderID']; ?>';
        document.querySelector('input[name="orderID"]').value = orderID;
    </script>
</body>
</html>
