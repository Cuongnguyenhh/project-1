<?php

require_once 'core/connectdb.php';

// Lấy tất cả sản phẩm
function getAllProduct(){
    $sql = "SELECT * FROM cms_product";
    return query($sql);
}

// Lấy sản phẩm theo vị trí
function getProductByOffset($limit, $offset){
    $sql = "SELECT * FROM cms_product LIMIT $limit, $offset";
    return query($sql);
}

// Lấy sản phẩm theo id
function getProductById($id){
    $sql = "SELECT * FROM cms_product WHERE id = $id";
    return query($sql);
}

// Lọc sản phẩm
function getProductByFilter($where){
    $sql = $where ;
    return query($sql);
}

// Đếm sản phẩm
function getCountProduct(){
    $sql = "SELECT COUNT(*) FROM cms_product ";
    return queryOne($sql);
}

// Thêm sản phẩm
function addNewProduct($name,$cost,$price,$description,$update,$brand,$view,$color){
    $sql = "INSERT INTO cms_product (`name`, `cost`, `price`, `description`, `update`,`view`, `brand_id`, `color_id`) VALUES ('$name',$cost,$price,'$description','$update',$view,$brand,$color)";
    return execute($sql);
}

// Cập nhật sản phẩm
function updateProduct($id,$name,$cost,$price,$description,$update,$thumb,$brand,$listanh,$color){
    $sql = "UPDATE cms_product SET `id`=$id,`name`='$name',`cost`=$cost,`price`=$price,`description`='$description',`thumb`='$thumb',`update`='$update',`brand_id`=$brand, `images`='$listanh',`color_id`=$color WHERE id = $id";
    execute($sql);
}

//Xoá sản phẩm
function deleteProduct($id){
    $sql = "DELETE FROM cms_product WHERE id = $id";
    execute($sql);
}

// Cập nhật lượt xem
function updateViewProduct($view,$id){
    $sql = "UPDATE cms_product SET `view`=$view WHERE id = $id";
    execute($sql);
}

