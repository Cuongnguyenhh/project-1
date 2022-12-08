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
      <main class="main-content" role="main">
            <?php include_once './view/layout/banner.php'; ?>
            <div class="vela-product">
                  <div class="container">
                        <div class="row">
                              <div class="row-flex">
                                    <!-- FILTER  -->
                                    <!-- PRODUCT LIST  -->
                                    <div class="product-list col c-12">
                                          <div class="product-filter">
                                                <div class="product-filter-sort">
                                                      <div class="product-filter-view">
                                                            <button class="change-view change-grid active">
                                                                  <span class="icons-change">
                                                                        <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="Grid" style="vertical-align:middle">
                                                                              <g>
                                                                                    <path d="M1,3.80447821 L1,1 L3.80447821,1 L3.80447821,3.80447821 L1,3.80447821 Z M6.5977609,3.80447821 L6.5977609,1 L9.4022391,1 L9.4022391,3.80447821 L6.5977609,3.80447821 Z M12.1955218,3.80447821 L12.1955218,1 L15,1 L15,3.80447821 L12.1955218,3.80447821 Z M1,9.4022391 L1,6.59706118 L3.80447821,6.59706118 L3.80447821,9.4022391 L1,9.4022391 Z M6.5977609,9.4022391 L6.5977609,6.5977609 L9.4022391,6.5977609 L9.4022391,9.4022391 L6.5977609,9.4022391 Z M12.1955218,9.4022391 L12.1955218,6.59706118 L15,6.59706118 L15,9.4022391 L12.1955218,9.4022391 Z M1,14.9993003 L1,12.1948221 L3.80447821,12.1948221 L3.80447821,14.9993003 L1,14.9993003 Z M6.5977609,14.9993003 L6.5977609,12.1948221 L9.4022391,12.1948221 L9.4022391,14.9993003 L6.5977609,14.9993003 Z M12.1955218,14.9993003 L12.1955218,12.1948221 L15,12.1948221 L15,14.9993003 L12.1955218,14.9993003 Z">
                                                                                    </path>
                                                                              </g>
                                                                        </svg>
                                                                  </span>
                                                            </button>
                                                            <button class="change-view change-list">
                                                                  <span class="icons-change">
                                                                        <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" height="16" width="16" viewBox="0 0 16 16" title="List" style="vertical-align:middle">
                                                                              <g>
                                                                                    <path d="M0,3 L0,1 L2,1 L2,3 L0,3 Z M0,7 L0,5 L2,5 L2,7 L0,7 Z M0,11 L0,9 L2,9 L2,11 L0,11 Z M0,15 L0,13 L2,13 L2,15 L0,15 Z M4,3 L4,1 L16,1 L16,3 L4,3 Z M4,7 L4,5 L16,5 L16,7 L4,7 Z M4,11 L4,9 L16,9 L16,11 L4,11 Z M4,15 L4,13 L16,13 L16,15 L4,15 Z">
                                                                                    </path>
                                                                              </g>
                                                                        </svg>
                                                                  </span>
                                                            </button>
                                                      </div>

                                                      <!-- FILTER PRODUCT  -->
                                                      <div class="product-filter-collsort">
                                                            <select name="sortby" id="sortby" class="form-control">
                                                                  <?php
                                                                  $where = "SELECT * FROM `cms_sort`";
                                                                  $kq = getProductByFilter($where);
                                                                  foreach ($kq as $value) : ?>
                                                                        <option value="<?= $value['ID'] ?>">
                                                                              <a href="#!"><?= $value['sortby'] ?></a>
                                                                        </option>
                                                                  <?php endforeach; ?>
                                                            </select>
                                                      </div>
                                                      </form>
                                                </div>
                                          </div>


                                          <!-- SHOW PRODUCT GIRD -->
                                          <div class="product-box active">
                                                <div class="row-flex row-flex-margin">
                                                      <!-- PRODUCT  -->
                                                      <?php
                                                      // phân trang
                                                      $per_page = 12;
                                                      // xuất sản phẩm 
                                                      if (!isset($_GET['page'])) {
                                                            $page = 1;
                                                      } else {
                                                            $page = $_GET['page'];
                                                      }
                                                      $from_pro = ($page - 1) * $per_page;

                                                      $id = $_GET['id'];
                                                      if ($id == 1) {
                                                      $where = "SELECT * FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '1'";
                                                      $kq = getProductByFilter($where);

                                                      $count = "SELECT COUNT(*) FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '1'";
                                                      $count_pro = getCountFilter($count);
                                                      } elseif ($id == 2) {
                                                      $where = "SELECT * FROM `cms_products_group` as c, `cms_product` as p
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND c.ID = '2'";
                                                      $kq = getProductByFilter($where);

                                                      $count ="SELECT COUNT(*) FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '2'"; 
                                                      $count_pro = getCountFilter($count);

                                                      } elseif ($id == 3) {
                                                      $where = "SELECT * FROM `cms_products_group` as c, `cms_product` as p
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '3'";
                                                      $kq = getProductByFilter($where);

                                                      $count ="SELECT COUNT(*) FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '3'"; 
                                                      $count_pro = getCountFilter($count);
                                                      } elseif ($id == 4) {
                                                      $where = "SELECT * FROM `cms_products_group` as c, `cms_product` as p
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '4'";
                                                      $kq = getProductByFilter($where);

                                                      $count ="SELECT COUNT(*) FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '4'"; 
                                                      $count_pro = getCountFilter($count);
                                                      } elseif ($id == 5) {
                                                      $where = "SELECT * FROM `cms_products_group` as c, `cms_product` as p
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '5'";
                                                      $kq = getProductByFilter($where);

                                                      $count = "SELECT COUNT(*) FROM `cms_products_group` as c, `cms_product` as p 
                                                      WHERE c.ID = p.id_prd_group 
                                                      AND p.id_prd_group = '5'";
                                                      $count_pro = getCountFilter($count);
                                                      }
                                                      foreach ($kq as $value) : ?>
                                                            <div class="c-3 col">
                                                                  <form action="shop.php?action=viewcart" method="post">
                                                                        <div class="product">
                                                                              <div class="product-image">
                                                                                    <a class="product-image-link" href="product.php?id=<?= $value['ID'] ?>">
                                                                                          <img src="uploads/<?= $value['prd_img'] ?>" alt="product-image">
                                                                                          <div class="product-hover-image">
                                                                                                <div class="product-change-image">
                                                                                                      <img src="uploads/<?= $value['prd_img'] ?>" alt="product-change-style">
                                                                                                </div>
                                                                                          </div>
                                                                                    </a>
                                                                                    <div class="product-label-sale">
                                                                                          <span>Sale</span>
                                                                                    </div>
                                                                                    <div class="product-quick-view">
                                                                                          <a class="btn btn-product-view btn-quick-view" href="#">
                                                                                                <span class="icons">
                                                                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                                                            <path d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z">
                                                                                                            </path>
                                                                                                      </svg>
                                                                                                </span>
                                                                                          </a>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="product-content">
                                                                                    <h5 class="product-title">
                                                                                          <a class="product-title-link" href="product.php?id=<?= $value['ID'] ?>"><?= $value['prd_name'] ?></a>
                                                                                    </h5>
                                                                                    <div class="product-price">
                                                                                          <div class="product-current">
                                                                                                <span>$<?= $value['prd_price'] ?>.00</span>
                                                                                          </div>
                                                                                          <div class="product-sale">
                                                                                                <span>$26.00</span>
                                                                                          </div>
                                                                                          <button name="add-cart" type="submit" class="btn btn-add-cart ">
                                                                                                <i class="icons">
                                                                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                                                                            <path d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z">
                                                                                                            </path>
                                                                                                      </svg>
                                                                                                </i>
                                                                                                <span>Add to Cart</span>
                                                                                          </button>
                                                                                    </div>
                                                                              </div>
                                                                        </div>
                                                                        <input type="hidden" name="id_pro" value="<?= $value['ID'] ?>">
                                                                        <input type="hidden" name="name_pro" value="<?= $value['prd_name'] ?>">
                                                                        <input type="hidden" name="price_pro" value="<?= $value['prd_price'] ?>">
                                                                        <input type="hidden" name="img_pro" value="<?= $value['prd_img'] ?>">
                                                                        <input type="hidden" name="amount_pro" value="1">
                                                                  </form>

                                                            </div>
                                                      <?php endforeach ?>
                                                </div>
                                          </div>

                                          <!-- PAGINATION  -->
                                          <?php
                                          $total_page = ceil($count_pro / $per_page);
                                          $prev = $page - 1;
                                          $next = $page + 1;
                                          ?>
                                          <div class="c-12">
                                                <div class="product-pagination">
                                                      <nav class="pagination">
                                                            <ul class="pagination-list">
                                                                  <?php if ($page > 1) : ?>
                                                                        <li class="pagination-item">
                                                                              <a class="pagination-page-link" href="?page=<?= $page - 1 ?>">
                                                                                    <i class="fa-sharp fa-solid fa-angle-left"></i>
                                                                              </a>
                                                                        </li>
                                                                  <?php endif; ?>

                                                                  <?php if ($prev - 1 > 0) : ?>
                                                                        <li class="pagination-item ">
                                                                              <a href="?page=<?= $page - 2 ?>"><?php echo $page - 2 ?></a>
                                                                        </li>
                                                                  <?php endif; ?>

                                                                  <?php if ($prev > 0) : ?>
                                                                        <li class="pagination-item ">
                                                                              <a href="?page=<?php echo $page - 1 ?>"><?php echo $page - 1 ?></a>
                                                                        </li>
                                                                  <?php endif; ?>

                                                                  <li class="pagination-item active  "><a href="?page=<?php echo $page ?>"><?php echo $page ?></a></li>

                                                                  <?php if ($next < ($total_page + 1)) : ?>
                                                                        <li class="pagination-item ">
                                                                              <a href="shop.php?page=<?php echo $page + 1 ?>"><?php echo $page + 1 ?></a>
                                                                        </li>
                                                                  <?php endif; ?>

                                                                  <?php if ($next + 1 < ($total_page + 1)) : ?>
                                                                        <li class="pagination-item ">
                                                                              <a href="?page=<?php echo $page + 2 ?>"><?php echo $page + 2 ?></a>
                                                                        </li>
                                                                  <?php endif; ?>

                                                                  <?php if ($page < ($total_page)) : ?>
                                                                        <li class="pagination-item">
                                                                              <a class="pagination-page-link" href="?page=<?= $page + 1 ?>">
                                                                                    <i class="fa-sharp fa-solid fa-angle-right"></i>
                                                                              </a>
                                                                        </li>
                                                                  <?php endif; ?>
                                                            </ul>
                                                      </nav>
                                                      <div class="collProductCount itemPaginate pull-right hidden-xs hidden-sm">
                                                            <span>Tổng cộng có <?= $count_pro ?> sản phẩm</span>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
      <script>
            const changeList = document.querySelector('.change-list');
            const changeGrid = document.querySelector('.change-grid');
            const productList = document.querySelector('.product-box-list');
            const productBox = document.querySelector('.product-box');

            changeList.addEventListener('click', () => {
                  productList.classList.add('active');
                  productBox.classList.remove('active');
                  changeList.classList.add('active');
                  changeGrid.classList.remove('active');
            });
            changeGrid.addEventListener('click', () => {
                  productBox.classList.add('active');
                  productList.classList.remove('active');
                  changeList.classList.remove('active');
                  changeGrid.classList.add('active');
            });
      </script>
      <!--================Home Area =================-->

      <!-- start footer Area -->
      <?php include_once './view/layout/footer.php' ?>
      <!-- End footer Area -->

      <?php include_once './view/layout/scrip.php' ?>
</body>

</html>