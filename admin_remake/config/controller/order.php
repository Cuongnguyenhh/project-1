<?php
 function getAll_order(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_order");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_order = $stmt -> fetchAll();
    return $kq_order;
}
function getOrder($id_order){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_order_detail WHERE order_id = $id_order ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $order_detail = $stmt -> fetchAll();
    return $order_detail;
}
?>