<?php
require '';
function getAll_pro(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT ID, prd_name, prd_img, quaility, prd_status, prd_sell_price, id_prd_group, prd_description FROM cms_product");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
}
function getOne_pro($get_id){
    $conn = condb();
    $stmt = $conn->prepare("SELECT quaility ,prd_name, prd_price, id_prd_group, id_pro_manufacture,prd_sell_price, prd_img, prd_description FROM cms_product WHERE ID='$get_id'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $pro_one = $stmt -> fetchAll();
    return $pro_one;
    
  
   }

