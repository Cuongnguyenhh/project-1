<?php
require '../database.php';

$getid =$_GET['getid'];
echo $getid;


    $conn = condb();

    try{
    $sql = "DELETE FROM cms_users WHERE id=$getid";

  // use exec() because no results are returned
  $conn->exec($sql);
 
  header('location: ../../doc/?act=ql_khachhang');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
header('location: ../../doc/?act=ql_khachhang');

?>