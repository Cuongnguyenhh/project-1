<?php
function condb(){
    $servername = "localhost";
    $username = "root";
    $pass = "";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=qlbanhang2", $username, $pass);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
}


?>