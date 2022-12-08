<?php
include './admin_remake/config/controller/user.php';
include './admin_remake/config/database.php';
$conn = condb();
    if(isset($_POST['signin'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $psw = md5($_POST['psw']);
        $display_name = $first_name.' '.$last_name;

        
        try {
            
            $sql = "INSERT INTO cms_users (email, password, display_name)
            VALUES ('$email', '$psw', '$display_name')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }
          
          $conn = null;

    }
?>