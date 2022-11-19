<?php
    function getAll_customer(){
        $conn = condb();
        $stmt = $conn->prepare("SELECT ID, customer_name, img_customer, customer_addr, customer_birthday, customer_gender, customer_phone , customer_email FROM cms_customers");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq_customers = $stmt -> fetchAll();
        return $kq_customers;
    }
?>