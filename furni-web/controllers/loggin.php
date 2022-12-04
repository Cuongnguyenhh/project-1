<?php
session_start();
ob_start();
include '../../admin_remake/config/database_sqly.php';
include '../../admin_remake/config/controller/user.php';
include '../../admin_remake/config/database.php';
 
 if(isset ($_SESSION['email'])){
    header('location:index.php');
 }
$email = $_POST['email'];
$psw = md5($_POST['psw']);
echo $psw;
echo $email;
 if(isset($_POST['login']) && $email !="" && $psw !="" ){
   $sql = "SELECT * FROM cms_users WHERE email= '$email' and password = '$psw'";
   $query = mysqli_query($conn,$sql);
   $num_rows = mysqli_num_rows($query);
   if ($num_rows==0) {
       echo "tên đăng nhập hoặc mật khẩu không đúng !";
   }else{
       //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
       echo "Dang nhap thanh cong";
       $user_one = getOne_user($email);
       foreach($user_one as $user){
        // echo $user['email'];
       }
       $_SESSION['email'] = $user['email'];
        $_SESSION['avt']= $user['display_img'];
        $_SESSION['type']= $user['group_id'];
        $_SESSION['id'] = $user['id'];
        header('location:../index.php');
   }
  
 }

?>