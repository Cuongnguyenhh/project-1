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
}else{
    $action = 'home';
}
switch ($action) {
    case 'home':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            getProductDetailById($id);
            require_once './view/product/index.php';
        }
        break;
    
    
    default:
        require_once './view/product/index.php';
        break;
}
