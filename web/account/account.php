<?php
session_start();
if (isset($_SESSION['username'])) {
    $data = file_get_contents('dashboard/users_db.json');
    $users = json_decode($data, true);
    if ($users !== null) {
        $loggedInUser = $_SESSION['username'];
        foreach ($users as $user) {
            if ($user['username'] === $loggedInUser) {
                $username = $user['username'];
                $email = $user['email'];
                $userInformation = $user['user_information'][0]; // Get the first user information object
                $name = $userInformation['name'];
                $phone = $userInformation['phone'];
                $line = $userInformation['line'];
                $address1 = $userInformation['address1'];
                $province = $userInformation['province'];
                $zipcode = $userInformation['zipcode'];
                break;
            }
        }
    } else {
        echo 'Error decoding JSON data.';
    }
} else {
    echo 'User not logged in.';
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
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-white">
                    <div class="con-a-center">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto font_increase_size">
                                <a href="../index.php" class="nav-item nav-link nav-th">เกี่ยวกับ</a>
                                <a href="../store.html" class="nav-item nav-link nav-th">หน้าหลัก</a>
                                <a href="../product.html" class="nav-item nav-link nav-th">สินค้าทั้งหมด</a>
                                <a href="../detail.html" class="nav-item nav-link nav-th">รายละเอียดสินค้า</a>
                                <a href="../status.php" class="nav-item nav-link nav-th">สถานะคำสั่งซื้อ</a>
                            </div>
                            <div class="navbar-nav ml-auto py-0 d-none d-lg-block nav-th">
                                <?php if (isset($username)) : ?>
                                    <span>สวัสดีครับ &#9995;,คุณ
                                        <?php echo $username; ?>
                                    </span>
                                    <a href="account.php">
                                        <i class="fas fa-user text-landing" id="user-icon"></i>
                                    </a>
                                <?php else : ?>
                                    <a href="login.php">
                                        <i class="fas fa-user text-landing" id="user-icon"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="account_body_a">
        <div class="account_container_a account_th" id="container">
            <div class="account_form-container account_sign-up-container">
                <form class="account_form" action="add_data.php" method="POST">
                    <h1 class="account_h1">ข้อมูลเพิ่มเติม</h1>
                    <span class="account_span"></span>
                    <input type="text" name="name" value="<?php echo $name; ?>" placeholder="ชื่อ-นามสกุล" class="account_input" required />
                    <input type="number" name="phone" value="<?php echo $phone; ?>" placeholder="095-XXX-XXXX" class="account_input" required />
                    <input type="text" name="line" value="<?php echo $line; ?>" placeholder="Line ID" class="account_input" />
                    <input type="text" name="address1" value="<?php echo $address1; ?>" placeholder="ที่อยู่" class="account_input" required />
                    <input type="text" name="province" value="<?php echo $province; ?>" placeholder="จังหวัด" class="account_input" required />
                    <input type="text" name="zipcode" value="<?php echo $zipcode; ?>" placeholder="รหัสไปรษณีย์" class="account_input" required />
                    <button type="submit" class="account_button">ยืนยัน</button>
                </form>
            </div>
            <!-- Rest of the HTML code -->
            <div class="account_form-container account_sign-in-container">
                <form class="account_form" action="../logout.php" method="post">
                    <h1 class="account_h1">ข้อมูลสมาชิก</h1>
                    <input placeholder="Username: <?php echo $username; ?>" class="account_input" readonly />
                    <input placeholder="Email: <?php echo $email; ?>" class="account_input" readonly />
                    <button class="account_button" type="submit" name="logout">ออกจากระบบ</button>
                </form>
            </div>
            <div class="account_overlay-container">
                <div class="account_overlay">
                    <div class="account_overlay-panel account_overlay-left">
                        <h1 style='font-size:100px;'>&#9997;</h1>
                        <h1 class="account_h1">กรอกข้อมูลที่อยู่หรือสถานที่จัดส่ง</h1>
                        <p class="account_p">To keep connected with us, please login with your personal info</p>
                        <button class="account_button account_ghost" id="signIn">กลับ</button>
                    </div>
                    <div class="account_overlay-panel account_overlay-right">
                        <h1 style='font-size:100px;'>&#9997;</h1>
                        <h1 class="account_h1">เพื่มที่อยู่ได้เลยครับ</h1>
                        <p class="account_p">Enter your personal details and start your journey with us</p>
                        <button class="account_button account_ghost" id="signUp">กรอกข้อมูลสมาชิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="effect.js"></script>
    <div>
        <div>
            <div class="content_landing">
                <div>
                    <h1 class="section_banner">
                        เกี่ยวกับร้านค้า
                    </h1>
                    <p class="end_line_"></p>
                </div>
                <div class="container_landing">
                    <div class="left-section">
                        <div>
                            <h2>ติดต่อ</h2>
                            <hr>
                            <label class="span_landing_header">สถานที่ตั้ง</label>
                            <p>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ อาคาร 46 ชั้น1 ร้านค้าสวัสดิการ 1518
                                ถนนประชาราษฎร์ 1 แขวงวงศ์สว่าง เขตบางซื่อ กรุงเทพมหานคร 10800 </p>
                            <p>
                                เวลา : จันทร์ - ศุกร์ : 8:00 - 16:00
                            </p>
                            <p>
                                โทรศัพท์ : 02-585-7910, 081-875-7910
                            </p>
                            <p>
                                แฟกซ์ : 0-2585-7910
                            </p>
                            <p>
                                อีเมลติดต่อ : welfare@op.kmutnb.ac.th
                            </p>
                            <div class="end_content_info"></div>
                            <hr>
                        </div>
                    </div>
                    <div class="right-section">
                        <h2>แผนที่</h2>
                        <hr>
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=%E0%B8%A1%E0%B8%88%E0%B8%9E&key=AIzaSyAVsDiW6U_PcxGAmm6HKZlk6r446_7ToJo" width="700" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <hr>
                    </div>
                </div>
                <div class="buttom_landing"></div>
            </div>
        </div>
        <div class="end_">
            <div class="social-icons">
                <div class="social-icons-facebook">
                    <a href="https://facebook.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                </div>
                <div class="social-icons-ig">
                    <a href="https://www.instagram.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                </div>
                <div class="social-icons-line">
                    <a href="https://www.line.com" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-line" viewBox="0 0 16 16">
                            <path d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-landing-bar nav-th">
            <a>Under Maintenance</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>

</body>

</html>