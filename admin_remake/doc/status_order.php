<?php
require '../config/database.php';
if(isset($_POST['status_up'])){
    $status = $_POST['status'];
    $conn = condb();
    $id = $_GET['id'];
    try {

        $sql = "UPDATE cms_order SET status='$status' WHERE ID=$id";
      
        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
      
        // echo a message to say the UPDATE succeeded
        header("location: ./index.php?act=order");
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
}
?>