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
                    <form>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">Order ID</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <input class="input is-success" type="text" placeholder="User ID" value="<?php echo $_GET['orderID']; ?>" readonly>
                                            <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                            <span class="icon is-small is-right"><i class="mdi mdi-check"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label"></div>
                            <div class="field-body">
                                <div class="field is-expanded">
                                    <div class="field has-addons">
                                        <p class="control is-expanded has-icons-left has-icons-right">
                                            <input class="input" type="email" placeholder="Email" value="">
                                            <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                        </p>
                                        <p class="control is-expanded">
                                            <input class="input" type="tel" placeholder="Phone number / Line ID">
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
                                        <input class="input" type="text" placeholder="Customer name">
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
                                        <textarea class="textarea" placeholder="Customer address"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="field is-horizontal">
                            <div class="field-label">
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="field is-grouped">
                                        <div class="control">
                                            <a href="create-order.php">
                                                <button type="button" class="button is-primary is-outlined">
                                                    <span>Reset</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <section class="section is-main-section">
                <div class="card has-table">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                            Clients
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
                                            <th></th>
                                            <th>Name</th>
                                            <th>Quality</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Length</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-label=""></td>
                                            <td data-label="Name"></td>
                                            <td data-label="Quality"></td>
                                            <td data-label="Size"></td>
                                            <td data-label="Color"></td>
                                            <td data-label="Length"></td>
                                            <td data-label="Price"></td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot-outline default"></i></span>
                        Custom elements
                    </p>
                </header>
                <div class="card-content">
                    <div class="field is-horizontal">
                        <div class="field-label"><label class="label">ชื่อสินค้า</label></div>
                        <div class="field-body">
                            <div class="field">
                                <input class="input" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field has-check is-horizontal">
                        <div class="field-label"><label class="label">จำนวน</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field is-grouped-multiline is-grouped">
                                    <div class="control">
                                        <input class="input" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field has-check is-horizontal">
                        <div class="field-label"><label class="label">size</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field is-grouped-multiline is-grouped">
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="lorem">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">S</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="lorem">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">M</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="ipsum">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">L</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="dolore">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">XL</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field has-check is-horizontal">
                        <div class="field-label"><label class="label">ขนาด</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field is-grouped-multiline is-grouped">
                                    <div class="control">
                                        <input class="input" type="text" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field is-horizontal">
                        <div class="field-label"><label class="label">Switch</label></div>
                        <div class="field-body">
                            <div class="field">
                                <label class="switch is-rounded"><input type="checkbox" value="false">
                                    <span class="check"></span>
                                    <span class="control-label">Default</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field is-horizontal">
                        <div class="field-label is-normal"><label class="label"></label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button is-primary">
                                            <span>Create Order</span>
                                        </a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
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