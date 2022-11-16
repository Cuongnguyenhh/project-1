<main class="main-content" role="main">
      <section class="slide-show">
            <div class="swiper slide-show-swiper">
                  <div class="swiper-wrapper">
                        <div class="swiper-slide">
                              <div class="slide-image">
                                    <img src="assets/img/Slideshow/slide-show1.webp" alt="slide-show-images">
                                    <div class="container row-flex-margin">
                                          <div class="slide-content">
                                                <h2 class="slide-title-h2">
                                                      Thủ công
                                                </h2>
                                                <h3 class="slide-title-h3">
                                                      Cà phê chạm khắc bằng tay
                                                </h3>
                                                <div class="slide-desc">
                                                      Phong phú và độc đáo như những hạt cà phê mà nó dành cho, món sốt
                                                      nhỏ này sẽ khiến nghi thức buổi sáng của bạn trở thành một dịp đặc
                                                      biệt mỗi ngày
                                                </div>
                                                <div class="slide-button">
                                                      <a href="" class="btn btn-slide-show">
                                                            Khám phá ngay bây giờ
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="swiper-slide">
                              <div class="slide-image">
                                    <img src="assets/img/Slideshow/slide-show2.webp" alt="slide-show-images">
                                    <div class="container row-flex-margin">
                                          <div class="slide-content">
                                                <h2 class="slide-title-h2">
                                                      Nghĩ khác &
                                                </h2>
                                                <h3 class="slide-title-h3">
                                                      Làm khác đi
                                                </h3>
                                                <div class="slide-desc">
                                                      Sự rõ ràng cũng là một quá trình năng động kéo theo thói quen thay
                                                      đổi của người đọc.
                                                </div>
                                                <div class="slide-button">
                                                      <a href="" class="btn btn-slide-show">
                                                            Khám phá ngay bây giờ
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="swiper-slide">
                              <div class="slide-image">
                                    <img src="assets/img/Slideshow/slide-show3.webp" alt="slide-show-images">
                                    <div class="container row-flex-margin">
                                          <div class="slide-content">
                                                <h2 class="slide-title-h2">
                                                      High Beam
                                                </h2>
                                                <h3 class="slide-title-h3">
                                                      by HTBL
                                                </h3>
                                                <div class="slide-desc">
                                                      High Beam là đèn để bàn hoặc đèn kệ có thể điều chỉnh được mang
                                                      đến nhiều khả năng chiếu sáng.
                                                </div>
                                                <div class="slide-button">
                                                      <a href="" class="btn btn-slide-show">
                                                            Khám phá ngay bây giờ
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-next fa-solid fa-angle-right"></div>
                  <div class="swiper-button-prev fa-solid fa-angle-left"></div>
            </div>
      </section>
      <section class="triple-banner">
            <div class="container">
                  <div class="banner-inner">
                        <div class="row-flex row-flex-margin align-items">
                              <div class="c-4 col">
                                    <div class="banner effect-one">
                                          <a class="banner-link" href="#">
                                                <img class="banner-image" src="assets/img/Triple-Banner/banner1.avif"
                                                      alt="banner-product-image">
                                          </a>
                                    </div>
                              </div>
                              <div class="c-4 col">
                                    <div class="banner effect-one">
                                          <a class="banner-link" href="#">
                                                <img class="banner-image" src="assets/img/Triple-Banner/banner2.avif"
                                                      alt="banner-product-image">
                                          </a>
                                    </div>
                              </div>
                              <div class="c-4 col">
                                    <div class="banner effect-one">
                                          <a class="banner-link" href="#">
                                                <img class="banner-image" src="assets/img/Triple-Banner/banner3.avif"
                                                      alt="banner-product-image">
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
      <section class="trending-product">
            <div class="container">
                  <div class="row-flex-margin">
                        <div class="home-heading">
                              <h3 class="home-title">
                                    <span>Bán chạy nhất</span>
                              </h3>
                              <p class="home-desc">Thật đáng ngạc nhiên khi lưu ý rằng chữ cái Gothic mà chúng ta nghĩ
                                    đến bây giờ rõ ràng đến mức nào!</p>
                        </div>

                        <div class="products">
                              <div class="row-flex">
                                    <?php
                        $top = 4;
                        $offset = 0;
                        $kq = getProductByOffset($top,$offset);
                        foreach ($kq as $value) {
                              echo '
                              <div class="column c-3 col">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="index.php?act=detail&id=' . $value['id'] . '">
                                                            <img src="'.$value['img'].'" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp" alt="product-change-style">
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
                                                            <a class="product-title-link" href="index.php?act=detail&id=' . $value['id'] . '"">'.$value['name_pro'].'</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$'.$value['price'].'</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST" enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                              ';
                        }
                        ?>


                              </div>
                              <div class="product-load-more">
                                    <a class="btn-load-more">Tải thêm</a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
      <section class="double-banner">
            <div class="row-flex row-flex-margin">
                  <div class="c-6 col">
                        <div class="banner-item effect-one">
                              <a class="banner-item-link" href="#">
                                    <img class="banner-item-image" src="assets/img/Double-Banner/banner1.webp"
                                          alt="banner-product-effect">
                              </a>
                        </div>
                  </div>
                  <div class="c-6 col">
                        <div class="banner-item effect-one">
                              <a class="banner-item-link" href="#">
                                    <img class="banner-item-image" src="assets/img/Double-Banner/banner2.webp"
                                          alt="banner-product-effect">
                              </a>
                        </div>
                  </div>
            </div>
      </section>
      <section class="sale-off">
            <div class="container">
                  <div class="row-flex-margin">
                        <div class="home-heading">
                              <h3 class="home-title">
                                    <span>Giảm giá</span>
                              </h3>
                              <p class="home-desc">Thật đáng ngạc nhiên khi lưu ý rằng chữ cái Gothic mà chúng ta nghĩ
                                    đến bây giờ rõ ràng đến mức nào!</p>
                        </div>
                        <div class="swiper swiper-effect slide-card-swiper">
                              <div class="swiper-wrapper">
                                    <?php
                        $top = 4;
                        $offset = 0;
                        $kq = getProductByOffset($top,$offset);
                        foreach ($kq as $value) {
                              echo '
                              <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                
                                                      <a class="product-image-link" href="index.php?act=detail&id=' . $value['id'] . '">
                                                            <img src="'.$value['img'].'" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="'.$value['img'].'" alt="product-change-style">
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
                                                            <a class="product-title-link" href="index.php?act=detail&id=' . $value['id'] . '">'.$value['name_pro'].'</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$'.$value['price'].'</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST" enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                              ';
                        }
                        ?>

                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="product">
                                                <div class="product-image">
                                                      <a class="product-image-link" href="detail.php">
                                                            <img src="assets/img/product-1.webp" alt="product-image">
                                                            <div class="product-hover-image">
                                                                  <div class="product-change-image">
                                                                        <img src="assets/img/product-hover-1.webp"
                                                                              alt="product-change-style">
                                                                  </div>
                                                            </div>
                                                      </a>
                                                      <div class="product-label-sale">
                                                            <span>Sale</span>
                                                      </div>
                                                      <div class="product-quick-view">
                                                            <a class="btn btn-product-view btn-quick-view" href="#">
                                                                  <span class="icons">
                                                                        <svg version="1.1"
                                                                              xmlns="http://www.w3.org/2000/svg"
                                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                              x="0px" y="0px" viewBox="0 0 512 512"
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
                                                            <a class="product-title-link" href="detail.php">Ghế công
                                                                  thái học</a>
                                                      </h5>
                                                      <div class="product-price">
                                                            <div class="product-current">
                                                                  <span>$260.00</span>
                                                            </div>
                                                            <div class="product-sale">
                                                                  <span>$280.00</span>
                                                            </div>
                                                            <form class="product-form" action="#" method="POST"
                                                                  enctype="multipart/form-data">
                                                                  <button class="btn btn-add-cart">
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
                                                                        <span>Thêm vào giỏ hàng</span>
                                                                  </button>
                                                            </form>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="swiper-button-next fa-solid fa-angle-right slide-card-next slide-swiper-next">
                              </div>
                              <div class="swiper-button-prev fa-solid fa-angle-left slide-card-prev slide-swiper-prev">
                              </div>
                              <div class="swiper-pagination"></div>
                        </div>
                  </div>
            </div>
      </section>
      <section class="logo-company">
            <div class="container">
                  <div class="row-flex-margin">
                        <div class="swiper swiper-effect slide-company-swiper">
                              <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                          <div class="row-flex align-items justify-center">
                                                <a class="logo-item-link" href="#">
                                                      <img src="assets/img/Company-logo/logo-com-1.webp"
                                                            alt="logo-company-image" class="logo-item-image">
                                                </a>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="row-flex align-items justify-center">
                                                <a class="logo-item-link" href="#">
                                                      <img src="assets/img/Company-logo/logo-com-2.webp"
                                                            alt="logo-company-image" class="logo-item-image">
                                                </a>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="row-flex align-items justify-center">
                                                <a class="logo-item-link" href="#">
                                                      <img src="assets/img/Company-logo/logo-com-3.webp"
                                                            alt="logo-company-image" class="logo-item-image">
                                                </a>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="row-flex align-items justify-center">
                                                <a class="logo-item-link" href="#">
                                                      <img src="assets/img/Company-logo/logo-com-4.webp"
                                                            alt="logo-company-image" class="logo-item-image">
                                                </a>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="row-flex align-items justify-center">
                                                <a class="logo-item-link" href="#">
                                                      <img src="assets/img/Company-logo/logo-com-5.webp"
                                                            alt="logo-company-image" class="logo-item-image">
                                                </a>
                                          </div>
                                    </div>
                              </div>
                              <div class="swiper-button-next fa-solid fa-angle-right slide-swiper-next"></div>
                              <div class="swiper-button-prev fa-solid fa-angle-left slide-swiper-prev"></div>
                        </div>
                  </div>
            </div>
      </section>
      <section class="blog-post">
            <div class="container">
                  <div class="row-flex-margin">
                        <div class="home-heading">
                              <h3 class="home-title">
                                    <span>Các bài đăng trên blog của chúng tôi</span>
                              </h3>
                              <p class="home-desc">Thật đáng ngạc nhiên khi lưu ý rằng chữ cái Gothic mà chúng ta nghĩ
                                    đến bây giờ rõ ràng đến mức nào!</p>
                        </div>
                        <div class="swiper swiper-effect slide-blog-swiper">
                              <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                          <div class="blog">
                                                <div class="blog-image">
                                                      <a class="blog-image-link" href="#">
                                                            <img src="assets/img/Blog/blog-1.webp" alt="image-blog">
                                                      </a>
                                                </div>
                                                <div class="blog-content">
                                                      <h3 class="blog-title">
                                                            <a href="#">Hàng bán chạy nhất</a>
                                                      </h3>
                                                      <div class="blog-meta">
                                                            <span class="blog-author">
                                                                  <span>Bởi</span>
                                                                  Mr Admin
                                                            </span>
                                                            <span>/</span>
                                                            <span class="blog-publish">11/16, 2022</span>
                                                      </div>
                                                      <div class="blog-desc">
                                                            Diga, Koma và Torus là ba dụng cụ nhà bếp được thiết
                                                            kế cho Ommo, một thương hiệu theo định hướng thiết kế
                                                            mới ...
                                                      </div>
                                                      <div class="btn btn-blog">
                                                            Đọc thêm
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="blog">
                                                <div class="blog-image">
                                                      <a class="blog-image-link" href="#">
                                                            <img src="assets/img/Blog/blog-1.webp" alt="image-blog">
                                                      </a>
                                                </div>
                                                <div class="blog-content">
                                                      <h3 class="blog-title">
                                                            <a href="#">Hàng bán chạy nhất</a>
                                                      </h3>
                                                      <div class="blog-meta">
                                                            <span class="blog-author">
                                                                  <span>Bởi</span>
                                                                  Mr Admin
                                                            </span>
                                                            <span>/</span>
                                                            <span class="blog-publish">11/16, 2022</span>
                                                      </div>
                                                      <div class="blog-desc">
                                                            Diga, Koma và Torus là ba dụng cụ nhà bếp được thiết
                                                            kế cho Ommo, một thương hiệu theo định hướng thiết kế
                                                            mới ...
                                                      </div>
                                                      <div class="btn btn-blog">
                                                            Đọc thêm
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="blog">
                                                <div class="blog-image">
                                                      <a class="blog-image-link" href="#">
                                                            <img src="assets/img/Blog/blog-1.webp" alt="image-blog">
                                                      </a>
                                                </div>
                                                <div class="blog-content">
                                                      <h3 class="blog-title">
                                                            <a href="#">Hàng bán chạy nhất</a>
                                                      </h3>
                                                      <div class="blog-meta">
                                                            <span class="blog-author">
                                                                  <span>Bởi</span>
                                                                  Mr Admin
                                                            </span>
                                                            <span>/</span>
                                                            <span class="blog-publish">11/16, 2022</span>
                                                      </div>
                                                      <div class="blog-desc">
                                                            Diga, Koma và Torus là ba dụng cụ nhà bếp được thiết
                                                            kế cho Ommo, một thương hiệu theo định hướng thiết kế
                                                            mới ...
                                                      </div>
                                                      <div class="btn btn-blog">
                                                            Đọc thêm
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide">
                                          <div class="blog">
                                                <div class="blog-image">
                                                      <a class="blog-image-link" href="#">
                                                            <img src="assets/img/Blog/blog-1.webp" alt="image-blog">
                                                      </a>
                                                </div>
                                                <div class="blog-content">
                                                      <h3 class="blog-title">
                                                            <a href="#">Hàng bán chạy nhất</a>
                                                      </h3>
                                                      <div class="blog-meta">
                                                            <span class="blog-author">
                                                                  <span>Bởi</span>
                                                                  Mr Admin
                                                            </span>
                                                            <span>/</span>
                                                            <span class="blog-publish">11/16, 2022</span>
                                                      </div>
                                                      <div class="blog-desc">
                                                            Diga, Koma và Torus là ba dụng cụ nhà bếp được thiết
                                                            kế cho Ommo, một thương hiệu theo định hướng thiết kế
                                                            mới ...
                                                      </div>
                                                      <div class="btn btn-blog">
                                                            Đọc thêm
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="swiper-button-next fa-solid fa-angle-right slide-blog slide-swiper-next">
                              </div>
                              <div class="swiper-button-prev fa-solid fa-angle-left slide-blog slide-swiper-prev">
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</main>