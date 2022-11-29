<?php
require_once('./core/funtion.php');

require_once './models/TagOfProductModel.php';
require_once './models/ProductDetailModel.php';
require_once './models/SliderModel.php';
require_once './models/ConfigModel.php';
require_once './models/BlogModel.php';
require_once './models/ProductModel.php';
require_once './models/DealModel.php';
require_once './models/TagModel.php';


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}
switch ($action) {
    case 'home':
        require_once './view/shop/index.php';
        break;
    case 'viewcart':
        if (isset($_POST['add-cart'])) {
            if (isset($_SESSION['viewcart'])) {
                $arr_id = array_column($_SESSION['viewcart'],0);
                if (!in_array($_POST['id_pro'],$arr_id)) {
                    $count = count($_SESSION['viewcart']);
                    $arr = array($id, $name_cart, $price_cart, $img_cart, $amount);
                    $_SESSION['viewcart'][$count] = $arr;
                }else{
                    echo'<script>alert("đã dc thêm thành công ")</script>';
                }
            } else {
                $id = $_POST['id_pro'];
                $name_cart = $_POST['name_pro'];
                $price_cart = $_POST['price_pro'];
                $img_cart = $_POST['img_pro'];
                if (!isset($_POST['amount_pro'])) {
                    $amount = 1;
                } else {
                    $amount = $_POST['amount_pro'];
                }
                $arr = array($id, $name_cart, $price_cart, $img_cart, $amount);
                $_SESSION['viewcart'][] = $arr;
            }
        }
        require_once './view/cart/viewcart.php';
        break;
    case 'delonecart':
        if (isset($_GET['id'])) {
            array_splice($_SESSION['viewcart'], $_GET['id'], 1);
        } else {
            unset($_SESSION['viewcart']);
        }
        include './view/cart/viewcart.php';
        break;

    default:
        require_once './view/shop/index.php';
        break;
}
