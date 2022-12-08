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
            $amount = $_POST['amount_pro'];
            $i = 0;
            $flag = 0;
            if (!empty($_SESSION['viewcart'])) {
                foreach ($_SESSION['viewcart'] as  $value) {
                    if ($value[0] == $id) {
                        // cập nhật số lượng 
                        $amount += $value[4];
                        $flag = 1;
                        $_SESSION['viewcart'][$i][4] = $amount;
                        break;
                    }
                    $i++;
                }
            }
            if ($flag == 0) {
                $arr = array($id, $name_cart, $price_cart, $img_cart, $amount);
                array_push($_SESSION['viewcart'], $arr);
            }
        }
        // header('location:viewcart.php');
        break;
    case 'delonecart':
        if (isset($_GET['id'])) {
            array_splice($_SESSION['viewcart'], $_GET['id'], 1);
        } else {
            unset($_SESSION['viewcart']);
        }
        header('location:viewcart.php');
        break;
    case 'cate':
        $id = $_GET['id'];
        if ($id == 0) {
            
        }
        break;
    default:
        require_once './view/shop/index.php';
        break;
}
