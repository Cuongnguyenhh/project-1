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
      <?php
      if (isset($_POST['checkout'])) {
            $total = $_POST['total'];
      }
      $tax = round((0.1 * $total), 1);
      $ship = 10;
      $bill = round(($total + $tax + $ship), 1);
      ?>
      <div class="checkout">
            <div class="container">
                  <div class="row-flex">
                        <div class="c-7 col">
                              <div class="checkout-header">
                                    <a href="#" class="header__logo">
                                          <img class="header__image-logo" src="./public/images/logo_dark.svg" alt="">
                                    </a>
                                    <ul class="header__list">
                                          <li>
                                                <a href="#">Giỏ hàng</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Thông tin</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Đang chuyển hàng</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Thanh toán</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                    </ul>
                              </div>
                              <div class="checkout-main">
                                    <div class="main__info">
                                          <div class="info__header">
                                                <h2 class="info__header-title">
                                                      Thông tin liên lạc
                                                </h2>
                                                <p class="info__header-account">
                                                      Bạn có sẳn sàng để tạo một tài khoản?
                                                      <a href="#">Đăng nhập</a>
                                                </p>
                                          </div>
                                          <div class="info__content">
                                                <div class="info__field-set">
                                                      <input type="email" placeholder="Email" aria-required="true">
                                                </div>
                                                <div class="info__content-desc">
                                                      <input id="checkbox__contact-info" type="checkbox">
                                                      <label for="checkbox__contact-info">
                                                            Gửi email cho tôi với tin tức và ưu đãi
                                                      </label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="main__shipping">
                                          <div class="shipping__header">
                                                <h2 class="shipping__header-title">
                                                      Địa chỉ giao hàng
                                                </h2>
                                          </div>
                                          <div class="shipping__content">
                                                <form action="#" method="post" class="shipping__form">
                                                      <div class="field">
                                                            <label for="select-place">Quốc gia / khu vực</label>
                                                            <select name="" id="select-place">
                                                                  <option value="Qatar">Việt Nam</option>
                                                                  <option value="Qatar">Qatar</option>
                                                            </select>
                                                      </div>
                                                      <div class="field__double">
                                                            <div class="field field__first">
                                                                  <input type="text" placeholder="First name (optional)">
                                                            </div>
                                                            <div class="field field__last">
                                                                  <input type="text" placeholder="Last name">
                                                            </div>
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="Address">
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="Apartment, suite, etc. (optional)">
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="City">
                                                      </div>
                                                      <div class="field__save">
                                                            <input type="checkbox" id="checkbox__save-remember">
                                                            <label for="checkbox__save-remember">
                                                                  Lưu thông tin này cho lần sau
                                                            </label>
                                                      </div>
                                                </form>
                                          </div>
                                          <div class="shipping__footer">
                                                <a href="./view-cart.php" class="shipping__link-back">
                                                      <i class="fa-sharp fa-solid fa-angle-left"></i>
                                                      Trở lại giỏ hàng
                                                </a>
                                                <button class="btn btn-shipping">Tiếp tục chuyển hàng</button>
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
                        </div>


                        <!-- ASIDE  -->
                        <div class="c-5 col">
                              <div class="sidebar-content">
                                    <?php 
                                    foreach ($_SESSION['viewcart'] as  $value) {
                                          echo'<table class="sidebar__table">
                                          <tr class="product__item">
                                                <td class="product__image">
                                                      <img src="' . $value[3] . '" alt="">
                                                </td>
                                                <td class="product__desc">
                                                      ' . $value[1] . '
                                                </td>
                                                <td class="product__price">
                                                      <span>$' . $value[2] . '</span>
                                                </td>
                                          </tr>
                                    </table>';
                                    }
                                    ?>




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
                                                            <th>
                                                                  Thuế (ước tính)
                                                            </th>
                                                            <td><?= $tax ?></td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <tr class="total">
                                                            <th>Tổng cộng</th>
                                                            <td>
                                                                  <span>VND</span>
                                                                  <span>
                                                                        <?= $bill ?>
                                                                  </span>
                                                            </td>
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

      <!-- start footer Area -->
      <?php include_once './view/layout/footer.php' ?>
      <!-- End footer Area -->

      <?php include_once './view/layout/scrip.php' ?>
</body>

</html>