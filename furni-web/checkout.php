<!DOCTYPE html>
<html lang="en">
<?php session_start(); ob_start(); ?>

<head> <?php include_once './view/layout/meta.php' ?> </head>

<body>
      <!--================Home Area =================-->
      <?php $total = 0; ?> <div class="checkout">
            <div class="container">
                  <div class="row-flex">
                        <div class="c-7 col">
                              <div class="checkout-header">
                                    <a href="index.php" class="header__logo">
                                          <img class="header__image-logo" src="assets/img/logo_dark.svg" alt="">
                                    </a>
                                    <ul class="header__list">
                                          <li>
                                                <a href="viewcart.php">Giỏ hàng</a>
                                                <i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="checkout.php">Thông tin</a>
                                          </li>
                                    </ul>
                              </div>
                              <div class="checkout-main">
                                    <div class="main__shipping">
                                          <div class="shipping__content">
                                                <form action="payment.php" method="post" class="shipping__form">
                                                      <div class="main__info">
                                                            <div class="info__header">
                                                                  <h2 class="info__header-title"> Thông tin liên lạc
                                                                  </h2>
                                                                  <p class="info__header-account">
                                                                        <a href="#">Đăng nhập</a>
                                                                  </p>
                                                            </div>
                                                            <div class="info__content">
                                                                  <div class="info__field-set">
                                                                        <input type="email" name="email_contact"
                                                                              id="email-check" placeholder=" Email"
                                                                              aria-required="true">
                                                                        <span class="form-message"></span>
                                                                  </div>
                                                                  <div class="info__content-desc">
                                                                        <input id="checkbox__contact-info"
                                                                              type="checkbox">
                                                                        <label for="checkbox__contact-info">
                                                                              Gửi email cho tôi với tin tức và ưu đãi
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <div class="field__double">
                                                            <div class="field field__first">
                                                                  <input id="first-check" type="text"
                                                                        name="fname_contact" placeholder="First name">
                                                                  <span class="form-message"></span>
                                                            </div>
                                                            <div class="field field__last">
                                                                  <input id="last-check" type="text"
                                                                        name="lname_contact" placeholder="Last name">
                                                                  <span class="form-message"></span>
                                                            </div>
                                                      </div>
                                                      <div class="field">
                                                            <input id="address-check" type="text" name="add_contact"
                                                                  placeholder="Address">
                                                            <span class="form-message"></span>
                                                      </div>
                                                      <div class="field">
                                                            <input id="optional-check" type="text" name="add2_contact"
                                                                  placeholder="Apartment, suite, etc. (optional)">
                                                            <span class="form-message"></span>
                                                      </div>
                                                      <div class="field">
                                                            <input id="city-check" type="text" name="city_contact"
                                                                  placeholder="City">
                                                            <span class="form-message"></span>
                                                      </div>
                                                      <div class="field__save">
                                                            <input type="checkbox" id="checkbox__save-remember">
                                                            <label for="checkbox__save-remember"> Lưu thông tin này cho
                                                                  lần sau </label>
                                                      </div>
                                                      <div class="shipping__footer">
                                                            <a href="viewcart.php" class="shipping__link-back">
                                                                  <i class="fa-sharp fa-solid fa-angle-left"></i> Trở
                                                                  lại giỏ hàng
                                                            </a>
                                                            <button type="submit" class="btn btn-shipping">
                                                                  <a href#!="#!">Tiếp tục chuyển hàng</a>
                                                            </button>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                              <div class="checkout-footer">
                                    <ul class="footer__policy-list">
                                          <li><a href="">Chính sách hoàn lại tiền</a></li>
                                          <li><a href="">Chính sách vận chuyển</a></li>
                                          <li><a href="">Chính sách bảo mật</a></li>
                                          <li><a href="">Điều khoản dịch vụ</a></li>
                                    </ul>
                              </div>
                        </div> <!-- ASIDE  -->
                        <div class="c-5 col">
                              <div class="sidebar-content">
                                    <?php foreach ($_SESSION['viewcart'] as  $value) : $total_price = $value[2] * $value[4]; $total += $total_price; $tax = round((0.1 * $total), 1); $ship = 10; $bill = round(($total + $tax + $ship), 1); ?>
                                    <table class="sidebar__table">
                                          <tr class="product__item">
                                                <td class="product__image"> <img src="uploads/<?= $value[3] ?>" alt="">
                                                      <span class="product__quantity"><?=$value[4]?></span>
                                                </td>
                                                <td class="product__desc"> <?= $value[1] ?> </td>
                                                <td class="product__price"> <span><?= $value[2] ?></span> </td>
                                          </tr>
                                    </table> <?php endforeach ?>
                                    <!-- BILL  -->
                                    <div class="sidebar__order">
                                          <table class="sibar__table-order">
                                                <tbody>
                                                      <tr class="total subtotal">
                                                            <th>Tổng phụ</th>
                                                            <td><?= $total ?></td>
                                                      </tr>
                                                      <tr class="total shipping">
                                                            <th>Đang chuyển hàng</th>
                                                            <td><?= $ship ?></td>
                                                      </tr>
                                                      <tr class="total taxes">
                                                            <th> Thuế (ước tính) </th>
                                                            <td><?= $tax ?></td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <tr class="total">
                                                            <th>Tổng cộng</th>
                                                            <td> <span>VND</span> <span> <?= $bill ?> </span> </td>
                                                      </tr>
                                                </tfoot>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!--================Home Area =================-->
      <!-- start footer Area --> <?php include_once './view/layout/footer.php' ?>
      <!-- End footer Area --> <?php include_once './view/layout/scrip.php' ?> <script>
      // VALIDATE 
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
                        if (inputElement) {
                              // Xử lý trường hợp khi blur ra ngoài
                              inputElement.onblur = function() {
                                    validate(inputElement, rule)
                              }
                              // Xử lý khi người dùng nhập vào input
                              inputElement.oninput = () => {
                                    var errorElement = inputElement.parentElement.querySelector(
                                          options.errorSelector)
                                    errorElement.innerText = ''
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
      validator.isConfimed = (selector, getCofirmValue) => {
            return {
                  selector: selector,
                  test: function(value) {
                        return value === getCofirmValue() ? undefined : 'Giá trị nhập vào không chính xác'
                  }
            }
      }
      validator({
            form: '.shipping__form',
            errorSelector: '.form-message',
            rules: [validator.isEmail('#email-check'), validator.isRequired('#last-check'), validator
                  .isRequired('#first-check'), validator.isRequired('#optional-check'), validator
                  .isRequired('#city-check'), validator.isRequired('#address-check'),
            ]
      })
      validator.isRequired = (selector) => {
            return {
                  selector: selector,
                  test: function(value) {
                        return value.trim() ? undefined : 'Vui lòng nhập trường này'
                  }
            }
      }
      validator({
            form: '.shipping__form',
            errorSelector: '.form-message',
            rules: [validator.isEmail('#email-check'), validator.isEmail('#register-email-check'), validator
                  .isRequired('#last-check'), validator.isRequired('#first-check'), validator
                  .isRequired('#optional-check'), validator.isRequired('#city-check'), validator
                  .isRequired('#address-check'), validator.isRequired('#pswrd-login'), validator
                  .isConfimed('')
            ]
      })
      </script>
</body>

</html>