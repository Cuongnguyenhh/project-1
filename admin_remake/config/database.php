<?php
function condb(){
    $servername = "baowebpa_qlbanhang2";
    $username = "baowebpa_admin";
    $pass = "admin123Admin";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=baowebpa_qlbanhang2", $username, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}


?>