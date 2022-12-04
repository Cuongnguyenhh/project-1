<?php
function getAll_pro(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq_user = $stmt -> fetchAll();
    return $kq_user;
}
function getOne_user($get_email){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_users WHERE email='$get_email'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user_one = $stmt -> fetchAll();
    return $user_one;
}
