
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
      <div class="payment">
            <div class="payment__container">
                  <div class="payment__row">
                        <div class="payment__info">
                              <header class="header__info">
                                    <div class="info__logo">
                                          <a class="info__link" href="#">
                                                <img src="../../assets/img/logo_dark.svg" alt="Logo Image">
                                          </a>
                                    </div>
                                    <div class="info__navbar">
                                          <ul class="info__navbar-list">
                                                <li class="info__navbar-item">
                                                      <a href="#!">
                                                            Cart
                                                            <i class="fa-solid fa-angle-right"></i>
                                                      </a>
                                                </li>
                                                <li class="info__navbar-item">
                                                      <a href="#!">
                                                            Information
                                                            <i class="fa-solid fa-angle-right"></i>
                                                      </a>
                                                </li>
                                                <li class="info__navbar-item">
                                                      <a href="#!">
                                                            Shipping
                                                            <i class="fa-solid fa-angle-right"></i>
                                                      </a>
                                                </li>
                                                <li class="info__navbar-item">
                                                      <a href="#!">
                                                            Payment
                                                            <i class="fa-solid fa-angle-right"></i>
                                                      </a>
                                                </li>
                                          </ul>
                                    </div>
                              </header>
                              <main class="main__info">
                                    <div class="info__shipping">
                                          <form action="#!" class="shipping__form">
                                                <div class="shipping__table">
                                                      <div class="shipping__row">
                                                            <div class="shipping__inner">
                                                                  <div class="shipping__inner-label">
                                                                        Contact
                                                                  </div>
                                                                  <div class="shipping__inner-content">
                                                                        mint03sanzz@gmail.com
                                                                  </div>
                                                            </div>
                                                            <div class="shipping__link">
                                                                  <a href="#!" class="shipping__link-change">
                                                                        Change
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="shipping__row">
                                                            <div class="shipping__inner">
                                                                  <div class="shipping__inner-label">
                                                                        Ship to
                                                                  </div>
                                                                  <div class="shipping__inner-content">
                                                                        HCM, Can 5 Lau, HCM 100000, Vietnam
                                                                  </div>
                                                            </div>
                                                            <div class="shipping__link">
                                                                  <a href="#!" class="shipping__link-change">
                                                                        Change
                                                                  </a>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="shipping__method">
                                                      <div class="shipping__header">
                                                            <h2>Shipping method</h2>
                                                      </div>
                                                      <div class="shipping__content">
                                                            <div class="content__box">
                                                                  <div class="content__row">
                                                                        <div class="radio__input">
                                                                              <input id="shipping-radio" type="radio" placeholder="Standard Shipping">
                                                                        </div>
                                                                        <label for="shipping-radio" class="radio__label">
                                                                              <span class="radio__primary">
                                                                                    Standard Shipping
                                                                                    </span>
                                                                              <span class="radio__accesory">
                                                                                    $10.00
                                                                              </span>
                                                                        </label>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="shipping__back">
                                                      <a href="#!" class="shipping__back-return">
                                                            <i class="fa-solid fa-angle-left"></i>
                                                            Return to information
                                                      </a>
                                                      <button type="submit" class="shipping__payment btn">
                                                            Continue to payment
                                                      </button>
                                                </div>
                                          </form>
                                    </div>
                              </main>
                              <footer class="footer__info">
                                    <ul class="footer__if-list">
                                          <li>
                                                <a href="#!">Refund policy</a>
                                          </li>
                                          <li>
                                                <a href="#!">Shipping policy</a>
                                          </li>
                                          <li>
                                                <a href="#!">Privacy policy</a>
                                          </li>
                                          <li>
                                                <a href="#!">Terms of service</a>
                                          </li>
                                    </ul>
                              </footer>
                        </div>
                        <div class="payment__total">
                              <div class="total__products">
                                   <div class="total__product-list">
                                          <div class="total__image">
                                                      <div class="total__thumbnail">
                                                            <img src="//cdn.shopify.com/s/files/1/1573/5553/products/3_small.jpg?v=1509980332" alt="Thumbnail image">
                                                      </div>
                                                      <span>1</span>
                                          </div>
                                          <div class="total__desc">
                                                      <h5 class="total__name">Sacrificial Chair Design</h5>
                                                      <span class="total__size">XL</span>
                                          </div>
                                          <div class="total__price">
                                                      <span class="money">$130.00</span>
                                          </div>
                                   </div>
                                   
                                   <div class="total__product-list">
                                          <div class="total__image">
                                                      <div class="total__thumbnail">
                                                            <img src="//cdn.shopify.com/s/files/1/1573/5553/products/3_small.jpg?v=1509980332" alt="Thumbnail image">
                                                      </div>
                                                      <span>1</span>
                                          </div>
                                          <div class="total__desc">
                                                      <h5 class="total__name">Sacrificial Chair Design</h5>
                                                      <span class="total__size">XL</span>
                                          </div>
                                          <div class="total__price">
                                                      <span class="money">$130.00</span>
                                          </div>
                              </div>
                              </div>
                              <div class="total__content">
                                    <table class="total__table">
                                          <tbody>
                                                <tr>
                                                      <th>Subtotal</th>
                                                      <td>$130.00</td>
                                                </tr>
                                                <tr>
                                                      <th>Shipping</th>
                                                      <td>$10.00</td>
                                                </tr>
                                                <tr>
                                                      <th>Estimated taxes </th>
                                                      <td>$13.00</td>
                                                </tr>
                                          </tbody>
                                          <tfoot>
                                                <tr>
                                                      <th>Total</th>
                                                      <td> 
                                                            <span>USD</span>
                                                            <span>$153.00</span>
                                                      </td>
                                                </tr>
                                          </tfoot>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!--================Home Area =================-->

      <?php include_once './view/layout/scrip.php' ?>
</body>

</html>
