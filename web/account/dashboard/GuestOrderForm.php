<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderID = $_GET['orderID'];
    $jsonData = file_get_contents('orderholder.json');
    $data = json_decode($jsonData, true);
    foreach ($data as &$user) {
        foreach ($user['order'] as &$order) {
            if ($order['orderID'] == $orderID) {
                $user['user_information'][0]['name'] = $_POST['name'];
                $user['user_information'][0]['phone'] = $_POST['phone'];
                $user['user_information'][0]['line'] = $_POST['line'];
                $user['user_information'][0]['address'] = $_POST['address'];
                break 2;
            }
        }
    }
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('orderholder.json', $jsonData);
    header("Location: GuestOrderForm_Second.php?orderID=" . urlencode($orderID));
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
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

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
    <div id="app">
        <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools">
                <div class="aside-tools-label">
                    <span><b>Admin</b> One HTML</span>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li>
                        <a href="Dashboard.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="supply.php" class="router-link-active has-icon">
                            <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                            <span class="menu-item-label">Supply</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">Examples</p>
                <ul class="menu-list">
                    <li>
                        <a href="users.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-table"></i></span>
                            <span class="menu-item-label">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="order.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-table"></i></span>
                            <span class="menu-item-label">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="sell.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-table"></i></span>
                            <span class="menu-item-label">Sell</span>
                        </a>
                    </li>
                </ul>
                <p class="menu-label">About</p>
                <ul class="menu-list">
                    <li>
                        <a href="create-order.php" class="is-active as-icon">
                            <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                            <span class="menu-item-label">Create Order</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://justboil.me/bulma-admin-template/free-html-dashboard/" class="has-icon">
                            <span class="icon"><i class="mdi mdi-help-circle"></i></span>
                            <span class="menu-item-label">About</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section class="hero is-hero-bar">
            <div class="hero-body">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 class="title">
                                Forms
                            </h1>
                        </div>
                    </div>
                    <div class="level-right" style="display: none;">
                        <div class="level-item"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section is-main-section">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot"></i></span>
                        Forms
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST">
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">Order ID</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <input class="input is-success" type="text" placeholder="Order ID" value="<?php echo $_GET['orderID']; ?>" readonly>
                                            <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                            <span class="icon is-small is-right"><i class="mdi mdi-check"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Phone / line</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <input class="input" type="phone" name="phone" placeholder="Phone" value="<?php echo isset($userInformation['phone']) ? $userInformation['phone'] : ''; ?>">
                                            <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                        </p>
                                        <p class="control is-expanded">
                                            <input class="input" type="text" name="line" placeholder="Line" value="<?php echo isset($userInformation['line']) ? $userInformation['line'] : ''; ?>">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Name</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" type="text" name="name" placeholder="" value="<?php echo isset($userInformation['name']) ? $userInformation['name'] : ''; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Address</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <textarea class="textarea" name="address" placeholder="<?php echo isset($userInformation['address']) ? $userInformation['address'] : ''; ?>" name="address" value="<?php echo isset($userInformation['address']) ? $userInformation['address'] : ''; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label"></div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-primary" type="submit">Save and go Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        const orderID = '<?php echo $_GET['orderID']; ?>';
        document.querySelector('input[name="orderID"]').value = orderID;
    </script>
    <script type="text/javascript" src="js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>

</html>