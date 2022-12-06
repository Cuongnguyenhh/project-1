<!DOCTYPE html>
<html lang="en">

<head>
      <?php include './view/layout/meta.php' ?>
</head>

<body>
      <!-- Start Header Area -->
      <!-- End Header Area -->

      <!--================Home Area =================-->
      <main class="main-content" role="main">
            <div class="manager">
                  <div class="container">
                        <div class="manager-main">
                              <div class="manager-head">
                                    <!-- Search -->
                                    <a href="index.php"><i class="fa-solid fa-angle-left"></i>Back to home</a>
                                    <div class="manager-group">
                                          <!-- Notification -->
                                          <div class="manager-notify">
                                                <ul class="manager-notify-list">
                                                      <li class="manager-notify-item">
                                                            <a href="#!" class="manager-notify-bell">
                                                                  <i class="fa-solid fa-bell"></i>
                                                            </a>
                                                      </li>
                                                      <li class="manager-notify-item">
                                                            <a href="#!" class="manager-notify-email">
                                                                  <i class="fa-solid fa-envelope"></i>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                          <!-- Account user -->
                                          <div class="manager-user">
                                                <a href="#!">
                                                      <img src="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
                                                      <span>mintsanzz</span>
                                                </a>
                                          </div>
                                    </div>
                              </div>
                              <div class="manager-body">
                                    <div class="manager-body-left">
                                          <div class="manager-setting">
                                                <ul class="manager-setting-list">
                                                      <li class="manager-setting-item">
                                                            <a href="#!">
                                                                  <h5 class="manager-title">Account Setting</h5>
                                                                  <span class="manager-desc">Details about your Personal information</span>
                                                            </a>
                                                      </li>
                                                      <li class="manager-setting-item">
                                                            <a href="#!">
                                                                  <h5 class="manager-title">Notification</h5>
                                                                  <span class="manager-desc">Details about your Personal information</span>
                                                            </a>
                                                      </li>
                                                      <li class="manager-setting-item">
                                                            <a href="#!">
                                                                  <h5 class="manager-title">Membership Plan</h5>
                                                                  <span class="manager-desc">Details about your Personal information</span>
                                                            </a>
                                                      </li>
                                                      <li class="manager-setting-item">
                                                            <a href="#!">
                                                                  <h5 class="manager-title">Password & Security</h5>
                                                                  <span class="manager-desc">Details about your Personal information</span>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class="manager-body-right">
                                          <div class="account-setting">
                                                <div class="account-setting-top">
                                                      <img src="./uploads/<?php  echo $_SESSION['avt'] ?>" alt="">

                                                      <div class="account-setting-upload">
                                                      <div class="content__button">
                                                                  <button><input type="file" name="" id=""></button>
                                                            </div>
                                                            <span>Profile-pic.jpg</span>
                                                      </div>
                                                </div>
                                                <div class="account-setting-content">
                                                      <h3 class="content__title">Change User Infomation here</h3>
                                                      <form action="" method="POST">
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-name">Full Name <sup>*</sup></label>
                                                                              <input  name="pst_name" class="content__controll" id="acc-set-user-name" type="text" value="<?php echo $_SESSION['display_name']; ?>">
                                                                        </div>
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-email">Email Address <sup>*</sup></label>
                                                                              <input name="pst_email" class="content__controll" id="acc-set-user-email" type="text" value="<?php echo $_SESSION['email']; ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
                                                                  <label for="acc-set-user-address">Address <sup>*</sup></label>
                                                                  <input name="pst_ard"  class="content__controll" id="acc-set-user-address" type="text" value="<?php echo $_SESSION['adr_user']; ?>">
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-city">City <sup>*</sup></label>
                                                                              <input class="content__controll" id="acc-set-user-city" type="text" value="HCM City">
                                                                        </div>
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-state">State/Province <sup>*</sup></label>
                                                                              <input class="content__controll" id="acc-set-user-state" type="text" value="">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-code">Phone Number <sup>*</sup></label>
                                                                              <input name="pst_phone" class="content__controll" id="acc-set-user-code" type="text" value="1900574531">
                                                                        </div>
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-country">Country <sup>*</sup></label>
                                                                              <select name="" id="acc-set-user-country">
                                                                                    <option value="vietnam">
                                                                                          <img src="./assets/img/flag-vietnam.png" alt="">
                                                                                          vietnam
                                                                                    </option>
                                                                              </select>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__button">
                                                                  <button>Update Information</button>
                                                            </div>
                                                      </form>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
      <!--================Home Area =================-->

      <!-- start footer Area -->
      <?php include './view/layout/footer.php' ?>
      <!-- End footer Area -->

      <?php include './view/layout/scrip.php' ?>
</body>

</html>