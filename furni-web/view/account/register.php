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
    <main class="content-main" role="main">
    <?php include_once './view/layout/banner.php'; ?>
      <section class="login-register">
            <div class="container">
                  <div class="account">
                        <div class="account-form">
                              <ul class="account-form-nav">
                                    <li class="tab-login-create" onclick="tabAccount(event, 'Login')">
                                          <a aria-expanded="true">Đăng nhập</a>
                                    </li>
                                    <li class="tab-login-create active" onclick="tabAccount(event, 'CreateAccount')">
                                          <a aria-expanded="true">Tạo tài khoản</a>
                                    </li>
                              </ul>
                              <div class="account-content">
                                    <div id="Login" class="tab-change active">
                                          <div class="account-login-form">
                                                <form method="POST" action="#" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="form-group">
                                                                  <input class="form-control" type="text" placeholder="Email">
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd" type="password" class="form-control" placeholder="Mật khẩu" required>
                                                                  <a id="toggle-btn">Hiện</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" class="btn btn-form-login" value="ĐĂNG NHẬP">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Quên mật khẩu?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                                    <div id="CreateAccount" class="tab-change ">
                                          <div class="account-register-form">
                                                <form method="POST" action="#" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="row-flex-margin row-flex">
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" placeholder="Họ" required>
                                                                        </div>
                                                                  </div>
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" placeholder="Tên" required>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="form-group">
                                                                  <input type="text" class="form-control" placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd-login" type="password" class="form-control" placeholder="Mật khẩu" required>
                                                                  <a id="toggle-btn-login">Hiện</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" class="btn btn-form-login" value="TẠO TÀI KHOẢN">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Quên mật khẩu?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
    </main>
    <!--================Home Area =================-->

    <!-- start footer Area -->
    <?php include_once './view/layout/footer.php' ?>
    <!-- End footer Area -->

    <?php include_once './view/layout/scrip.php' ?>
</body>

</html>