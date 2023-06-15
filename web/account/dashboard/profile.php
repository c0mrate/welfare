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
$userID = $_GET['userID'];
$usersData = file_get_contents('users_db.json');
$users = json_decode($usersData, true);
$user = null;
foreach ($users as $userData) {
  if ($userData['userID'] === $userID) {
    $user = $userData;
    break;
  }
}
if ($user) {
  $userID = $user['userID'];
  $username = $user['username'];
  $createDate = $user['createDate'];
  $permission = $user['permission'];
  $name = $user['user_information'][0]['name'];
  $email = $user['email'];
  $phone = $user['user_information'][0]['phone'];
  $line = $user['user_information'][0]['line'];
  $address = $user['user_information'][0]['address1'];
  $province = $user['user_information'][0]['province'];
  $zipcode = $user['user_information'][0]['zipcode'];
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
                <span class="icon">
                  <i class="mdi mdi-menu"></i>
                </span>
                <span>Sample Menu</span>
                <span class="icon">
                  <i class="mdi mdi-chevron-down"></i>
                </span>
              </a>
              <div class="navbar-dropdown">
                <a href="profile.html" class="navbar-item is-active">
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
            <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar is-hoverable">
              <a class="navbar-link is-arrowless">
                <div class="is-user-avatar">
                  <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
                </div>
                <div class="is-user-name">
                  <span>John Doe</span>
                </div>
                <span class="icon"><i class="mdi mdi-chevron-down"></i></span>
              </a>
              <div class="navbar-dropdown">
                <a href="profile.html" class="navbar-item is-active">
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
            <a href="https://justboil.me/bulma-admin-template/free-html-dashboard/" title="About" class="navbar-item has-divider is-desktop-icon-only">
              <span class="icon"><i class="mdi mdi-help-circle-outline"></i></span>
              <span>About</span>
            </a>
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
            <span><b>Admin</b> One HTML</span>
          </div>
        </div>
        <div class="menu is-menu-main">
          <p class="menu-label">General</p>
          <ul class="menu-list">
            <li>
              <a href="admin-tools.html" class="has-icon">
                <span class="icon"><i class="mdi mdi-buffer default"></i></span>
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
            <li>
              <a href="forms.html" class="has-icon">
                <span class="icon"><i class="mdi mdi-table"></i></span>
                <span class="menu-item-label">Sell</span>
              </a>
            </li>
          </ul>
          <p class="menu-label">About</p>
          <ul class="menu-list">
            <li>
              <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="has-icon">
                <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                <span class="menu-item-label">GitHub</span>
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
                <li>Profile</li>
              </ul>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
              <div class="buttons is-right">
                <a href="https://github.com/vikdiesel/admin-one-bulma-dashboard" target="_blank" class="button is-primary">
                  <span class="icon"><i class="mdi mdi-github-circle"></i></span>
                  <span>GitHub</span>
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
                  Profile
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
              <header class="card-header">
                <p class="card-header-title">
                  <span class="icon"><i class="mdi mdi-account-circle default"></i></span>
                  Edit Profile
                </p>
              </header>
              <div class="card-content">
                <form>
                  <div>
                    <span>Create date: <?php echo $createDate; ?></span>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal"><label class="label">
                        User ID: <?php echo $userID; ?>
                      </label></div>
                    <div class="field-label is-normal"><label class="label">
                        Username: <?php echo $username; ?>
                      </label></div>
                  </div>
                  <hr>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">Name</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input placeholder="<?php echo $name; ?>" class="input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal">
                      <label class="label">E-mail</label>
                    </div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <input placeholder="<?php echo $email; ?>" class="input">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                      <div class="field">
                        <div class="control">
                          <button type="submit" class="button is-primary">
                            Submit
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="tile is-parent">
            <div class="card tile is-child">
              <header class="card-header">
                <p class="card-header-title">
                  <span class="icon"><i class="mdi mdi-account default"></i></span>
                  Address / Contact
                </p>
              </header>
              <div class="card-content">
                <div class="field">
                  <label class="label">Address</label>
                  <div class="control is-clearfix">
                    <span>ชื่อ:</span>
                    <span><?php echo $name; ?></span><br><br>
                    <span>ที่อยู่:</span>
                    <span><?php echo $address; ?> <?php echo $province; ?> <?php echo $zipcode; ?></span>
                  </div>
                </div>
                <hr>
                <div class="field">
                  <label class="label">Phone / Line</label>
                  <div class="control is-clearfix">
                    <input type="text" readonly value="เบอร์: <?php echo $phone; ?>" class="input is-static">
                    <input type="text" readonly value="Line ID: <?php echo $line; ?>" class="input is-static">
                    <input type="text" readonly value="Email: <?php echo $email; ?>" class="input is-static">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-lock default"></i></span>
              Change Password
            </p>
          </header>
          <div class="card-content">
            <form>
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">New password</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="password" autocomplete="new-password" name="password" class="input" required>
                    </div>
                    <p class="help">Required. New password</p>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label">Confirm password</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input type="password" autocomplete="new-password" name="password_confirmation" class="input" required>
                    </div>
                    <p class="help">Required. New password one more time</p>
                  </div>
                </div>
              </div>
              <hr>
              <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <button type="submit" class="button is-primary">
                        Submit
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
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

    <script type="text/javascript" src="js/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
  </body>

  </html>

<?php
} else {
  echo "<h1>User not found</h1>";
}
?>