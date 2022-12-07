<!DOCTYPE html>
<?php
require '../admin_remake/config/database.php';
$conn = condb();
$id_user = $_GET['id'];

// uploadfile     
      if ( isset($_POST['update'])) {
            $imgload = basename($_FILES['img']['name']);
                        $target_dir = "./uploads/";
                        $target_file = $target_dir . $imgload;
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            $email = $_POST['pst_email'];
            $phone = $_POST['pst_phone'];
            $name  = $_POST['pst_name'];
            $adr = $_POST['pst_adr'];
                  if($imgload == null){try {
                        $sql = "UPDATE cms_users SET email='$email', phone='$phone', display_name = '$name', adr_user='$adr' WHERE id=$id_user";
      
                        // Prepare statement
                        $stmt = $conn->prepare($sql);
      
                        // execute the query
                        $stmt->execute();
      
                        // echo a message to say the UPDATE succeeded
                        header('location:index.php');
                  } catch (PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                  }}else{ 
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
                        }}
            
      
           
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
<<<<<<< HEAD
                                                      <img src="./uploads/<?= $_SESSION['avt'] ?>" alt="">
                                                      <span><?= $_SESSION['display_name'] ?></span>
=======
                                                      <img src="https://images.unsplash.com/photo-1526336024174-e58f5cdd8e13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                                                            alt="">
                                                      <span>mintsanzz</span>
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
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
<<<<<<< HEAD
                                                            <a href="../admin_remake/doc/data_order.php?id=<?= $id_user ?>">
=======
                                                            <a
                                                                  href="../admin_remake/doc/data_order.php?id=<?=$id_user?>">
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
                                                                  <h5 class="manager-title">Quản lý đơn hàng</h5>
                                                                  <span class="manager-desc">Xem tiến độ đơn hàng của
                                                                        bạn</span>
                                                            </a>
                                                      </li>
                                                      <li class="manager-setting-item">
                                                            <a href="#!">
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

<<<<<<< HEAD

                                                

=======
                                                <form action="" method="post" enctype="multipart/form-data">
                                                      <div class="account-setting-top">
                                                            <input type="file" name="img" id="">
                                                            <div>
                                                                  <img src="./uploads/<?php if(isset($_SESSION['avt'])) {echo $_SESSION['avt'];} ?>"
                                                                        alt="">
                                                                  <button name="upanh" type="submit">Cập nhật ảnh
                                                                        diện</button>
                                                            </div>
                                                      </div>
                                                </form>
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
                                                <div class="account-setting-content">
                                                      <h3 class="content__title">Change User Infomation here</h3>
                                                      <form action="" method="POST" enctype="multipart/form-data">
                                                            <div class="account-setting-top">
                                                                  <input type="file" name="img" id="">
                                                                  <img src="./uploads/<?= $_SESSION['avt'] ?>" alt="">
                                                                  <button name="upanh" type="submit">Doi anh</button>
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
<<<<<<< HEAD
                                                                              <label for="acc-set-user-name">Full Name <sup>*</sup></label>
                                                                              <input name="pst_name" class="content__controll" id="acc-set-user-name" type="text" value="<?php echo $_SESSION['display_name']; ?>">
=======
                                                                              <label for="acc-set-user-name">Full
                                                                                    Name <sup>*</sup></label>
                                                                              <input name="pst_name"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-name" type="text"
                                                                                    value="<?php if ( isset ($_SESSION['display_name'])){echo $_SESSION['display_name'];} ?>">
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
                                                                        </div>
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-email">Email
                                                                                    Address <sup>*</sup></label>
                                                                              <input name="pst_email"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-email" type="text"
                                                                                    value="<?php echo $_SESSION['email']; ?>">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
<<<<<<< HEAD
                                                                  <label for="acc-set-user-address">Address <sup>*</sup></label>
                                                                  <input name="pst_adr" class="content__controll" id="acc-set-user-address" type="text" value="<?php echo $_SESSION['adr_user']; ?>">
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-code">Phone Number <sup>*</sup></label>
                                                                              <input name="pst_phone" class="content__controll" id="acc-set-user-code" type="text" value="<?= $_SESSION['phone_num'] ?>">
                                                                        </div>
                                                                  </div>
=======
                                                                  <label for="acc-set-user-address">Address
                                                                        <sup>*</sup></label>
                                                                  <input name="pst_adr" class="content__controll"
                                                                        id="acc-set-user-address" type="text"
                                                                        value="<?php echo $_SESSION['adr_user']; ?>">
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-city">City
                                                                                    <sup>*</sup></label>
                                                                              <input class="content__controll"
                                                                                    id="acc-set-user-city" type="text"
                                                                                    value="HCM City">
                                                                        </div>
<<<<<<< HEAD

=======
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-state">State/Province
                                                                                    <sup>*</sup></label>
                                                                              <input class="content__controll"
                                                                                    id="acc-set-user-state" type="text"
                                                                                    value="">
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="content__group">
                                                                  <div class="content__group-row">
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-code">Phone
                                                                                    Number <sup>*</sup></label>
                                                                              <input name="pst_phone"
                                                                                    class="content__controll"
                                                                                    id="acc-set-user-code" type="text"
                                                                                    value="<?=$_SESSION['phone_num']?>">
                                                                        </div>
>>>>>>> 67b98f1b5b0b47dcb7f304dc38a47e7a3516bf4e
                                                                        <div class="content__group-col">
                                                                              <label for="acc-set-user-country">Country
                                                                                    <sup>*</sup></label>
                                                                              <select name="" id="acc-set-user-country">
                                                                                    <option value="vietnam">
                                                                                          <img src="./assets/img/flag-vietnam.png"
                                                                                                alt="">
                                                                                          vietnam
                                                                                    </option>
                                                                              </select>
                                                                        </div>
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
}








?>