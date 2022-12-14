<!DOCTYPE html>
<html lang="en">
<?php
session_start();
ob_start();
?>

<head>
      <?php include_once './view/layout/meta.php' ?>
</head>

<body>
      <!-- Start Header Area -->

      <?php 
      if(isset($_SESSION['email']) && ($_SESSION['type'])==1 ){
      include_once './view/layout/header_admin.php';
      }elseif(isset($_SESSION['email']) && ($_SESSION['type'])!=1){
            include_once './view/layout/header_user.php';
      }else{
            include_once './view/layout/header.php';
      }
       ?>
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
                                    if (isset($_SESSION['viewcart']) && count($_SESSION['viewcart']) > 0) { ?>
                                          
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
                                                      </div>
                                          <?php $total = 0;
                                          foreach ($_SESSION['viewcart'] as $value) {
                                                $total_price = $value[2] * $value[4];
                                                $total += $total_price; ?>

                                                
                                                      <div class="cart-item-wrap">
                                                            <div class="row-flex no-gutter">
                                                            
                                                                  <div class="c-2">
                                                                        <a href="#" class="cart-image">
                                                                              <img src="uploads/<?=$value[3]?>" alt="">
                                                                        </a>
                                                                  </div>
                                                                  <div class="c-8">
                                                                        <a href="#" class="cart-name">
                                                                              <?=$value[1]?>
                                                                        </a>
                                                                        <p>velatheme</p>
                                                                        <div class="cart-price">
                                                                              <span class="cart-price-product text-right">
                                                                                    <span class="money count-price"><?=$value[2]?></span>
                                                                              </span>
                                                                        </div>
                                                                        <form action="shop.php?action=updatecart&id=<?=$i?>" method="POST">
                                                                              <div class="cart-group row-flex align-items" data-label="Quantity">
                                                                                    <div class="cart-quantity">
                                                                                          <div class="addcard-qty">
                                                                                                <button type="button" class="addcard-qty-minus">
                                                                                                      <span>-</span>
                                                                                                </button>
                                                                                                <input class="qty" type="text" value="<?=$value[4]?>" min="1" name="amount" readonly pattern="[0-9]*">
                                                                                                <button type="button" class="addcard-qty-plus">
                                                                                                      <span>+</span>
                                                                                                </button>
                                                                                          </div>
                                                                                    </div>
                                                                                    <button type="submit" class="btn btn-update-cart" name="update" > Update Cart</button>
                                                                                    <a class="cart-remove" href="shop.php?action=delonecart&id=<?=$i?>" >Remove</a>
                                                                              </div>
                                                                        </form>
                                                                  </div>
                                                                  <div class="c-2 text-right">
                                                                        <span class="cart-total">
                                                                              <span class="money total-price"><?=$total_price?></span>
                                                                        </span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <?php $i++;
                                           } ?>
                                          </div>
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
                                                                        <div class="money result-total"><?=$total?></div>
                                                                  </span>
                                                            </div>
                                                            <div class="cart-shipping">
                                                                  Shipping, taxes, and discounts will be calculated at checkout.
                                                            </div>
                                                            <div class="function-cart-button">
                                                            
                                                                  <button type="submit" name="update" class="btn btn-update-cart" >Update Cart</button>
                                                                  <?php if (isset($_SESSION['email'])) { ?>
                                                                        <button type="submit" name="checkout" class="btn btn-checkout-cart" ><a href="checkout.php">Check Out</a></button>
                                                                  <?php } else { ?>
                                                                        <button type="submit" name="checkout" class="btn btn-checkout-cart" ><a href="index.php?action=login">Check</a></button>
                                                                  <?php } ?>
                                                                  
                                                            
                                                            </div>
                                                      </div>
                                                </div>
                                          
                                                
                                          
                                    <?php } else {
                                          echo '<p>Your cart is currently empty.</p>';
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