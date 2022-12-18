<!DOCTYPE html>
<?php
require './admin_remake\/config/database.php';
require './admin_remake\/config/controller/user.php';
$user = getOne_user($_SESSION['email']);
foreach ($user as $user)
      $conn = condb();
$id_user = $_GET['id'];

// uploadfile     
if (isset($_POST['update'])) {
      $imgload = basename($_FILES['img']['name']);
      $target_dir = "./uploads/";
      $target_file = $target_dir . $imgload;
      move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
      $email = $_POST['pst_email'];
      $phone = $_POST['pst_phone'];
      $name  = $_POST['pst_name'];
      $adr = $_POST['pst_adr'];
      $city = $_POST['pst_city'];
      print_r($imgload);
      if ($imgload == null) {
            try {
                  $sql = "UPDATE cms_users SET email='$email', phone='$phone', display_name = '$name', adr_user='$adr' WHERE id=$id_user";

                  // Prepare statement
                  $stmt = $conn->prepare($sql);

                  // execute the query
                  $stmt->execute();

                  // echo a message to say the UPDATE succeeded
                  header('location:index.php');
            } catch (PDOException $e) {
                  echo $sql . "<br>" . $e->getMessage();
            }
      } else {
            try {
                  $sql = "UPDATE cms_users SET email='$email', phone='$phone', display_name = '$name', adr_user='$adr' ,display_img='$imgload' WHERE ID =$id_user";

                  // Prepare statement
                  $stmt = $conn->prepare($sql);

                  // execute the query
                  $stmt->execute();

                  // echo a message to say the UPDATE succeeded
                  header('location:index.php');
            } catch (PDOException $e) {
                  echo $sql . "<br>" . $e->getMessage();
            }
      }
}


?>
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
                                                      <img src="./uploads/<?= $user['display_img'] ?>" alt="">
                                                      <span><?= $user['display_name'] ?></span>
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
                                                                  <span class="manager-desc">Details about your Personal
                                                                        information</span>
                                                            </a>
                                                      </li>

                                                      <li class="manager-setting-item">
                                                            <a
                                                                  href="./admin_remake\/doc/data_order.php?id=<?= $id_user ?>">
                                                                  <h5 class="manager-title">Quản lý đơn hàng</h5>
                                                                  <span class="manager-desc">Xem tiến độ đơn hàng của
                                                                        bạn</span>
                                                            </a>
                                                      </li>
                                                      <li class="manager-setting-item">
                                                            <a href="index.php?action=changepass">
                                                                  <h5 class="manager-title">Password & Security</h5>
                                                                  <span class="manager-desc">Details about your Personal
                                                                        information</span>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class="manager-body-right">
                                          <div class="account-setting">
                                                <div class="account-setting-content">
                                                      <h3 class="content__title">Change User Infomation here</h3>
                                                      <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="account-setting-top">
                                                                  <input type="file" name="img" id="">
                                                                  <img src="./uploads/<?= $user['display_img'] ?>"
                                                                        alt="">
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-name">Full Name
                                                                                    <sup>*</sup></label>
                                                                              <input name="pst_name"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-name" type="text"
                                                                                    value="<?php echo $user['display_name']; ?>">
                                                                        </div>
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-email">Email
                                                                                    Address <sup>*</sup></label>
                                                                              <input name="pst_email"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-email" type="text"
                                                                                    value="<?php echo $user['email']; ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
                                                                  <label for="acc-set-user-address">Address
                                                                        <sup>*</sup></label>
                                                                  <input name="pst_adr" class="content__controll"
                                                                        id="acc-set-user-address" type="text"
                                                                        value="<?php echo $user['adr_user']; ?>">
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-code">Phone
                                                                                    Number <sup>*</sup></label>
                                                                              <input name="pst_phone"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-code" type="text"
                                                                                    value="<?= $user['phone'] ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <!-- <label for="acc-set-user-city">City <sup>*</sup></label> -->
                                                                              <!-- <input name="pst_city" class="content__controll" id="acc-set-user-city" type="text" value="<?= $user['city_user'] ?>"> -->
                                                                        </div>
                                                                        <!-- <div class="content__group-col">
                                                                              <label for="acc-set-user-country">Country
                                                                                    <sup>*</sup></label>
                                                                              <select name="" id="acc-set-user-country">
                                                                                    <option value="vietnam">
                                                                                          <img src="./assets/img/flag-vietnam.png" alt="">
                                                                                          vietnam
                                                                                    </option>
                                                                              </select>
                                                                        </div> -->
                                                                  </div>
                                                            </div>
                                                            <div class="content__button">
                                                                  <button type="submit" name="update">Update
                                                                        Information</button>
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
<?php

if (isset($_POST['update'])) {
      $email = $_POST['pst_email'];
      $phone = $_POST['pst_phone'];
      $name  = $_POST['pst_name'];
      $adr = $_POST['pst_adr'];
      $city = $_POST['pst_city'];

      try {
            $sql = "UPDATE cms_users SET email='$email', phone='$phone', display_name = '$name', adr_user='$adr', city_user = '$city' WHERE id=$id_user";

            // Prepare statement
            $stmt = $conn->prepare($sql);

            // execute the query
            $stmt->execute();

            // echo a message to say the UPDATE succeeded
            header('location:index.php');
      } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
      }
}








?>