<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welfare</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="source/img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div class="content-landing-bar nav-th">
        <a>ศูนย์ส่งเสริมสวัสดิการและสิ่งจูงใจ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</a>
    </div>
    <div class="bg-light">
        <div>
            <div>
                <div class="container_admin_menu">
                    <h2 class="admin-menu ">Admin Tools</h2>
                    <form class="admin-menu " action="../logout.php" method="post">
                        <button class="nav-th" type="submit" name="logout">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="../js/main.js"></script>

</body>

</html>