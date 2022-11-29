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
            $id = $_POST['id_pro'];
            $name_cart = $_POST['name_pro'];
            $price_cart = $_POST['price_pro'];
            $img_cart = $_POST['img_pro'];
            if (!isset($_POST['amount_pro'])) {
                $amount = 1;
            } else {
                $amount = $_POST['amountpro-sell'];
            }
            $arr = array($id, $name_cart, $price_cart, $img_cart, $amount);
            $_SESSION['viewcart'][] = $arr;
        }
        require_once './view/cart/viewcart.php';
        break;
    case 'delonecart':
        if (isset($_GET['id'])) {
            // $id_pro = $_GET['id'];
            array_splice($_SESSION['viewcart'], $_GET['id'], 1);
        } else {
            unset($_SESSION['viewcart']);
        }
        include './view/cart/viewcart.php';
        // header('location: view-cart.php');
        break;

    default:
        require_once './view/shop/index.php';
        break;
}
