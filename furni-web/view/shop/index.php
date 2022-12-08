<!DOCTYPE html>
<html lang="en">

<head>
      <?php include_once './view/layout/meta.php' ?>
</head>

<body>
      <!-- Start Header Area -->
      <?php
      if (isset($_SESSION['email']) && ($_SESSION['type']) == 1) {
            include_once './view/layout/header_admin.php';
      } elseif (isset($_SESSION['email']) && ($_SESSION['type']) != 1) {
            include_once './view/layout/header_user.php';
      } else {
            include_once './view/layout/header.php';
      }
      ?>
      <!-- End Header Area -->

      <!--================Home Area =================-->
      <?php include_once './view/shop/container.php' ?>
      <!--================Home Area =================-->

      <!-- start footer Area -->
      <?php include_once './view/layout/footer.php' ?>
      <!-- End footer Area -->

      <?php include_once './view/layout/scrip.php' ?>
</body>

</html>