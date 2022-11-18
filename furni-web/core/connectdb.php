<?php
// hàm connect db 
function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=duanmau", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
}


//Gửi câu truy vấn SELECT và trả về tất cả hàng.
function query($sql)
{
    $connect = getConnection();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
}

//Gửi câu truy vấn SELECT và trả về 1 hàng.
function queryOne($sql)
{
    $connect = getConnection();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
}

//Gửi câu truy vấn thêm xoá sửa và trả về ID vừa tương tác.
function execute($sql)
{
    $connect = getConnection();
    $result = $connect->exec($sql);
    $id = $connect->lastInsertId();
    return $id;
}

?>