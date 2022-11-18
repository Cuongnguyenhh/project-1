<main class="main-content" role="main">
      <?php include_once './view/layout/banner.php'; ?>
      <div class="vela-product">
            <div class="container">
                  <div class="row">
                        <div class="row-flex">
                              <!-- FILTER  -->
                              <aside class="vela-aside c-3">
                                    <div class="categories">
                                          <h3 class="vela-title">Thể loại</h3>
                                          <div class="categories-content">
                                                <ul class="categories-list">
                                                      <li class="categories-item">
                                                            <a onclick="filter('delete',1);"
                                                                  class="categories-item-link" href="">All</a>
                                                      </li>
                                                      <?php
                                                      $cate = getAllTag();
                                                      foreach ($cate as $c) :
                                                            $result = strtolower(str_replace(' ', '-', $c['name_cate'])); ?>
                                                      <li class="categories-item">
                                                            <a class="categories-item-link"
                                                                  href="shop.php?action=<?= $result ?>&id=<?= $c['id'] ?> "><?= $c['name_cate'] ?></a>
                                                      </li>
                                                      <?php endforeach ?>
                                                </ul>
                                          </div>
                                    </div>
                                    <div class="sidebar-color">
                                          <h3 class="vela-title">Màu sắc</h3>
                                          <div class="color-content">
                                                <ul class="color-list">
                                                      <li class="color-item">
                                                            <a class="color-item-link" style="background-color: black;">
                                                                  <img src="./public/images/color_default_icon.webp"
                                                                        alt="color-default">
                                                            </a>
                                                      </li>
                                                      <li class="color-item">
                                                            <a class="color-item-link" style="background-color: grey;">
                                                                  <img src="./public/images/color_default_icon.webp"
                                                                        alt="color-default">
                                                            </a>
                                                      </li>
                                                      <li class="color-item">
                                                            <a class="color-item-link"
                                                                  style="background-color: indianred;">
                                                                  <img src="./public/images/color_default_icon.webp"
                                                                        alt="color-default">
                                                            </a>
                                                      </li>
                                                      <li class="color-item">
                                                            <a class="color-item-link"
                                                                  style="background-color: lightgrey;">
                                                                  <img src="./public/images/color_default_icon.webp"
                                                                        alt="color-default">
                                                            </a>
                                                      </li>
                                                      <li class="color-item">
                                                            <a class="color-item-link" style="background-color: white;">
                                                                  <img src="./public/images/color_default_icon.webp"
                                                                        alt="color-default">
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                                    <!-- FILTER PRICE  -->
                                    <div class="filter">
                                          <h3 class="vela-title">Filter by price</h3>
                                          <div class="filter-content">
                                                <div class="filter-price">
                                                      <span class="filter-span">
                                                            <span class="filter-bar" ></span>
                                                            <span class="filter-circle from"></span>
                                                            <span class="filter-circle to"></span>
                                                      </span>
                                                </div>
                                                <div class="filter-btn">
                                                      <button class="btn btn-filter-price">Filter</button>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="best-seller">
                                          <h3 class="vela-title">Bán chạy nhất</h3>
                                          <div class="best-seller-content">
                                                <div class="product-sidebar">
                                                      <div class="product-sidebar-image">
                                                            <a href="#" class="product-sidebar-link">
                                                                  <img src="./public/images/product-1.webp"
                                                                        alt="product-sidebar">
                                                            </a>
                                                      </div>
                                                      <div class="product-sidebar-content">
                                                            <div class="product-sidebar-title">
                                                                  <a href="#">Ghế công thái học</a>
                                                            </div>
                                                            <div class="product-sidebar-price">
                                                                  <div class="product-sidebar-current">
                                                                        <span>$260.00</span>
                                                                  </div>
                                                                  <div class="product-sidebar-sale">
                                                                        <span>$280.00</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="product-sidebar">
                                                      <div class="product-sidebar-image">
                                                            <a href="#" class="product-sidebar-link">
                                                                  <img src="./public/images/product-1.webp"
                                                                        alt="product-sidebar">
                                                            </a>
                                                      </div>
                                                      <div class="product-sidebar-content">
                                                            <div class="product-sidebar-title">
                                                                  <a href="#">Ghế công thái học</a>
                                                            </div>
                                                            <div class="product-sidebar-price">
                                                                  <div class="product-sidebar-current">
                                                                        <span>$260.00</span>
                                                                  </div>
                                                                  <div class="product-sidebar-sale">
                                                                        <span>$280.00</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                                <div class="product-sidebar">
                                                      <div class="product-sidebar-image">
                                                            <a href="#" class="product-sidebar-link">
                                                                  <img src="./public/images/product-1.webp"
                                                                        alt="product-sidebar">
                                                            </a>
                                                      </div>
                                                      <div class="product-sidebar-content">
                                                            <div class="product-sidebar-title">
                                                                  <a href="#">Ghế công thái học</a>
                                                            </div>
                                                            <div class="product-sidebar-price">
                                                                  <div class="product-sidebar-current">
                                                                        <span>$260.00</span>
                                                                  </div>
                                                                  <div class="product-sidebar-sale">
                                                                        <span>$280.00</span>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </aside>


                              <!-- PRODUCT LIST  -->
                              <div class="product-list col c-9">
                                    <div class="product-filter">
                                          <div class="product-filter-sort">
                                                <div class="product-filter-view">
                                                      <button class="change-view change-grid active">
                                                            <span class="icons-change">
                                                                  <svg fill="currentColor"
                                                                        preserveAspectRatio="xMidYMid meet" height="16"
                                                                        width="16" viewBox="0 0 16 16" title="Grid"
                                                                        style="vertical-align:middle">
                                                                        <g>
                                                                              <path
                                                                                    d="M1,3.80447821 L1,1 L3.80447821,1 L3.80447821,3.80447821 L1,3.80447821 Z M6.5977609,3.80447821 L6.5977609,1 L9.4022391,1 L9.4022391,3.80447821 L6.5977609,3.80447821 Z M12.1955218,3.80447821 L12.1955218,1 L15,1 L15,3.80447821 L12.1955218,3.80447821 Z M1,9.4022391 L1,6.59706118 L3.80447821,6.59706118 L3.80447821,9.4022391 L1,9.4022391 Z M6.5977609,9.4022391 L6.5977609,6.5977609 L9.4022391,6.5977609 L9.4022391,9.4022391 L6.5977609,9.4022391 Z M12.1955218,9.4022391 L12.1955218,6.59706118 L15,6.59706118 L15,9.4022391 L12.1955218,9.4022391 Z M1,14.9993003 L1,12.1948221 L3.80447821,12.1948221 L3.80447821,14.9993003 L1,14.9993003 Z M6.5977609,14.9993003 L6.5977609,12.1948221 L9.4022391,12.1948221 L9.4022391,14.9993003 L6.5977609,14.9993003 Z M12.1955218,14.9993003 L12.1955218,12.1948221 L15,12.1948221 L15,14.9993003 L12.1955218,14.9993003 Z">
                                                                              </path>
                                                                        </g>
                                                                  </svg>
                                                            </span>
                                                      </button>
                                                      <button class="change-view change-list">
                                                            <span class="icons-change">
                                                                  <svg fill="currentColor"
                                                                        preserveAspectRatio="xMidYMid meet" height="16"
                                                                        width="16" viewBox="0 0 16 16" title="List"
                                                                        style="vertical-align:middle">
                                                                        <g>
                                                                              <path
                                                                                    d="M0,3 L0,1 L2,1 L2,3 L0,3 Z M0,7 L0,5 L2,5 L2,7 L0,7 Z M0,11 L0,9 L2,9 L2,11 L0,11 Z M0,15 L0,13 L2,13 L2,15 L0,15 Z M4,3 L4,1 L16,1 L16,3 L4,3 Z M4,7 L4,5 L16,5 L16,7 L4,7 Z M4,11 L4,9 L16,9 L16,11 L4,11 Z M4,15 L4,13 L16,13 L16,15 L4,15 Z">
                                                                              </path>
                                                                        </g>
                                                                  </svg>
                                                            </span>
                                                      </button>
                                                </div>

                                                <!-- FILTER PRODUCT  -->
                                                <div class="product-filter-collsort">
                                                      <select name="sortby" id="sortby" class="form-control">
                                                            <option value="1">Mặc định phân loại</option>
                                                            <option value="2">Bán chạy nhất</option>
                                                            <option value="3">Theo thứ tự bảng chữ cái, A-Z</option>
                                                            <option value="4">Theo thứ tự bảng chữ cái, Z-A</option>
                                                            <option value="5">Giá, thấp đến cao</option>
                                                            <option value="6">Giá, từ cao đến thấp</option>
                                                            <option value="7">Ngày, mới đến cũ</option>
                                                            <option value="8">Ngày, cũ đến mới</option>
                                                      </select>
                                                </div>
                                          </div>
                                    </div>


                                    <!-- SHOW PRODUCT GIRD -->
                                    <div class="product-box active">
                                          <div class="row-flex row-flex-margin">
                                                <!-- PRODUCT  -->
                                                <?php
                                                // phân trang
                                                $kq = getAllProduct();
                                                foreach ($kq as $value) :
                                                      if ($value['status'] == 1) :
                                                ?>
                                                <div class="c-3 col">
                                                      <form action="./index.php?act=view_cart" method="post">
                                                      <div class="product">
                                                                  <div class="product-image">
                                                                        <a class="product-image-link"
                                                                              href="index.php?act=detail&id= <?= $value['id'] ?>">
                                                                              <img src="<?= $value['img'] ?>"
                                                                                    alt="product-image">
                                                                              <div class="product-hover-image">
                                                                                    <div class="product-change-image">
                                                                                          <img src="<?= $value['img'] ?>"
                                                                                                alt="product-change-style">
                                                                                    </div>
                                                                              </div>
                                                                        </a>
                                                                        <div class="product-label-sale">
                                                                              <span>Sale</span>
                                                                        </div>
                                                                        <div class="product-quick-view">
                                                                              <a class="btn btn-product-view btn-quick-view"
                                                                                    href="#">
                                                                                    <span class="icons">
                                                                                          <svg version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 512 512"
                                                                                                style="enable-background:new 0 0 512 512;"
                                                                                                xml:space="preserve">
                                                                                                <path
                                                                                                      d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z">
                                                                                                </path>
                                                                                          </svg>
                                                                                    </span>
                                                                              </a>
                                                                        </div>
                                                                  </div>
                                                                  <div class="product-content">
                                                                        <h5 class="product-title">
                                                                              <a class="product-title-link"
                                                                                    href="index.php?act=detail&id=<?= $value['id'] ?>"><?= $value['name_pro'] ?></a>
                                                                        </h5>
                                                                        <div class="product-price">
                                                                              <div class="product-current">
                                                                                    <span>$<?= $value['price'] ?>.00</span>
                                                                              </div>
                                                                              <div class="product-sale">
                                                                                    <span>$26.00</span>
                                                                              </div>
                                                                              <button name="add-cart" type="submit"
                                                                                    class="btn btn-add-cart ">
                                                                                    <i class="icons">
                                                                                          <svg version="1.1"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                x="0px" y="0px"
                                                                                                viewBox="0 0 512 512"
                                                                                                enable-background="new 0 0 512 512"
                                                                                                xml:space="preserve">
                                                                                                <g>
                                                                                                      <g>
                                                                                                            <path
                                                                                                                  d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z">
                                                                                                            </path>
                                                                                                      </g>
                                                                                                </g>
                                                                                          </svg>
                                                                                    </i>
                                                                                    <span>Add to Cart</span>
                                                                              </button>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                                            <input type="hidden" name="namepro-sell" value="<?= $value['name_pro'] ?>">
                                                            <input type="hidden" name="pricepro-sell"value="<?= $value['price'] ?>">
                                                            <input type="hidden" name="imgpro-sell" value="<?= $value['img'] ?>">
                                                      </form>

                                                </div>
                                                <?php endif ?>
                                                <?php endforeach ?>
                                          </div>
                                    </div>

                                    <!-- SHOW PRODUCT LIST  -->
                                    <!-- <div class="product-box-list">
                                                <?php

                                                $kq = getAllProduct();
                                                foreach ($kq as $value) :
                                                      if ($value['status'] == 1) :
                                                ?>
                                                            <div class="product-list-item">
                                                                  <div class="row-flex row-flex-margin">
                                                                        <div class="c-3 col">
                                                                              <div class="product">
                                                                                    <div class="product-image">
                                                                                          <a class="product-image-link" href="detail.php">
                                                                                                <img src="' . $value['img'] . '" alt="product-image">
                                                                                                <div class="product-hover-image">
                                                                                                      <div class="product-change-image">
                                                                                                            <img src="./public/images/product-hover-1.webp" alt="product-change-style">
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
                                                                              </div>
                                                                        </div>
                                                                        <div class="c-7 col">
                                                                              <div class="product-list-content">
                                                                                    <h4 class="product-list--name">
                                                                                    ' . $value['name_pro'] . '
                                                                                    </h4>
                                                                                    <div class="product-list-review">
                                                                                          <span class="list-review">
                                                                                                <span class="list-rating">
                                                                                                      <i class="fa-solid fa-star"></i>
                                                                                                      <i class="fa-solid fa-star"></i>
                                                                                                      <i class="fa-solid fa-star"></i>
                                                                                                      <i class="fa-solid fa-star"></i>
                                                                                                      <i class="fa-solid fa-star"></i>
                                                                                                </span>
                                                                                                <span class="list-review-count">
                                                                                                      4 reviews
                                                                                                </span>
                                                                                          </span>
                                                                                    </div>
                                                                                    <div class="product-list-desc">
                                                                                          <p> Mô tả</p>
                                                                                    </div>
                                                                                    <div class="product-list-price">
                                                                                          <div class="row-flex align-items">
                                                                                                <span class="product-list-old">
                                                                                                      <span class="money">$' . $value['price'] . '.00</span>
                                                                                                </span>
                                                                                                <span class="product-list-sale">
                                                                                                      <span class="money">$260.00</span>
                                                                                                </span>
                                                                                          </div>
                                                                                    </div>
                                                                                    <form action="#!" method="post" class="product-list-form">
                                                                                          <button class="btn btn-add-cart" type="submit" value="Submit">
                                                                                                <i class="icons">
                                                                                                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                                                                            <g>
                                                                                                                  <g>
                                                                                                                        <path d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z"></path>
                                                                                                                  </g>
                                                                                                            </g>
                                                                                                      </svg>
                                                                                                </i>
                                                                                                <span>Add to Cart</span>
                                                                                          </button>
                                                                                    </form>
                                                                              </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      <?php endif ?>
                                                <?php endforeach ?>
                                          </div> -->
                                    <!-- PAGINATION  -->

                                    <div class="c-12">
                                          <div class="product-pagination">
                                                <nav class="pagination">
                                                      <ul class="pagination-list">
                                                            <li class="pagination-item">
                                                                  <a class="pagination-page-link"
                                                                        href="index.php?act=product&pagenum=1">
                                                                        <i class="fa-sharp fa-solid fa-angle-left"></i>
                                                                  </a>
                                                            </li>
                                                            <li class="pagination-item active">
                                                                  <a class="pagination-page-link"
                                                                        href="index.php?act=product&pagenum=1">
                                                                        1
                                                                  </a>
                                                            </li>
                                                            <li class="pagination-item active">
                                                                  <a class="pagination-page-link"
                                                                        href="index.php?act=product&pagenum=2">
                                                                        2
                                                                  </a>
                                                            </li>
                                                            <li class="pagination-item active">
                                                                  <a class="pagination-page-link"
                                                                        href="index.php?act=product&pagenum=3">
                                                                        3
                                                                  </a>
                                                            </li>
                                                            <li class="pagination-item">
                                                                  <a class="pagination-page-link" href="#">
                                                                        <i class="fa-sharp fa-solid fa-angle-right"></i>
                                                                  </a>
                                                            </li>
                                                            <li class="pagination-item active">
                                                                  <a id="product" class="pagination-page-link"
                                                                        href="index.php?act=product&pagenum=3">
                                                                        3
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </nav>
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
$(document).ready(function() {
      $("#sortby").on('change', function() {
            var sortby = $(this).val();
            $.ajax({
                  url: "shop.php?action=sortby",
                  method: "POST",
                  data: "sortby:sortby",
                  success: (function(data) {
                        $("product").html(data);
                  })
            })
      });
});
</script>