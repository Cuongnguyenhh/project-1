<!DOCTYPE html>
<html lang="en">

<head> <?php include_once './view/layout/meta.php' ?> </head>

<body>
      <!-- Start Header Area -->
      <?php include_once './view/layout/header.php' ?>
      <!-- End Header Area -->
      <!--================Home Area =================-->
      <main class="main-content" role="main">
            <div class="banner-pages">
                  <div class="banner-content">
                        <div class="banner-images">
                              <img src="assets/img/banner-pages.webp" alt="banner-pages">
                        </div>
                        <nav class="banner-navbar container">
                              <div class="banner-navbar__wrap">
                                    <h1>Tài khoản</h1>
                                    <ol class="banner-list">
                                          <li class="banner-list-item">
                                                <a href="#">
                                                      <span>Trang chủ</span>
                                                </a>
                                          </li>
                                          <li class="banner-list-item active">
                                                <span>Tài khoản</span>
                                          </li>
                                    </ol>
                              </div>
                        </nav>
                  </div>
            </div>
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
                                                      <form method="POST" action="controllers/loggin.php" accept-charset="UTF-8">
                                                            <div class="account-form-content">
                                                                  <div class="form-group">
                                                                        <input id="login-email-check" class="form-control" name="email" type="text" placeholder="Email">
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="form-group form-group--password">
                                                                        <input id="pswrd" type="password" name="psw" class="form-control" placeholder="Mật khẩu">
                                                                        <a id="toggle-btn">Hiện</a>
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="form-button">
                                                                        <button type="submit" name="login" class="btn btn-form-login">Đăng nhập </button>
                                                                  </div>
                                                                  <div class="forgot-password">
                                                                        <a href="./admin_remake\/forgot.php">Quên mật
                                                                              khẩu?</a>
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
                                                } ?>
                                          </div>
                                          <!-- FORM REGISTER  -->
                                          <div id="CreateAccount" class="tab-change ">
                                                <div class="account-register-form">
                                                      <form method="POST" action="controllers/sigup.php" accept-charset="UTF-8">
                                                            <div class="account-form-content">
                                                                  <div class="row-flex-margin row-flex">
                                                                        <div class="c-6 col">
                                                                              <div class="form-group">
                                                                                    <input type="text" id="register-first-check" class="form-control" name="first_name" placeholder="Họ">
                                                                                    <span class="form-message"></span>
                                                                              </div>
                                                                        </div>
                                                                        <div class="c-6 col">
                                                                              <div class="form-group">
                                                                                    <input id="register-last-check" type="text" class="form-control" name="last_name" placeholder="Tên">
                                                                                    <span class="form-message"></span>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <input id="register-email-check" type="text" class="form-control" name="email" placeholder="Email">
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="form-group form-group--password">
                                                                        <input id="pswrd-login" type="password" class="form-control" name="psw" placeholder="Mật khẩu">
                                                                        <span id="toggle-btn-login">Hiện</span>
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="form-group form-group--password">
                                                                        <input id="pswrd-register-check" type="password" class="form-control" name="pass_user" placeholder="Nhập lại mật khẩu">
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="form-button">
                                                                        <button type="submit" class="btn btn-form-login" name="signin"> TẠO TÀI KHOẢN"</button>
                                                                  </div>
                                                                  <div class="forgot-password">
                                                                        <a href="./admin_remake\/forgot.php">Quên mật
                                                                              khẩu?</a>
                                                                  </div>
                                                            </div>
                                                      </form>
                                                      <?php if (isset($_POST['register'])) {
                                                            $first_name = $_POST['first_name'];
                                                            $last_name = $_POST['last_name'];
                                                            $email_user = $_POST['email_user'];
                                                            $pass_user = $_POST['pass_user'];
                                                            addUser($user, $pass, $email, $phone, $fullname, $address, $rank, $created, $avartar);
                                                      } ?>
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
                        input.attr('type') === 'password' ? input.attr('type', 'text') : input.attr(
                              'type', 'password')
                  });
            })
      </script>
      <!--================Home Area =================-->
      <!-- start footer Area --> <?php include_once './view/layout/footer.php' ?>
      <!-- End footer Area --> <?php include_once './view/layout/scrip.php' ?> <script>
            function validator(options) {
                  function validate(inputElement, rule) {
                        var errorMessage = rule.test(inputElement.value)
                        var errorElement = inputElement.parentElement
                              .querySelector(options.errorSelector)
                        if (errorMessage) {
                              errorElement.innerText = errorMessage
                              inputElement.parentElement.classList.add(
                                    'invalid')
                        } else {
                              errorElement.innerText = ''
                              inputElement.parentElement.classList.remove('invalid')
                        }
                  }
                  const formElement = document.querySelector(options.form)
                  if (formElement) {
                        formElement.onsubmit = (e) => {
                              e.preventDefault();
                              options.rules.forEach(function(rule) {
                                    var inputElement = formElement.querySelector(rule
                                          .selector)
                                    validate(inputElement, rule)
                              })
                        }
                        options.rules.forEach((rule) => {
                              var inputElement = formElement.querySelector(rule.selector)
                              if (
                                    inputElement
                              ) {
                                    // Xử lý trường hợp khi blur ra ngoài 
                                    inputElement.onblur = function() {
                                          validate(inputElement, rule)
                                    } // Xử lý khi người dùng nhập vào input 
                                    inputElement.oninput = () => {
                                          var errorElement = inputElement.parentElement.querySelector(
                                                options.errorSelector)
                                          errorElement.innerText =
                                                ''
                                          inputElement.parentElement.classList.remove('invalid')
                                    }
                              }
                        })
                  }
            }
            validator.isEmail = (selector) => {
                  return {
                        selector: selector,
                        test: function(value) {
                              var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                              return regex.test(value) ? undefined : 'Vui lòng nhập đúng email'
                        }
                  }
            }
            validator.isRequired = (selector) => {
                  return {
                        selector: selector,
                        test: function(value) {
                              return value.trim() ? undefined : 'Vui lòng nhập trường này'
                        }
                  }
            }
            validator.isConfimed = (selector, getCofirmValue, message) => {
                  return {
                        selector: selector,
                        test: function(value) {
                              return value === getCofirmValue() ? undefined : message ||
                                    'Giá trị nhập vào không chính xác'
                        }
                  }
            }
            validator({
                  form: '#form-register',
                  errorSelector: '.form-message',
                  rules: [validator.isEmail('#register-email-check'),
                        validator.isRequired('#register-last-check'),
                        validator.isRequired('#register-first-check'),
                        validator.isRequired('#pswrd-login'),
                        validator.isConfimed('#pswrd-register-check', function() {
                              return document.querySelector('#form-register #pswrd-login').value
                        }, 'Mật khẩu nhập lại không chính xác')
                  ]
            })
            validator({
                  form: '#login-form',
                  errorSelector: '.form-message',
                  rules: [validator.isEmail('#login-email-check'), validator.isRequired('#pswrd'), ]
            })
      </script>
</body>

</html>