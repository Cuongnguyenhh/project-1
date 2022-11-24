<?php
require_once 'core/connectdb.php';

// Lấy thẻ sản phẩm theo id
function getTagId($id){
    $sql = "SELECT * FROM cms_products_group WHERE id = $id;";
    return queryOne($sql);
}

// Lấy tất cả thẻ sản phẩm
function getAllTag(){
    $sql = "SELECT * FROM cms_products_group";
    return query($sql);
}

// Cập nhật thẻ sản phẩm
function updateTagProduct($id,$anhien,$name){
    $sql = 'UPDATE `cms_products_group` SET `id`='.$id.',`name`="'.$name.'",`show`='.$anhien.' WHERE id ='.$id.'';
    execute($sql);
}

// Thêm thẻ sản phẩm
function addNewTagProduct($anhien,$name){
    $sql = 'INSERT INTO `cms_products_group`(`name`, `show`) VALUES ("'.$name.'",'.$anhien.')';
    execute($sql);
}

// Xoá thẻ sản phẩm
function deleteTagProduct($id){
    $sql = 'DELETE FROM `cms_products_group` WHERE id ='.$id.'';
    execute($sql);
}

// Lấy thông tin thẻ sản phẩm từ id product
function getNameTagByIdProduct($id){
    $sql = 'SELECT * from `cms_products_group` inner join tag_of_product on tag_of_product.tag_id = category.id WHERE tag_of_product.product_id ='.$id.'';
    return queryOne($sql);
}
?>