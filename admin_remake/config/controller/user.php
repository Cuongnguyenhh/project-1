<?php
function getAll_user(){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_users");
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
function getOne_user_byId($id){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_users WHERE id='$id'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user_one = $stmt -> fetchAll();
    return $user_one;
}