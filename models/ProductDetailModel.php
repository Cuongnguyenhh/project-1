<?php
require_once 'core/connectdb.php';

// Lấy ra thông tin của sản phẩm
function getProductDetailById($id){
    $sql = "SELECT * FROM cms_product WHERE ID = $id";
    return query($sql);
}

// Lấy ra size của sản phẩm
function getQuailityOfProduct($productId){
    $sql = "SELECT quaility FROM cms_product WHERE ID = $productId ";
    return query($sql);
}

// Thêm chi tiết của sản phẩm
function addNewProductDetail($productId,$size,$quantity){
    $sql = 'INSERT INTO product_detail(`product_id`, `size_id`, `quantity`) VALUES ('.$productId.','.$size.','.$quantity.')';
    execute($sql);
}
function ordertop(){
    $sql = "SELECT prd_name, SUM(quailyti), price FROM cms_order_detail GROUP BY prd_name ORDER BY `SUM(quailyti)` ASC LIMIT 3";
    return query($sql);
}
// Cập nhật số lượng của sản phẩm
function updateProductDetail($productId,$size,$quantity){
    $sql = "UPATE product_detail set `quantity`= $quantity where `product_id`=$productId, `size_id`=$size";
    execute($sql);
}

function  deleteProductDetailById($id){
    $sql = "DELETE FROM `product_detail` WHERE product_id = $id";
    execute($sql);
}

?>
