<?php
<<<<<<< HEAD
    function getAll_user(){
        $conn = condb();
        $stmt = $conn->prepare("SELECT * FROM cms_products_group");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq_user = $stmt -> fetchAll();
        return $kq_user;
    }
    function getOne_user($get_id){
        $conn = condb();
        $stmt = $conn->prepare("SELECT * FROM cms_product WHERE ID='$get_id'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $user_one = $stmt -> fetchAll();
        return $user_one;
        
       
    }
    function checkPassword($mail, $psw){
        $conn = condb();
        
    }

    
?>
=======
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
>>>>>>> a9c2e1ad787af53fffece1f214416b962116c169
