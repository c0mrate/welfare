<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
$jsonString = file_get_contents('supply.json');
$data = json_decode($jsonString, true);

?>
<?php
function calculateItemQuality($item)
{
    $totalQuality = 0;
    foreach ($item['wherehouse'][0] as $warehouse) {
        foreach ($warehouse as $product) {
            $totalQuality += $product['quality'];
        }
    }
    return $totalQuality;
}
function calculateWarehousePrice($item)
{
    $warehousePrice = array();

    foreach ($item['wherehouse'][0] as $warehouseType => $warehouse) {
        $price = 0;
        foreach ($warehouse as $product) {
            $price += $product['quality'] * $item['supplyPrice'];
        }
        $warehousePrice[$warehouseType] = $price;
    }
    return $warehousePrice;
}
$jsonData = file_get_contents('supply.json');
$data = json_decode($jsonData, true);
$productTotals = array();
$totalProductPrice = 0;
foreach ($data as $item) {
    $productId = $item['supplyID'];
    $productQuality = calculateItemQuality($item);
    $productPrice = $item['supplyPrice'];

    if (!isset($productTotals[$productId])) {
        $productTotals[$productId] = array(
            'quality' => 0,
            'price' => $productPrice
        );
    }
    $productTotals[$productId]['quality'] += $productQuality;
    $totalProductPrice += $productQuality * $productPrice;
}
?>

<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Tools</title>
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="app">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item is-hidden-desktop jb-aside-mobile-toggle">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
                <div class="navbar-item has-control">
                    <div class="control"><input placeholder="Search everywhere..." class="input"></div>
                </div>
            </div>
            <div class="navbar-brand is-right">
                <a class="navbar-item is-hidden-desktop jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical"></i></span>
                </a>
            </div>
            <div class="navbar-menu fadeIn animated faster" id="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider is-hoverable">
                        <a class="navbar-link is-arrowless">
                            <span class="icon"><i class="mdi mdi-menu"></i></span>
                            <span>Sample Menu</span>
                            <span class="icon">
                                <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="profile.html" class="navbar-item">
                                <span class="icon"><i class="mdi mdi-account"></i></span>
                                <span>My Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-settings"></i></span>
                                <span>Settings</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-email"></i></span>
                                <span>Messages</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon"><i class="mdi mdi-logout"></i></span>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    <a title="Log out" class="navbar-item is-desktop-icon-only">
                        <span class="icon"><i class="mdi mdi-logout"></i></span>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>
        <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools">
                <div class="aside-tools-label">
                    <span><b>Admin</b> Helper</span>
                </div>
            </div>
            <div class="menu is-menu-main">
                <p class="menu-label">General</p>
                <ul class="menu-list">
                    <li>
                        <a href="Dashboard.php" class="router-link-active has-icon">
                            <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                            <span class="menu-item-label">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="supply.php" class="is-active router-link-active has-icon">
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
                        <a href="create-order.php" class="has-icon">
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
        <section class="section is-title-bar">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <ul>
                            <li>Admin</li>
                            <li>รายการคลังสินค้า</li>
                        </ul>
                    </div>
                </div>
                <div class="level-right">
                    <div class="level-item">
                        <div class="buttons is-right">
                            <a href="https://docs.google.com/spreadsheets/d/13Dkk2qebr9ouJMZW_iZ6H4JAsxNC1fg3/edit#gid=1991292043" target="_blank" class="button is-primary">
                                <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                                <span>ใบสั่งสินค้า</span>
                            </a>
                            <a href="https://docs.google.com/spreadsheets/d/13Dkk2qebr9ouJMZW_iZ6H4JAsxNC1fg3/edit#gid=1991292043" target="_blank" class="button is-primary">
                                <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                                <span>ปริ้นรายการคลังสินค้า</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero is-hero-bar">
            <div class="hero-body">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 class="title">
                                คลังสินค้า
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
            <div class="tile is-ancestor">
                <div class="tile is-parent">
                    <div class="card tile is-child">
                        <div class="card-content">
                            <div class="level is-mobile">
                                <div class="level-item">
                                    <div class="is-widget-label">
                                        <h3 class="subtitle is-spaced">
                                            สินค้าคงเหลือ
                                        </h3>
                                        <?php
                                        function calculateTotalQuality($data)
                                        {
                                            $total = 0;
                                            foreach ($data as $item) {
                                                foreach ($item['wherehouse'][0] as $warehouse) {
                                                    foreach ($warehouse as $product) {
                                                        $total += $product['quality'];
                                                    }
                                                }
                                            }
                                            return $total;
                                        }
                                        $jsonData = file_get_contents('supply.json');
                                        $data = json_decode($jsonData, true);
                                        $totalQuality = calculateTotalQuality($data);
                                        ?>
                                        <h1 class="title">
                                            <?php echo number_format($totalQuality); ?> หน่วย
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="card tile is-child">
                        <div class="card-content">
                            <div class="level is-mobile">
                                <div class="level-item">
                                    <div class="is-widget-label">
                                        <h3 class="subtitle is-spaced">
                                            มูลค่าสินค้าทั้งหมด
                                        </h3>
                                        <h1 class="title">
                                            <?php echo number_format($totalProductPrice, 2, '.', ','); ?> บาท
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <div class="card tile is-child">
                        <div class="card-content">
                            <div class="level is-mobile">
                                <div class="level-item">
                                    <div class="is-widget-label">
                                        <h3 class="subtitle is-spaced">
                                            Performance
                                        </h3>
                                        <h1 class="title">
                                            0%
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section is-main-section">
                <div class="card has-table">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                            รายการคลังสินค้า
                        </p>
                        <a href="#" class="card-header-icon">
                            <span class="icon"><i class="mdi mdi-reload"></i></span>
                        </a>
                    </header>
                    <div class="card-content">
                        <div class="b-table has-pagination">
                            <div class="table-wrapper has-mobile-cards">
                                <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
                                    <thead>
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>รายการสินค้า</th>
                                            <th>ราคาต่อหน่วย</th>
                                            <th>ที่อยู่สินค้า</th>
                                            <th>คงเหลือ/หน่วย</th>
                                            <th>มูลค่าต่อคลัง</th>
                                            <th>รวม/หน่วย</th>
                                            <th>มูลค่าสินค้าทั้งหมด</th>
                                            <th>แก้ไข</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $item) : ?>
                                            <?php $warehousePrice = calculateWarehousePrice($item); ?>
                                            <tr>
                                                <td data-label="Product ID"><?php echo $item['supplyID']; ?></td>
                                                <td data-label="Product Name"><?php echo $item['supplyName']; ?></td>
                                                <td data-label="Product Price"><?php echo number_format($item['supplyPrice'], 2, '.', ','); ?></td>
                                                <td data-label="Warehouse Name">
                                                    <?php
                                                    $warehouseData = $item['wherehouse'][0];
                                                    $warehouseNames = array_map(function ($warehouse) {
                                                        return $warehouse[0]['name'];
                                                    }, $warehouseData);
                                                    echo implode('<br>', $warehouseNames);
                                                    ?>
                                                </td>
                                                <td data-label="Product Quality">
                                                    <?php
                                                    $warehouseData = $item['wherehouse'][0];
                                                    $warehouseQuality = array_map(function ($warehouse) {
                                                        return $warehouse[0]['quality'];
                                                    }, $warehouseData);
                                                    echo implode('<br>', $warehouseQuality);
                                                    ?>
                                                </td>
                                                <td data-label="Wherehouse price">
                                                    <?php foreach ($warehousePrice as $warehouseType => $price) : ?>
                                                        <p><?php echo number_format($price, 2, '.', ','); ?></p>
                                                    <?php endforeach; ?>
                                                </td>
                                                <td data-label="Total Quality">
                                                    <?php echo number_format($productTotals[$item['supplyID']]['quality']); ?>
                                                </td>
                                                <td data-label="Total Price">
                                                    <?php
                                                    $totalPrice = $productTotals[$item['supplyID']]['quality'] * $item['supplyPrice'];
                                                    echo number_format($totalPrice, 2, '.', ',');
                                                    ?>
                                                </td>
                                                <td class="is-actions-cell">
                                                    <div class="buttons is-right">
                                                        <a href="" class="button is-small is-primary" type="button">
                                                            <span class="icon"><i class="mdi mdi-eye"></i></span>
                                                        </a>
                                                        <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
    <div id="sample-modal" class="modal">
        <div class="modal-background jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Confirm action</p>
                <button class="delete jb-modal-close" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                <p>This will permanently delete <b>Some Object</b></p>
                <p>This is sample modal</p>
            </section>
            <footer class="modal-card-foot">
                <button class="button jb-modal-close">Cancel</button>
                <button class="button is-danger jb-modal-close">Delete</button>
            </footer>
        </div>
        <button class="modal-close is-large jb-modal-close" aria-label="close"></button>
    </div>
    <script type="text/javascript" src="js/main.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script type="text/javascript" src="js/chart.sample.min.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>

</html>