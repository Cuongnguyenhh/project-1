<?php
require_once('./core/funtion.php');

require_once './models/TagOfProductModel.php';
require_once './models/ProductDetailModel.php';
require_once './models/SliderModel.php';
require_once './models/ConfigModel.php';
require_once './models/BlogModel.php';
require_once './models/ProductModel.php';
require_once './models/DealModel.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
switch ($action) {
    case 'home':
        require_once './view/home/index.php';
        break;

    case 'search':
        $content = $_POST['content'];
        $show = '';
        $product = getAllProduct();
        if ($content == '') {
            foreach ($product as $p) {
                $show .= '';
                // thêm khoảng trắng vào biến show 
            }
        } else {
            foreach ($product as $p) {
                if (strlen(strpos(strtolower($p['prd_name']), strtolower("$content"))) > 0) {
                    // Hàm strpos() sẽ tìm kiếm vị trí đầu tiên của kí tự hoặc chuỗi con xuất hiện trong chuỗi nguồn.
                    echo'<li class="search__item">
                            <a class="search__content-link" href="product.php?id=' . $p['ID'] . '">
                                <div class="search-image">
                                    <img src="uploads/'.$p['prd_img'].'" alt="">
                                </div>
                                <div class="search-content">
                                    <h5>' . $p['prd_name'] . '</h5>
                                    <div class="search-price">
                                        <span class="search-product-price">
                                            <span>'.$p['prd_price'].'</span>
                                        </span>
                                        <span class="search-compare-price">
                                            <span>'.$p['prd_price'].'</span>
                                        </span> 
                                    </div>
                                </div>
                            </a>
                        </li>';
                                 
                }
            }
        }
        break;
    case 'login':
        require_once './view/account/login.php';
        break;
    case 'register':
        require_once './view/account/register.php';
        break;
    case 'checkout':
        if (isset($_POST['checkout'])) {
            header('location: checkout.php');
            break;
        }
        
    default:
        require_once './view/home/index.php';
        break;
        
}

