<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderID = $_GET['orderID'];
    $jsonData = file_get_contents('orderholder.json');
    $data = json_decode($jsonData, true);
    foreach ($data as &$user) {
        foreach ($user['order'] as &$order) {
            if ($order['orderID'] == $orderID) {
                $user['user_information'][0]['name'] = $_POST['name'];
                $user['email'] = $_POST['email'];
                $user['user_information'][0]['phone'] = $_POST['phone'];
                $user['user_information'][0]['line'] = $_POST['line'];
                $order['product'][0]['ProductID'] = $_POST['productID'];
                $order['product'][0]['ProductName'] = $_POST['productName'];
                break 2;
            }
        }
    }
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('orderholder.json', $jsonData);
    header('Location: create-order.php');
    exit;
}
$orderID = $_GET['orderID'];
$jsonData = file_get_contents('orderholder.json');
$data = json_decode($jsonData, true);

$userInformation = null;
foreach ($data as &$user) {
    foreach ($user['order'] as &$order) {
        if ($order['orderID'] == $orderID) {
            $userInformation = $user['user_information'][0];
            break 2;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms - Admin One HTML - Bulma Admin Dashboard</title>
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
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
                            <input class="input" type="text" name="name" value="<?php echo isset($userInformation['name']) ? $userInformation['name'] : ''; ?>" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-account"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Email</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="email" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-phone"></i></span>
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
                    <label class="label">Line</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" name="line" required>
                            <span class="icon is-small is-left"><i class="mdi mdi-phone"></i></span>
                        </p>
                    </div>
                </div>
            </div>

            <hr>

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