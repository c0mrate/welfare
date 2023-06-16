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
<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-transition has-navbar-fixed-top has-aside-expanded">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Tools</title>

  <!-- Bulma is included -->
  <link rel="stylesheet" href="css/main.min.css">

  <!-- Fonts -->
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
      </ul>
      <p class="menu-label">Examples</p>
      <ul class="menu-list">
        <li>
          <a href="users.php" class=" has-icon">
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
          <a href="sell.php" class="is-active has-icon">
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
            <li>Tables</li>
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
          <div class="level-item"><h1 class="title">
            Responsive Tables
          </h1></div>
        </div>
        <div class="level-right" style="display: none;">
          <div class="level-item"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section is-main-section">
    <div class="notification is-info">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div>
              <span class="icon"><i class="mdi mdi-buffer default"></i></span>
              <b>Responsive table</b>
            </div>
          </div>
        </div>
        <div class="level-right">
          <button type="button" class="button is-small is-white jb-notification-dismiss">Dismiss</button>
        </div>
      </div>
    </div>
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
                <th class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </th>
                <th></th>
                <th>Name</th>
                <th>Company</th>
                <th>City</th>
                <th>Progress</th>
                <th>Created</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Rebecca Bauch</td>
                <td data-label="Company">Daugherty-Daniel</td>
                <td data-label="City">South Cory</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="79">79</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Oct 25, 2020">Oct 25, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Felicita Yundt</td>
                <td data-label="Company">Johns-Weissnat</td>
                <td data-label="City">East Ariel</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="67">67</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jan 8, 2020">Jan 8, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Mr. Larry Satterfield V</td>
                <td data-label="Company">Hyatt Ltd</td>
                <td data-label="City">Windlerburgh</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="16">16</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Dec 18, 2020">Dec 18, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/mr-broderick-kub.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Mr. Broderick Kub</td>
                <td data-label="Company">Kshlerin, Bauch and Ernser</td>
                <td data-label="City">New Kirstenport</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="71">71</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Sep 13, 2020">Sep 13, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/barry-weber.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Barry Weber</td>
                <td data-label="Company">Schulist, Mosciski and Heidenreich</td>
                <td data-label="City">East Violettestad</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="80">80</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jul 24, 2020">Jul 24, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/bert-kautzer-md.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Bert Kautzer MD</td>
                <td data-label="Company">Gerhold and Sons</td>
                <td data-label="City">Mayeport</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="62">62</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Mar 30, 2020">Mar 30, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/lonzo-steuber.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Lonzo Steuber</td>
                <td data-label="Company">Skiles Ltd</td>
                <td data-label="City">Marilouville</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="17">17</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Feb 12, 2020">Feb 12, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/jonathon-hahn.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Jonathon Hahn</td>
                <td data-label="Company">Flatley Ltd</td>
                <td data-label="City">Billiemouth</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="74">74</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Dec 30, 2020">Dec 30, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/ryley-wuckert.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Ryley Wuckert</td>
                <td data-label="Company">Heller-Little</td>
                <td data-label="City">Emeraldtown</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="54">54</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jun 28, 2020">Jun 28, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/sienna-hayes.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Sienna Hayes</td>
                <td data-label="Company">Conn, Jerde and Douglas</td>
                <td data-label="City">Jonathanfort</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="55">55</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Mar 7, 2020">Mar 7, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="notification">
            <div class="level">
              <div class="level-left">
                <div class="level-item">
                  <div class="buttons has-addons">
                    <button type="button" class="button is-active">1</button>
                    <button type="button" class="button">2</button>
                    <button type="button" class="button">3</button>
                  </div>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <small>Page 1 of 3</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="notification is-info">
      <div class="level">
        <div class="level-left">
          <div class="level-item">
            <div>
              <span class="icon"><i class="mdi mdi-buffer default"></i></span>
              <b>Tightly wrapped.</b> Table header becomes card header
            </div>
          </div>
        </div>
        <div class="level-right">
          <button type="button" class="button is-small is-white jb-notification-dismiss">Dismiss</button>
        </div>
      </div>
    </div>

    <div class="card has-table has-table-container-upper-radius">
      <div class="card-content">
        <div class="b-table has-pagination">
          <div class="table-wrapper has-mobile-cards">
            <table class="table is-fullwidth is-striped is-hoverable is-fullwidth">
              <thead>
              <tr>
                <th class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </th>
                <th></th>
                <th>Name</th>
                <th>Company</th>
                <th>City</th>
                <th>Progress</th>
                <th>Created</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Rebecca Bauch</td>
                <td data-label="Company">Daugherty-Daniel</td>
                <td data-label="City">South Cory</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="79">79</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Oct 25, 2020">Oct 25, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/felicita-yundt.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Felicita Yundt</td>
                <td data-label="Company">Johns-Weissnat</td>
                <td data-label="City">East Ariel</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="67">67</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jan 8, 2020">Jan 8, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/mr-larry-satterfield-v.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Mr. Larry Satterfield V</td>
                <td data-label="Company">Hyatt Ltd</td>
                <td data-label="City">Windlerburgh</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="16">16</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Dec 18, 2020">Dec 18, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/mr-broderick-kub.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Mr. Broderick Kub</td>
                <td data-label="Company">Kshlerin, Bauch and Ernser</td>
                <td data-label="City">New Kirstenport</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="71">71</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Sep 13, 2020">Sep 13, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/barry-weber.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Barry Weber</td>
                <td data-label="Company">Schulist, Mosciski and Heidenreich</td>
                <td data-label="City">East Violettestad</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="80">80</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jul 24, 2020">Jul 24, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/bert-kautzer-md.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Bert Kautzer MD</td>
                <td data-label="Company">Gerhold and Sons</td>
                <td data-label="City">Mayeport</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="62">62</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Mar 30, 2020">Mar 30, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/lonzo-steuber.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Lonzo Steuber</td>
                <td data-label="Company">Skiles Ltd</td>
                <td data-label="City">Marilouville</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="17">17</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Feb 12, 2020">Feb 12, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/jonathon-hahn.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Jonathon Hahn</td>
                <td data-label="Company">Flatley Ltd</td>
                <td data-label="City">Billiemouth</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="74">74</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Dec 30, 2020">Dec 30, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/ryley-wuckert.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Ryley Wuckert</td>
                <td data-label="Company">Heller-Little</td>
                <td data-label="City">Emeraldtown</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="54">54</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Jun 28, 2020">Jun 28, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
                    <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button">
                      <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="is-checkbox-cell">
                  <label class="b-checkbox checkbox">
                    <input type="checkbox" value="false">
                    <span class="check"></span>
                  </label>
                </td>
                <td class="is-image-cell">
                  <div class="image">
                    <img src="https://avatars.dicebear.com/v2/initials/sienna-hayes.svg" class="is-rounded">
                  </div>
                </td>
                <td data-label="Name">Sienna Hayes</td>
                <td data-label="Company">Conn, Jerde and Douglas</td>
                <td data-label="City">Jonathanfort</td>
                <td data-label="Progress" class="is-progress-cell">
                  <progress max="100" class="progress is-small is-primary" value="55">55</progress>
                </td>
                <td data-label="Created">
                  <small class="has-text-grey is-abbr-like" title="Mar 7, 2020">Mar 7, 2020</small>
                </td>
                <td class="is-actions-cell">
                  <div class="buttons is-right">
                    <button class="button is-small is-primary" type="button">
                      <span class="icon"><i class="mdi mdi-eye"></i></span>
                    </button>
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


<script type="text/javascript" src="js/main.min.js"></script>
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">
</body>
</html>
