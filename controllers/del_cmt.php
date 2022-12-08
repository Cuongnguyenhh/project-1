<?php
    require '../admin_remake/config/database.php';
    $id_cmt = $_GET['id_cmt'];
  
    
        $conn = condb();
        try {
          
            $sql = "DELETE FROM comment WHERE id=$id_cmt";
          
            // use exec() because no results are returned
            $conn->exec($sql);
          
            // header('location : ../product.php');
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          

    
?>