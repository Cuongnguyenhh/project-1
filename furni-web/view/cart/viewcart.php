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
        <section class="shopping-cart">
            <div class="container">
                <div class="cart-container">
                    <h1 class="cart-title">
                        Giỏ hàng
                    </h1>
                    <div class="cart-content">
                        <?php
                              $i = 0;
                              if (isset($_SESSION['viewcart']) && count($_SESSION['viewcart']) > 0) {
                                    echo '<form action="checkout.php" method="POST" novalidate class="cart-form">
                                                <div class="cart-table">
                                                      <div class="cart-header-label">
                                                            <div class="c-2">
                                                                  Image
                                                            </div>
                                                            <div class="c-8">
                                                                  Product
                                                            </div>
                                                            <div class="c-2 text-right">
                                                                  Total
                                                            </div>
                                                      </div>';
                                    $total = 0;
                                    foreach ($_SESSION['viewcart'] as  $value) {
                                          $total_price = $value[2] * $value[4];
                                          $total += $total_price;
                                          
                                          echo '
                                                      <div class="cart-item-wrap">
                                                            <div class="row-flex no-gutter">
                                                            
                                                                  <div class="c-2">
                                                                        <a href="#" class="cart-image">
                                                                              <img src="../../uploads/' . $value[3] . '" alt="">
                                                                        </a>
                                                                  </div>
                                                                  <div class="c-8">
                                                                        <a href="#" class="cart-name">
                                                                              ' . $value[1] . '
                                                                        </a>
                                                                        <p>velatheme</p>
                                                                        <div class="cart-price">
                                                                              <span class="cart-price-product text-right">
                                                                                    <span class="money">$' . $value[2] . '</span>
                                                                              </span>
                                                                        </div>
                                                                        <div class="cart-group row-flex align-items" data-label="Quantity">
                                                                              <div class="addcard-qty">
                                                                                    <button type="button" class="addcard-qty-minus">
                                                                                          <span>-</span>
                                                                                    </button>
                                                                                    <input type="text" value="1" min="1" pattern="[0-9]*">
                                                                                    <button type="button" class="addcard-qty-plus">
                                                                                          <span>+</span>
                                                                                    </button>
                                                                              </div>
                                                                              <input type="submit" name="update" class="btn btn-update-cart" value="Update Cart">
                                                                              <a class="cart-remove" href="index.php?action=delonecart&id=' . $i . '">Remove</a>
                                                                        </div>
                                                                  </div>
                                                                  <div class="c-2 text-right">
                                                                        <span class="cart-total">
                                                                              <span class="money">$' . $total_price . '</span>
                                                                        </span>
                                                                  </div>
                                                            </div>
                                                      </div>';
                                                $i++;
                                    }
                                    echo '</div>
                                                <div class="function-cart row-flex">
                                                      <div class="c-7 col">
                                                            <div class="cart-btn-note">
                                                                  <a href="#" class="btn-cart-note" data-toggle="collapse">
                                                                        <i class="fa fa-times"></i>
                                                                        add order note
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="c-5 col text-right">
                                                            <div class="cart-box-subtotal">
                                                                  <span class="cart-subtotal-title">
                                                                        Subtotal:
                                                                  </span>
                                                                  <span class="cart-subtotal">
                                                                        <div class="money">$'.$total.'</div>
                                                                  </span>
                                                            </div>
                                                            <div class="cart-shipping">
                                                                  Shipping, taxes, and discounts will be calculated at checkout.
                                                            </div>
                                                            <div class="function-cart-button">
                                                                  <input type="submit" name="update" class="btn btn-update-cart" value="Update Cart">
                                                                  
                                                                  <a href="index.php?act=checkout"><input type="submit" name="checkout" class="btn btn-checkout-cart" value="Check Out"></a>
                                                                  
                                                                  
                                                            </div>
                                                      </div>
                                                </div>

                                                <input type="hidden" name="total" value="'.$total.'">
                                            </form>';
                              } else{
                                    echo'<p>Your cart is currently empty.</p>';
                              }
                              ?>
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