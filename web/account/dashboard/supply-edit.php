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
                            <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                            <span class="menu-item-label">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="order.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-buffer default"></i></span>
                            <span class="menu-item-label">Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="sell.php" class="has-icon">
                            <span class="icon"><i class="mdi mdi-buffer default"></i></span>
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
                        Force Create Order
                    </p>
                </header>
                <div class="card-content">
                    <form>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">วันที่</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="วันที่ update สินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                            <div class="field-label is-normal">
                                <label for="userID" class="label">รหัสสินค้า</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รหัสสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">สินค้า</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รายการสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>

                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">Size</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รายการสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                            <div class="field-label is-normal">
                                <label for="userID" class="label">สี</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รายการสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                            <div class="field-label is-normal">
                                <label for="userID" class="label">ขนาด</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รายการสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                            <div class="field-label is-normal">
                                <label for="userID" class="label">คณะ</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="รายการสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label for="userID" class="label">มูลค่าสินค้าต่อหน่วย</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="text" placeholder="มูลค่าสินค้าต่อหน่วย">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <div class="field">
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">คลังสินค้าหลัก</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="number" placeholder="แก้ไขจำนวนสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <button type="submit" class="button is-primary">
                                    <span>update</span>
                                </button>
                                <div class="field">
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">หน้าร้าน</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="number" placeholder="แก้ไขจำนวนสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <button type="submit" class="button is-primary">
                                    <span>update</span>
                                </button>
                                <div class="field">
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">ระยอง</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded has-icons-left">
                                        <input class="input" type="number" placeholder="แก้ไขจำนวนสินค้าคงเหลือ">
                                        <span class="icon is-small is-left"></span>
                                    </p>
                                </div>
                                <button type="submit" class="button is-primary">
                                    <span>update</span>
                                </button>
                                <div class="field">
                                </div>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="button is-danger">
                                <span>update</span>
                            </button>
                        </center>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>

</html>