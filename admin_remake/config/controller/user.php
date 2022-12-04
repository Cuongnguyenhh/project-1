<?php
function getAll_pro(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_user = $stmt -> fetchAll();
    return $kq_user;
}
function getOne_pro($get_userName){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_user WHERE ID='$get_userName'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user_one = $stmt -> fetchAll();
    return $user_one;
}
