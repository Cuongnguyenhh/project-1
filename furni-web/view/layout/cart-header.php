<aside class="cart-drawer">
      <div class="cart-drawer-closing">
            <a class="cart-drawer-close">
                  <i class="fa-solid fa-x"></i>
            </a>
      </div>
      <h3 class="cart-drawer-title">
            <span>Giỏ hàng</span>
      </h3>
      <div class="cart-drawer-container">
            <form action="checkout.php" class="cart-drawer-form" method="POST">
                  <div class="cart-drawer-inner">
                        <div class="cart-drawer-product">
                              <?php
                              $i = 0;
                              $total = 0;
                              foreach ($_SESSION['viewcart'] as $value) {

                                    $total_price = $value[2] * $value[4];
                                    $total += $total_price;
                                    echo '
                                          <div class="drawer-product">
                                                <div class="drawer-product-image">
                                                      <a href="#" class="drawer-product-link">
                                                            <img class="drawer-image" src="uploads/'.$value[3].'" alt="">
                                                      </a>
                                                </div>
                                                <div class="drawer-product-content">
                                                      <div class="drawer-product-title">
                                                            <a href="#">' . $value[1] . '</a>
                                                      </div>
                                                      <div class="drawer-product-price">
                                                            <div class="drawer-price-product">
                                                                  <span class="money">$' . $value[2] . '</span>
                                                            </div>
                                                      </div>
                                                      <div class="drawer-product-delete">
                                                            <a href="shop.php?action=delonecart&id=' . $i . '">
                                                                  <span>Remove</span>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>';
                                    $i++;
                              }

                              ?>

                              <div class="drawer-note">
                                    <div class="drawer-note-cart">
                                          <a class="drawer-note-btn" href="#">
                                                <i class="fa fa-times"></i>
                                                thêm ghi chú đơn hàng
                                          </a>
                                    </div>
                              </div>
                              <div class="drawer-cart-footer">
                                    <div class="drawer-cart-content">
                                          <div class="drawer-sub-total">
                                                <span class="drawer-subtotal-heading">Tổng phụ</span>
                                                <span class="drawer-subtotal-price">
                                                      <span class="money">$
                                                            <?= $total ?>
                                                      </span>
                                                </span>
                                          </div>
                                          <div class="drawer-shipping">
                                                Vận chuyển, thuế và chiết khấu sẽ được tính khi thanh toán.
                                          </div>
                                          <div class="drawer-button">
                                                <div class="drawer-button-box">
                                                      <a href="viewcart.php" class="btn btn-drawer">View Cart</a>
                                                </div>
                                                <div class="drawer-button-box">
                                                      <input type="submit" name="checkout" class="btn btn-checkout" value="Check Out">
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <input type="hidden" name="total" value="<?= $total ?>">
            </form>
      </div>
</aside>