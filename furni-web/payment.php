<!DOCTYPE html>
<html lang="en">
<?php
session_start();
ob_start();
require '../admin_remake/config/database.php';
require '../admin_remake/config/controller/user.php';

?>

<head>
      <?php include_once './view/layout/meta.php' ?>
</head>

<body>
      <!-- Start Header Area -->
      <!-- End Header Area -->

      <!--================Home Area =================-->
      <?php
      $add = $_POST['add_contact'];
      $add2 = $_POST['add2_contact'];
      $city = $_POST['city_contact'];
      $total = 0;

      ?>
      <form action="./add_order.php" method="post">
            <main class="main">
                  <div class="container">
                        <header class="header__info">
                              <div class="info__logo">
                                    <a class="info__link" href="#">
                                          <img src="assets/img/logo_dark.svg" alt="Logo Image">
                                    </a>
                              </div>
                              <div class="info__navbar">
                                    <ul class="info__navbar-list">
                                          <li class="info__navbar-item">
                                                <a href="viewcart.php">
                                                      Giỏ hàng
                                                      <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                          </li>
                                          <li class="info__navbar-item">
                                                <a href="checkout.php">
                                                      Thông tin
                                                      <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                          </li>
                                          <li class="info__navbar-item">
                                                <a href="payment.php">
                                                      Thanh toán
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </header>
                        <div class="main-inner">
                              <div class="payment">
                                    <h3 class="payment-title">
                                          General information
                                    </h3>
                                    <div class="payment-group">
                                          <div class="payment-heading">
                                                Shipping City
                                          </div>
                                          <div class="payment-shipping">
                                                <div>
                                                <h5 class="payment-city"><?= $add2 ?> , <?= $add ?> , <?= $city ?> </h5>
                                                </div>
                                                <a href="checkout.php">change</a>
                                          </div>
                                    </div>
                                    <div class="payment-group">
                                          <div class="payment-heading">
                                                Shipping Service
                                          </div>
                                          <ul class="shipping-list">
                                                <li class="shipping-item active">
                                                      <a href="#!" class="shipping-active">
                                                            <i class="fa-solid fa-truck-fast"></i>
                                                            <div class="shipping-active-content">
                                                                  <h6 class="shipping-title">
                                                                        Express delivery
                                                                  </h6>
                                                                  <span>We ship in 1-2 hours</span>
                                                                  <span>$10.00</span>
                                                            </div>
                                                      </a>
                                                </li>
                                                <li class="shipping-item">
                                                      <a href="#!" class="shipping-active">
                                                            <i class="fa-solid fa-truck"></i>
                                                            <div class="shipping-active-content">
                                                                  <h6 class="shipping-title">
                                                                        Standart delivery
                                                                  </h6>
                                                                  <span>We ship in 1 day</span>
                                                                  <span>Free</span>
                                                            </div>
                                                      </a>
                                                </li>

                                          </ul>
                                    </div>
                                    <div class="payment-group">
                                          <div class="payment-heading">
                                                Payment options
                                          </div>
                                          <div class="payment-options">
                                                <div class="payment-bankcard">
                                                      <div class="options">
                                                            <a href="#!">
                                                                  <i class="fa-regular fa-credit-card"></i>
                                                                  <div class="payment-content">
                                                                        <h6 class="payment-title">Bank card</h6>
                                                                        <span>Pay with Visa, MasterCard, Maestro and Amex</span>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                      <div class="options">
                                                            <a href="#!">
                                                                  <i class="fa-brands fa-cc-paypal"></i>
                                                                  <div class="payment-content">
                                                                        <h6 class="payment-title">PayPal</h6>
                                                                        <span>Simple, more secure way to pay</span>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                      <div class="options">
                                                            <a href="#!" class="active">
                                                                  <i class="fa-solid fa-money-check-dollar"></i>
                                                                  <div class="payment-content">
                                                                        <h6 class="payment-title">Cash on delivery</h6>
                                                                        <span>convenient, fast and easy-to-use</span>
                                                                  </div>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="order-products" style="display:none ;">
                                          <?php $total_prd = 0; foreach ($_SESSION['viewcart'] as   $value) :
                                          $total_prd++;
                                                $total_price = $value[2] * $value[4];
                                                $total += $total_price; ?>
                                                <div class="order-product">
                                                      <div class="order-product-image">
                                                            <img src="uploads/<?= $value[3] ?>" alt="">
                                                      </div>
                                                      <div class="order-product-content">
                                                            <h3 class="order-product-name" name="vaic">
                                                                  <?= $value[1] ?>
                                                            </h3>
                                                            <div class="order-product-group">
                                                                  <span class="money"><?= $value[2] ?></span>
                                                                  <span class="count">x<?= $value[4] ?></span>
                                                            </div>
                                                      </div>
                                                </div>
                                                
                                          <?php endforeach ?>
>
                                    </div>
                                    
                                    <div class="payment-button">
                                          <a  href="payment.php?add_order=true" class="btn btn-payment"> hihi
                                          
                                          </a>
                                    </div>
                              </div>
                              <div class="order">
                                    <h5 class="order-title">
                                          Your order
                                    </h5>
                                    <div class="order-products">
                                          <?php $total_prd = 0; foreach ($_SESSION['viewcart'] as   $value) :
                                          $total_prd++;
                                                $total_price = $value[2] * $value[4];
                                                $total += $total_price; ?>
                                                <div class="order-product">
                                                      <div class="order-product-image">
                                                            <img src="uploads/<?= $value[3] ?>" alt="">
                                                      </div>
                                                      <div class="order-product-content">
                                                            <h3 class="order-product-name" name="vaic">
                                                                  <?= $value[1] ?>
                                                            </h3>
                                                            <div class="order-product-group">
                                                                  <span class="money"><?= $value[2] ?></span>
                                                                  <span class="count">x<?= $value[4] ?></span>
                                                            </div>
                                                      </div>
                                                </div>
                                                
                                          <?php endforeach ?>

                                          <!-- them order vao db -->

                                         
                                          <!-- hetttt -->
                                       
                                    </div>
                                    <div class="order-product-total">
                                          <div class="total proTotal">
                                                <span>Total</span>
                                                <span><?= $total ?></span>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </main>
      </form>
      <script>
            const activePayment = (activeItem) => {
                  const active = document.querySelectorAll(activeItem)
                  if (active) {
                        active.forEach((item) => {
                              item.addEventListener('click', (e) => {
                                    active.forEach((item) => {
                                          item.classList.remove('active');
                                    });
                                    e.preventDefault();
                                    item.classList.add('active');
                              });
                        });
                  }
            }
            activePayment('.shipping-item')
            activePayment('.options a')
      </script>
      <!--================Home Area =================-->

      <?php include_once './view/layout/scrip.php' ?>
</body>
                                    <?php 
                                     $prd_order = $_SESSION['viewcart'];
                                     $id_born1 = rand(1,10000000);
                                     $id_born2 = $_SESSION['id'];
                                     $id_born = $id_born1.''.$id_born2;

                                         function add_order($id_born,$total){
                                          $conn = condb();
                                          if(isset($_SESSION['email'])){
                                              $user = getOne_user($_SESSION['email']);
                                              foreach($user as $user_gg);
                                           $id_cus = $user_gg['id'];
                                           $name_cus = $_SESSION['display_name'];
                                           $phone_num = $_SESSION['phone_num'];
                                           $adr_user = $_SESSION['adr_user'];
                                          }else{
                                          $user = null;
                                         }
                                          
                                                
                                          // add oder
                                          try {
                                               
                                                $sql = "INSERT INTO cms_order (ID, customer_id, name_cus, totol_price, phone_num, adr_cus, status)
                                                VALUES ('$id_born','$id_cus', '$name_cus', '$total', '$phone_num', '$adr_user', '1')";
                                                // use exec() because no results are returned
                                                $conn->exec($sql);
                                                unset($_SESSION['viewcart']);
                                                header('location: ./index.php');
                                              } catch(PDOException $e) {
                                                echo $sql . "<br>" . $e->getMessage();
                                              }
                                             
                                         }
                                         function add_order_detail($id_born,$total_prd,$prd_order){
                                          $conn = condb();

                                          foreach($prd_order as $pr){

                                          
                                                try {
                                               
                                                      $sql = "INSERT INTO cms_order_detail ( order_id, prd_name, quailyti, price )
                                                      VALUES ('$id_born', '$pr[1]', '$pr[4]', '$pr[2]' )";
                                                      // use exec() because no results are returned
                                                      $conn->exec($sql);
                                                            
                                                    } catch(PDOException $e) {
                                                      echo $sql . "<br>" . $e->getMessage();
                                                    }
                                          }

                                         };
                                         if (isset($_GET['add_order'])) {
                                          add_order($id_born,$total);
                                          add_order_detail($id_born, $total_prd, $prd_order);
                                        }

                                          ?>

</html>