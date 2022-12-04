<?php
    require '../admin_remake/config/database.php';
 function get_coment($get_id_prd){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM comment WHERE prd_id='$get_id_prd'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $comment = $stmt -> fetchAll();
    return $comment;
 }
 function get_username($id_user){
    $conn = condb();
    $stmt = $conn->prepare("SELECT * FROM cms_users WHERE ID='$id_user'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt -> fetchAll();
    return $user;

 }
?>