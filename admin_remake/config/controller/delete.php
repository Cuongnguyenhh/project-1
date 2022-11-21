<?php
require '../database.php';

$getid =$_GET['getid'];
echo $getid;


    $conn = condb();

    try{
    $sql = "DELETE FROM cms_product WHERE id=$getid";

  // use exec() because no results are returned
  $conn->exec($sql);
 
  header('location: http://localhost/admin_project1/admin_remake/doc/?act=product');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
header('location: http://localhost/admin_project1/admin_remake/doc/?act=product');

?>