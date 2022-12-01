<?php
foreach ($kq as  $value) : ?>
      <main class="main-content" role="main">
            <div class="vela-path">
                  <div class="container">
                        <ol class="vela-path-list">
                              <li>
                                    <a href="#">
                                          <span>Home</span>
                                    </a>
                              </li>
                              <li>
                                    <a href="#">
                                          <span>
                                                <?= $value['id_prd_group'] ?>
                                          </span>
                                    </a>
                              </li>
                              <li>
                                    <span>
                                          <?= $value['prd_name'] ?>
                                    </span>
                              </li>

                        </ol>
                  </div>
            </div>
            <div class="vela-detail">
                  <div class="container">
                        <div class="row-flex row-flex-margin">
                              <div class="c-6 col">
                                    <div class="detail-image">
                                          <div class="detail-image-feature">

                                                <img class="detail-current-image" src="uploads/<?= $value['prd_img'] ?>" alt="detail-image-product">


                                          </div>


                                          <div class="detail-thumb-list">
                                                <div class="detail-thumb-item">
                                                      <img src="" alt="detail-thumb-image" class="thumb-image">
                                                </div>
                                                <div class="detail-thumb-item">
                                                      <img src="" alt="detail-thumb-image" class="thumb-image">
                                                </div>
                                                <div class="detail-thumb-item">
                                                      <img src="" alt="detail-thumb-image" class="thumb-image">
                                                </div>
                                                <div class="detail-thumb-item">
                                                      <img src="" alt="detail-thumb-image" class="thumb-image">
                                                </div>
                                          </div>
                                    </div>
                              </div>
                              <div class="c-6 col">
                                    <div class="detail-product-info">
                                          <h1>
                                          <?= $value['prd_name']; ?>
                                          </h1>
                                          

                                          
                                          <div class="detail-product-review">
                                                <span class="detail-review">
                                                      <span class="detail-rating">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                      </span>
                                                      <span class="detail-review-count">
                                                            4 nhận xét
                                                      </span>
                                                </span>
                                          </div>
                                          <div class="detail-product-price">
                                                <div class="row-flex align-items">
                                                      <span class="detail-price-old">
                                                            <span class="money">$<?= $value['prd_price'] ?></span>
                                                      </span>
                                                      <span class="detail-price-sale">
                                                            <span class="money">$<?= $value['prd_price'] ?></span>
                                                      </span>
                                                </div>
                                          </div>
                                          <div class="detail-product-desc">
                                                <p>Một người đàn ông khôn ngoan than khóc rằng chính xác, anh ta cần hymenaeos
                                                      phasellus felis, vì ngày mai nỗi đau của Tortor sẽ tốt cho anh ta, vì
                                                      tôi đã bị treo khỏi tài sản của tôi hoặc con sư tử.</p>
                                          </div>
                                          <div class="detail-product-wrapper">
                                                <div  class="detail-product-addcart">
                                                      <div class="addcard">
                                                            <form action="shop.php?action=viewcart" method="POST" class="addcard-group">
                                                                  <div class="addcard-quantity">
                                                                        <div class="addcard-qty">
                                                                              <button type="button" class="addcard-qty-minus">
                                                                                    <span>-</span>
                                                                              </button>
                                                                              <input type="text" name="amount_pro" value="3" min="1" pattern="[0-9]*" readonly >
                                                                              <input type="hidden" name="id_pro" value="<?= $value['ID'] ?>">
                                                                              <input type="hidden" name="name_pro" value="<?= $value['prd_name'] ?>">
                                                                              <input type="hidden" name="price_pro" value="<?= $value['prd_price'] ?>">
                                                                              <input type="hidden" name="img_pro" value="<?= $value['prd_img'] ?>">
                                                                              <button type="button" class="addcard-qty-plus">
                                                                                    <span>+</span>
                                                                              </button>
                                                                        </div>
                                                                  </div>
                                                                  <button type="submit" name="add-cart" class="btn btn-addcard">
                                                                        <i class="icons">
                                                                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                                                    <g>
                                                                                          <g>
                                                                                                <path d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z">
                                                                                                </path>
                                                                                          </g>
                                                                                    </g>
                                                                              </svg>
                                                                        </i>
                                                                        <span id="addcard-text">Giỏ hàng</span>
                                                                  </button>
                                                            </div>
                                                      </div>
                                                </form>
                                                <div class="detail-product-atribute">
                                                      <p class="atribute">
                                                            <label>Khả dụng:</label>
                                                            <?php
                                                            $quaility = getQuailityOfProduct($value['ID']);
                                                            if ($quaility > 0) {
                                                                  echo 'In stock';
                                                            } else {
                                                                  echo 'Out stock';
                                                            }
                                                            ?>
                                                      </p>
                                                      <p class="atribute">
                                                            <label>Người bán:</label>
                                                            htbl
                                                      </p>
                                                      <p class="atribute">
                                                            <label>SKU:</label>
                                                            N/A
                                                      </p>
                                                      <div class="atribute atribute-categories">
                                                            <label>Bộ sưu tập:</label>
                                                            <a href="#" title="Best Sellter">Bán chạy nhất</a>,
                                                            <a href="#" title="Decor Art">Nghệ thuật trang trí</a>,
                                                            <a href="#" title="Furniture">Đồ nội thất</a>,
                                                            <a href="#" title="Home page">Trang chủ</a>,
                                                            <a href="#" title="Kitchen Things">Dụng cụ bếp</a>,
                                                            <a href="#" title="New Products">Sản phẩm mới</a>,
                                                      </div>
                                                </div>
                                                <div class="detail-product-share">
                                                      <div class="share-title">
                                                            Chia sẻ:
                                                      </div>
                                                      <ul class="share-socials-list">
                                                            <li>
                                                                  <a href="#">
                                                                        <i class="fa-brands fa-twitter"></i>
                                                                  </a>
                                                            </li>
                                                            <li>
                                                                  <a href="#">
                                                                        <i class="fa-brands fa-facebook-f"></i>
                                                                  </a>
                                                            </li>
                                                            <li>
                                                                  <a href="#">
                                                                        <i class="fa-brands fa-pinterest-p"></i>
                                                                  </a>
                                                            </li>
                                                      </ul>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="vela-detail-info">
                  <div class="container">
                        <div class="detail-heading">
                              <ul class="detail-navbar-list">
                                    <li class="tab-item active" onclick="tabs(event, 'Description')">
                                          <a aria-expanded="true">Mô tả</a>
                                    </li>
                                    <li class="tab-item" onclick="tabs(event, 'ShippingandReturn')">
                                          <a aria-expanded="true">Vận chuyển và trả lại</a>
                                    </li>
                                    <li class="tab-item" onclick="tabs(event, 'Reviews')">
                                          <a aria-expanded="true">Nhận xét</a>
                                    </li>
                              </ul>
                        </div>
                        <div class="tabs-content">
                              <div id="Description" class="tab-pane active">
                                    <div class="rte">
                                          <?php
                                          foreach ($kq as  $value) {
                                                echo '<p>' . $value['prd_description'] . '</p>';
                                          }
                                          ?>

                                    </div>
                              </div>
                              <div id="ShippingandReturn" class="tab-pane ">
                                    <div class="rte">
                                          <h4>Chính sách trả hàng</h4>
                                          <p>Bạn có thể trả lại hầu hết các mặt hàng mới, chưa mở trong vòng 30 ngày kể từ
                                                ngày giao hàng để được hoàn tiền đầy đủ. Chúng tôi cũng sẽ thanh toán chi phí
                                                vận chuyển trả lại nếu việc trả lại là do lỗi của chúng tôi (bạn nhận được một
                                                mặt hàng không chính xác hoặc bị lỗi, v.v.).</p>
                                          <p>
                                                Bạn sẽ nhận được tiền hoàn lại trong vòng bốn tuần kể từ khi đưa gói hàng của
                                                bạn cho người gửi trả hàng, tuy nhiên, trong nhiều trường hợp, bạn sẽ nhận
                                                được tiền hoàn lại nhanh chóng hơn. Khoảng thời gian này bao gồm cả thời gian
                                                vận chuyển để chúng tôi nhận lại hàng của bạn từ người gửi hàng
                                                (5 đến 10 ngày làm việc), thời gian chúng tôi xử lý yêu cầu hoàn trả của bạn
                                                sau khi chúng tôi nhận được (3 đến 5 ngày làm việc) và thời gian ngân hàng của
                                                bạn xử lý yêu cầu hoàn tiền của chúng tôi (5 đến 10 ngày làm việc).
                                          </p>
                                          <p>
                                                Nếu bạn cần trả lại một mặt hàng, chỉ cần đăng nhập vào tài khoản của bạn, xem
                                                đơn đặt hàng bằng liên kết 'Hoàn thành Đơn đặt hàng' trong menu Tài khoản của
                                                Tôi và nhấp vào nút Trả lại (các) Mặt hàng. Chúng tôi sẽ thông báo cho bạn qua
                                                e-mail về khoản tiền hoàn lại của bạn sau khi chúng tôi
                                                nhận được và xử lý trả lại mục.
                                          </p>
                                          <h4>Đang chuyển hàng</h4>
                                          <p>Chúng tôi có thể gửi đến hầu như bất kỳ địa chỉ nào trên thế giới. Lưu ý rằng có
                                                những hạn chế đối với một số sản phẩm và một số sản phẩm không thể được vận
                                                chuyển đến các điểm đến quốc tế.</p>
                                          <p>Khi bạn đặt hàng, chúng tôi sẽ ước tính ngày vận chuyển và giao hàng cho bạn dựa
                                                trên sự sẵn có của các mặt hàng của bạn và các tùy chọn giao hàng mà bạn chọn.
                                                Tùy thuộc vào nhà cung cấp dịch vụ vận chuyển bạn chọn, ước tính ngày giao
                                                hàng có thể xuất hiện trên báo giá vận chuyển trang.</p>
                                          <p>Cũng xin lưu ý rằng phí vận chuyển cho nhiều mặt hàng chúng tôi bán dựa trên
                                                trọng lượng. Trọng lượng của bất kỳ mục nào như vậy có thể được tìm thấy trên
                                                trang chi tiết của nó. Để phản ánh chính sách của các công ty vận chuyển mà
                                                chúng tôi sử dụng, tất cả các trọng lượng sẽ được làm tròn thành pound tiếp
                                                theo.</p>
                                    </div>
                              </div>
                              <div id="Reviews" class="tab-pane">
                                    <div class="tab-product-review">
                                          <div class="spr-container">
                                                <div class="spr-header">
                                                      <h2 class="spr-header-title">
                                                            Phản hồi khách hàng
                                                      </h2>
                                                      <span class="spr-rating">
                                                            <i class="fa-solid fa-star" id="star1"></i>
                                                            <i class="fa-solid fa-star" id="star2"></i>
                                                            <i class="fa-solid fa-star" id="star3"></i>
                                                            <i class="fa-solid fa-star" id="star4"></i>
                                                            <i class="fa-solid fa-star" id="star5"></i>
                                                      </span>
                                                      <span class="spr-review-count">
                                                            Dựa trên 4 nhận xét
                                                      </span>
                                                      <span class="spr-action">
                                                            <a id="toggle">Viết nhận xét</a>
                                                      </span>
                                                </div>
                                                <div class="spr-content">
                                                      <div id="spr-form" class="spr-form">
                                                            <form action="" method="post">
                                                                  <input type="hidden" name="">
                                                                  <input type="hidden" name="">
                                                                  <h3 class="spr-form-title">Write a review</h3>
                                                                  <fieldset class="spr-form-contact">
                                                                        <div class="spr-form-contact-name">
                                                                              <label class="spr-form-label" for="">Name</label>
                                                                              <input class="spr-form-input spr-form-input-text " type="text" value placeholder="Enter your name">
                                                                        </div>
                                                                        <div class="spr-form-contact-email">
                                                                              <label class="spr-form-label" for="">Email</label>
                                                                              <input class="spr-form-input spr-form-input-email " type="email" value placeholder="john.smith@example.com">
                                                                        </div>
                                                                  </fieldset>
                                                                  <fieldset class="spr-form-review">
                                                                        <div class="spr-form-review-rating">
                                                                              <label class="spr-form-label" for="">Rating</label>
                                                                              <div class="spr-form-input spr-starrating ">
                                                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                                    <a href="#!"><i class="fa-solid fa-star"></i></a>
                                                                              </div>
                                                                        </div>
                                                                        <div class="spr-form-review-title">
                                                                              <label class="spr-form-label" for="">Review
                                                                                    Title</label>
                                                                              <input class="spr-form-input spr-form-input-text " type="text" placeholder="Give your review a title">
                                                                        </div>
                                                                        <div class="spr-form-review-body">
                                                                              <label class="spr-form-label" for="">Body of
                                                                                    Review
                                                                                    <span>
                                                                                          <span>(1500)</span>
                                                                                          <span></span>
                                                                                    </span>
                                                                              </label>
                                                                              <div class="spr-form-input">
                                                                                    <textarea class="spr-form-input spr-form-input-textarea " name="" id="" rows="10" placeholder="Write your comments here"></textarea>
                                                                              </div>
                                                                        </div>
                                                                  </fieldset>
                                                                  <fieldset class="spr-form-actions"></fieldset>
                                                            </form>

                                                      </div>
                                                      <div class="spr-reviews">
                                                            <div class="spr-review">
                                                                  <div class="spr-review-header">
                                                                        <div class="spr-review__rating">
                                                                              <span class="spr-review-header-star">
                                                                                    <i class="fa-solid fa-star"></i>
                                                                                    <i class="fa-solid fa-star"></i>
                                                                                    <i class="fa-solid fa-star"></i>
                                                                                    <i class="fa-solid fa-star"></i>
                                                                                    <i class="fa-solid fa-star"></i>
                                                                              </span>
                                                                              <div class="spr-review__func-admin">
                                                                                    <a class="func-admin__ban" href="#!">Ban</a>
                                                                                    <a class="func-admin__del" href="#!">
                                                                                          Delete Comment
                                                                                    </a>
                                                                              </div>
                                                                        </div>
                                                                        <h3 class="spr-review-header-title">nice</h3>
                                                                        <span class="spr-review-header-byline">
                                                                              <strong>Munir Hossain</strong>
                                                                              on
                                                                              <strong>Oct 07, 2020</strong>
                                                                        </span>
                                                                  </div>
                                                                  <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">
                                                                              Hiệp là đồ con chó =)))
                                                                        </p>
                                                                  </div>
                                                                  <div class="spr-review-footer">
                                                                        <a href="#" class="spr-review-reportreview">Report as
                                                                              Inappropriate</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </main>
<?php endforeach ?>
<script>
      // WRITE A REVIEW 
      $(document).ready(function() {
            $("#toggle").click(function() {
                  $("#spr-form").fadeToggle();
            })
      });
      // STAR RATING 
      $(document).ready(function() {
            $("#star1").click(function() {
                  $(".fa-star").css("color", "");
                  $("#star1").css("color", "orange");
            });
            $("#star2").click(function() {
                  $(".fa-star").css("color", "");
                  $("#star1,#star2").css("color", "orange");
            });
            $("#star3").click(function() {
                  $(".fa-star").css("color", "");
                  $("#star1,#star2,#star3").css("color", "orange");
            });
            $("#star4").click(function() {
                  $(".fa-star").css("color", "");
                  $("#star1,#star2,#star3,#star4").css("color", "orange");
            });
            $("#star5").click(function() {
                  $(".fa-star").css("color", "");
                  $("#star1,#star2,#star3,#star4,#star5").css("color", "orange");
            });
      });
</script>