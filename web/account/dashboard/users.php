<?php
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  exit();
}
?>
<?php
$usersData = file_get_contents('users_db.json');
$users = json_decode($usersData, true);
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
          <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
            <a class="navbar-link is-arrowless">
              <div class="is-user-avatar">
                <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
              </div>
              <div class="is-user-name"><span>John Doe</span></div>
              <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
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
          <span><b>Admin</b> Tools</span>
        </div>
      </div>
      <div class="menu is-menu-main">
        <p class="menu-label">General</p>
        <ul class="menu-list">
          <li>
            <a href="Dashboard.php" class="has-icon">
              <span class="icon"><i class="mdi mdi-buffer default"></i></span>
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
            <a href="users.php" class="is-active has-icon">
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
              <li>Tables</li>
            </ul>
          </div>
        </div>
        <div class="level-right">
          <div class="level-item">
            <div class="buttons is-right">
              <a href="../account/login.php" target="_blank" class="button is-primary">
                <span class="icon"><i class=""></i></span>
                <span>สมัคร</span>
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
                รายชื่อ Users ทั้งหมด
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
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Line</th>
                    <th>Address</th>
                    <th>Created</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($users as $user) : ?>
                    <tr>

                      <td class="is-image-cell">
                        <div class="image">
                          <img src="<?= $user['img']; ?>" class="is-rounded">
                        </div>
                      </td>

                      <td data-label="Username"><?= $user['username']; ?></td>
                      <td data-label="Name"><?= $user['user_information'][0]['name']; ?></td>
                      <td data-label="Email"><?= $user['email']; ?></td>
                      <td data-label="Phone"><?= $user['user_information'][0]['phone']; ?></td>
                      <td data-label="Line"><?= $user['user_information'][0]['line']; ?></td>
                      <td data-label="Address"><?= $user['user_information'][0]['province']; ?></td>
                      <td data-label="Username"><?= $user['createDate']; ?></td>
                      <td class="is-actions-cell">
                        <div class="buttons is-right">
                          <a href="profile.php?userID=<?= $user['userID']; ?>" class="button is-small is-primary" type="button">
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
  </div>

  <!-- Scripts below are for demo only -->
  <script type="text/javascript" src="js/main.min.js"></script>

  <!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>

</html>