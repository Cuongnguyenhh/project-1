<?php
require_once '../admin_remake/config/database.php';
$conn =condb();
require_once '../admin_remake/config/controller/user.php';
$userOne = getOne_user($_SESSION['email']);
foreach($userOne as $user){
}
?>
<div class="app">
      <header class="header">
            <div class="container">
                  <div class="header-main row-flex row-flex-margin align-items">
                        <div class="header-logo col c-2">
                              <div class="menu__mobile" id="menu-mobile">
                                    <span class="menu__icon"></span>
                                    <span class="menu__icon"></span>
                                    <span class="menu__icon"></span>
                                    <span class="menu__icon"></span>
                              </div>
                              <a href="index.php">
                                    <img src="https://cdn.shopify.com/s/files/1/1573/5553/files/logo_dark.svg?v=1601695205"
                                          alt="Logo Outstock">
                              </a>
                        </div>
                        <ul class="header-navbar col c-7" id="navbar-menu">
                              <div class="navbar__title-mobile">
                                    <span>Menu Mobile</span>
                                    <div class="navbar__menu-close" id="nav-menu-close">
                                          <i class="fa-solid fa-xmark"></i>
                                    </div>
                              </div>
                              <li>
                                    <a class="active" href="index.php">
                                          <span>Trang chủ</span>
                                    </a>
                              </li>
                              <li>
                                    <a href="shop.php">
                                          <span>Cửa hàng</span>
                                    </a>
                              </li>
                              <li class="has-dropdown">
                                    <a href="collection.php">
                                          <span>Bộ sưu tập</span>
                                    </a>
                                    <div class="collection-dropdown">
                                          <div class="container">
                                                <div class="coll-dropdown">
                                                      <h3 class="coll-title-list">
                                                            Danh sách bộ sưu tập
                                                      </h3>
                                                      <div class="row-flex row-flex-margin">
                                                            <div class="coll-list">
                                                                  <div class="coll-item">
                                                                        <a class="coll-image" href="#">
                                                                              <img src="https://cdn.shopify.com/s/files/1/1573/5553/collections/18_360x.jpg?v=1511442950"
                                                                                    alt="Decor Art">
                                                                        </a>
                                                                        <h5 class="coll-title">
                                                                              <a href="#">Nghệ thuật trang trí</a>
                                                                        </h5>
                                                                  </div>
                                                                  <div class="coll-item">
                                                                        <a class="coll-image" href="#">
                                                                              <img src="https://cdn.shopify.com/s/files/1/1573/5553/collections/7_360x.jpg?v=1511442889"
                                                                                    alt="Decor Art">
                                                                        </a>
                                                                        <h5 class="coll-title">
                                                                              <a href="#">Đồ nội thất</a>
                                                                        </h5>
                                                                  </div>
                                                                  <div class="coll-item">
                                                                        <a class="coll-image" href="#">
                                                                              <img src="https://cdn.shopify.com/s/files/1/1573/5553/collections/21_360x.jpg?v=1511442906"
                                                                                    alt="Decor Art">
                                                                        </a>
                                                                        <h5 class="coll-title">
                                                                              <a href="#">Đồ nhà bếp</a>
                                                                        </h5>
                                                                  </div>
                                                                  <div class="coll-item">
                                                                        <a class="coll-image" href="#">
                                                                              <img src="https://cdn.shopify.com/s/files/1/1573/5553/collections/12_360x.jpg?v=1511442995"
                                                                                    alt="Decor Art">
                                                                        </a>
                                                                        <h5 class="coll-title">
                                                                              <a href="#">Sự chiếu sáng</a>
                                                                        </h5>
                                                                  </div>
                                                                  <div class="coll-item">
                                                                        <a class="coll-image" href="#">
                                                                              <img src="https://cdn.shopify.com/s/files/1/1573/5553/collections/Arc-Large-Cup_360x.jpg?v=1511443696"
                                                                                    alt="Decor Art">
                                                                        </a>
                                                                        <h5 class="coll-title">
                                                                              <a href="#">Giảm giá</a>
                                                                        </h5>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </li>
                              <li>
                                    <a href="blog.php">
                                          <span>Blog</span>
                                    </a>
                              </li>
                              <li>
                                    <a href="contact.php">
                                          <span>Liên lạc</span>
                                    </a>
                              </li>
                              <li>
                                    <a href="../admin_remake/doc/index.php">
                                          <span>admin</span>
                                    </a>
                              </li>
                        </ul>
                        <div class="header-item col c-3">
                              <a class="header-item__search">
                                    <span>
                                          <svg version="1.1" xmlns='http://www.w3.org/2000/svg'
                                                xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                                viewBox='0 0 512 512' xml:space='preserve'>
                                                <path
                                                      d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z">
                                                </path>
                                          </svg>
                                    </span>
                              </a>
                              <!-- Search overlay -->
                              <div class="overlay">
                                    <div class="search-overlay">
                                          <div class="search-input">
                                                <div class="search-input__container">
                                                      <input type="search" name="" id="live_search"
                                                            placeholder="Search...">
                                                </div>
                                                <ul id="result"></ul>
                                          </div>
                                    </div>
                                    <div class="overlay-layout"></div>
                              </div>

                              <div class="header-item__card">
                                    <a href="#" class="item__card-link onclickBtn" style="margin: 0; margin-left: 2px;">
                                          <i>
                                                <svg version="1.1" xmlns='http://www.w3.org/2000/svg'
                                                      xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                                      viewBox='0 0 512 512' style="enable-background:new 0 0 512 512;"
                                                      xml:space='preserve'>
                                                      <path
                                                            d="M448,160h-64v-4.5C384,87,329,32,260.5,32h-8C184,32,128,87,128,155.5v4.5H64L32,480h448L448,160z M160,155.5c0-50.7,41.8-91.5,92.5-91.5h7.5h0.5c50.7,0,91.5,40.8,91.5,91.5v4.5H160V155.5z M67.8,448l24.9-256H128v36.3c-9.6,5.5-16,15.9-16,27.7c0,17.7,14.3,32,32,32s32-14.3,32-32c0-11.8-6.4-22.2-16-27.7V192h192v36.3c-9.6,5.5-16,15.9-16,27.7c0,17.7,14.3,32,32,32s32-14.3,32-32c0-11.8-6.4-22.2-16-27.7V192h35.4l24.9,256H67.8z">
                                                      </path>
                                                </svg>
                                          </i>
                                          (
                                          <span id="CartCount">
                                                <?php
                                                echo (isset($_SESSION['viewcart']) && count($_SESSION['viewcart'])) > 0 ? count($_SESSION['viewcart']) : '0';


                                                ?>
                                          </span>
                                          )
                                    </a>
                              </div>

                              <div class="header-bars">
                                    <div class="header-bars__user">
                                          <a class="header-bars__user-link" href="#!">
                                                <img src="uploads/<?php echo $user['display_img']?>" alt="">
                                                <span
                                                      class="header-bars__user-name"><?php echo $user['display_name'] ?></span>
                                          </a>
                                    </div>
                                    <ul class="header-bars-list">
                                          <li class="header-bars-item">
                                                <a href="index.php?action=user&id=<?=$_SESSION['id']?>">Tài khoản của
                                                      tôi</a>
                                          </li>
                                          <li class="header-bars-item">
                                                <a href="controllers/logout.php"><i
                                                            class="fa-solid fa-arrow-right-from-bracket"></i>
                                                      Đăng xuất
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </header>
</div>
<?php include_once 'cart-header.php'; ?>
<script>
// #LIVE SEARCH 
$(document).ready(function() {
      $("#live_search").keyup(function() {
            var content = $(this).val();
            if (content != '') {
                  $.ajax({
                        url: "home.php?action=search",
                        method: "POST",
                        data: {
                              content: content
                        },
                        success: function(
                              data
                        ) { // Hàm thực thi khi nhận dữ liệu được từ server
                              $('#result').html(data);
                              $("#result").css("display", "block");
                        }
                  });
            } else {
                  $("#result").css("display", "none");
            }
      });
});


// Search Cliked

const search = document.querySelector('.header-item__search');

search.addEventListener('click', () => {
      const overlay = document.querySelector('.overlay');
      overlay.classList.add('in')
      const layout = document.querySelector('.overlay-layout');
      layout.addEventListener('click', () => {
            overlay.classList.remove('in');
      })
})
</script>