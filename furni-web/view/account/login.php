<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once './view/layout/meta.php' ?>
</head>

<body>
    <!-- Start Header Area -->
    <?php include_once './view/layout/header.php' ?>
    <!-- End Header Area -->

    <!--================Home Area =================-->
    <main class="main-content" role="main">
        <?php include_once './view/layout/banner.php'; ?>
        <section class="login-register">
            <div class="container">
                <div class="account">
                    <div class="account-form">
                        <ul class="account-form-nav">
                            <li class="tab-login-create active" onclick="tabAccount(event, 'Login')">
                                <a aria-expanded="true">Đăng nhập</a>
                            </li>
                            <li class="tab-login-create" onclick="tabAccount(event, 'CreateAccount')">
                                <a aria-expanded="true">Tạo tài khoản</a>
                            </li>
                        </ul>
                        <div class="account-content">


                            <!-- FORM LOGIN  -->
                            <div id="Login" class="tab-change active">
                                <div class="account-login-form">
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="UTF-8">
                                        <div class="account-form-content">
                                            <div class="form-group">
                                                <input class="form-control" name="email_login" type="text" placeholder="Email">
                                            </div>
                                            <div class="form-group form-group--password">
                                                <input id="pswrd" type="password" name="pass_login" class="form-control" placeholder="Mật khẩu" required>
                                                <a id="toggle-btn">Hiện</a>
                                            </div>
                                            <div class="form-button">
                                                <input type="submit" name="login" class="btn btn-form-login" value="ĐĂNG NHẬP">
                                            </div>
                                            <div class="forgot-password">
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php
                                if (isset($_POST['login']) && ($_POST['login'])) {
                                    $email_login = $_POST['email_login'];
                                    $pass_login = $_POST['pass_login'];
                                    $kq = checkPassword($email_login, $pass_login);
                                    // xác định admin 
                                    $checkq = checkRank($id);
                                    $typeUser = 0;
                                    foreach ($checkq as $value) {
                                        $typeUser = $value['rank'];
                                    }
                                    if ($kq == 0) {
                                        echo 'Đăng Nhập thất bại';
                                    } else {
                                        // var_dump($kq);
                                        $_SESSION['user_name'] = $email_login;
                                        if ($typeUser == 1) {
                                            header('location: ../admin/index.php');
                                        } else {
                                            header('location: ./index.php');
                                        }
                                    }
                                }
                                ?>
                            </div>


                            <!-- FORM REGISTER  -->
                            <div id="CreateAccount" class="tab-change ">
                                <div class="account-register-form">
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="UTF-8">
                                        <div class="account-form-content">
                                            <div class="row-flex-margin row-flex">
                                                <div class="c-6 col">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="first_name" placeholder="Họ" required>
                                                    </div>
                                                </div>
                                                <div class="c-6 col">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="last_name" placeholder="Tên" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email_user" placeholder="Email" required>
                                            </div>
                                            <div class="form-group form-group--password">
                                                <input id="pswrd-login" type="password" class="form-control" name="pass_user" placeholder="Mật khẩu" required>
                                                <span id="toggle-btn-login">Hiện</span>
                                            </div>
                                            <div class="form-button">
                                                <input type="submit" class="btn btn-form-login" name="register" value="TẠO TÀI KHOẢN">
                                            </div>
                                            <div class="forgot-password">
                                                <a href="#">Quên mật khẩu?</a>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['register'])) {
                                        $first_name = $_POST['first_name'];
                                        $last_name = $_POST['last_name'];
                                        $email_user = $_POST['email_user'];
                                        $pass_user = $_POST['pass_user'];
                                        addUser($user, $pass, $email, $phone, $fullname, $address, $rank, $created, $avartar);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            $("input").on('click', '.toggle-btn-login', function() {

                $(this).toggleClass("toggle-btn-login");

                var input = $("#pswrd-login");
                input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr('type', 'password')
            });

        })
    </script>
    <!--================Home Area =================-->

    <!-- start footer Area -->
    <?php include_once './view/layout/footer.php' ?>
    <!-- End footer Area -->

    <?php include_once './view/layout/scrip.php' ?>
</body>

</html>