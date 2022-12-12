<?php
 function getAll_order(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_order");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_order = $stmt -> fetchAll();
    return $kq_order;
}
function getAll_orderById($id_order){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_order WHERE ID=$id_order");
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
function getOrder_user($id_user){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_order WHERE customer_id = $id_user ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $order_user = $stmt -> fetchAll();
    return $order_user;
}
function getOne_user_byId($id){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_users WHERE id='$id'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user_one = $stmt -> fetchAll();
    return $user_one;

    function getAll_Order_bylm($top, $offset){
        $conn = condb();
        $stmt = $conn->prepare("SELECT * FROM cms_order LIMIT $top OFFSET $offset");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $order = $stmt -> fetchAll();
        return $order;
    }
}
?>