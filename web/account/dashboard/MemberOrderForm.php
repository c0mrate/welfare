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
                <?php
                function findUserByID($userID)
                {
                    $data = file_get_contents('users_db.json');
                    $users = json_decode($data, true);

                    foreach ($users as $user) {
                        if ($user['userID'] === $userID) {
                            return $user;
                        }
                    }
                    return null;
                }
                $userID = $_GET['userID'];
                $user = findUserByID($userID);
                if ($user) {
                ?>
                    <div class="card-content">
                        <form method="post" action="search.php">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label for="userID" class="label">User ID / Username</label>
                                </div>
                                <div class="field-body">
                                    <div class="field is-expanded">
                                        <div class="field has-addons">
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <input class="input is-success" type="text" placeholder="User ID" value="Customer ID: <?php echo $user['userID']; ?>" readonly>
                                                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                                <span class="icon is-small is-right"><i class="mdi mdi-check"></i></span>
                                            </p>
                                            <p class="control is-expanded">
                                                <input class="input" type="text" placeholder="Username" value="Username: <?php echo $user['username']; ?>" readonly>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label for="userID" class="label">Email / Phone, Line</label>
                                </div>
                                <div class="field-body">
                                    <div class="field is-expanded">
                                        <div class="field has-addons">
                                            <p class="control is-expanded has-icons-left has-icons-right">
                                                <input class="input" type="email" placeholder="Email" value="Email: <?php echo $user['email']; ?>" readonly>
                                                <span class="icon is-small is-left"><i class="mdi mdi-mail"></i></span>
                                            </p>
                                            <p class="control is-expanded">
                                                <input class="input" type="tel" placeholder="Phone number / Line ID" value="Phone: <?php echo $user['user_information'][0]['phone']; ?> Line: <?php echo $user['user_information'][0]['line']; ?>" readonly>
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
                                            <input class="input" type="text" placeholder="Customer name" value="ชื่อ: <?php echo $user['user_information'][0]['name']; ?>" readonly>
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
                                            <textarea class="textarea" placeholder="" readonly>ที่อยู่: <?php echo $user['user_information'][0]['address'] . ' ' . $user['user_information'][0]['province'] . ' ' . $user['user_information'][0]['zipcode']; ?></textarea>
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
                <?php
                } else {
                    echo "User not found.";
                }
                ?>
            </div>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-ballot-outline default"></i></span>
                        Custom elements
                    </p>
                </header>
                <div class="card-content">
                    <div class="field has-check is-horizontal">
                        <div class="field-label"><label class="label">Checkbox</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field is-grouped-multiline is-grouped">
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="lorem">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">Lorem</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="ipsum">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">Ipsum</span>
                                        </label>
                                    </div>
                                    <div class="control">
                                        <label class="b-checkbox checkbox"><input type="checkbox" value="dolore">
                                            <span class="check is-primary"></span>
                                            <span class="control-label">Dolore</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="field has-check is-horizontal">
                        <div class="field-label"><label class="label">Radio</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field is-grouped-multiline is-grouped">
                                    <div class="control"><label class="b-radio radio"><input type="radio" name="sample-radio" value="one">
                                            <span class="check"></span>
                                            <span class="control-label">One</span>
                                        </label></div>
                                    <div class="control"><label class="b-radio radio"><input type="radio" name="sample-radio" value="two">
                                            <span class="check"></span>
                                            <span class="control-label">Two</span>
                                        </label>
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
                        <div class="field-label is-normal"><label class="label">File</label></div>
                        <div class="field-body">
                            <div class="field">
                                <div class="field file">
                                    <label class="upload control">
                                        <a class="button is-primary">
                                            <span class="icon"><i class="mdi mdi-upload"></i></span>
                                            <span>Pick a file</span>
                                        </a>
                                        <input type="file">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script type="text/javascript" src="js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>

</html>