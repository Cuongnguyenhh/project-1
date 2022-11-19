<?php
function getAll_cate(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT ID, prd_group_name, created FROM cms_products_group");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_cate = $stmt -> fetchAll();
    return $kq_cate;
}
function getAll_supp(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT ID, supplier_name, supplier_addr, supplier_phone, supplier_email FROM cms_suppliers");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_supp = $stmt -> fetchAll();
    return $kq_supp;
}
?>