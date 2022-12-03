<?php
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