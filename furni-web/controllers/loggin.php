<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.min.css" integrity="sha512-NvuRGlPf6cHpxQqBGnPe7fPoACpyrjhlSNeXVUY7BZAj1nNhuNpRBq3osC4yr2vswUEuHq2HtCsY2vfLNCndYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
echo "
  <script>
  const Swal = require('sweetalert2')
    Swal.fire('Any fool can use a computer')
    setTimeout(()=>{
      location.href = '../index.php'
    }, 3000)
  </script>
  ";
 if(isset($_POST['login']) && $email !="" && $psw !="" ){
   $sql = "SELECT * FROM cms_users WHERE email= '$email' and password = '$psw'";
   $query = mysqli_query($conn,$sql);
   $num_rows = mysqli_num_rows($query);
   if ($num_rows==0) {
       echo "tên đăng nhập hoặc mật khẩu không đúng !";
   }else{
    
    $user_one = getOne_user($email);
    foreach($user_one as $user){
     // echo $user['email'];
    }
    $_SESSION['adr_user'] = $user['adr_user'];
    $_SESSION['display_name'] = $user['display_name'];
    $_SESSION['email'] = $user['email'];
     $_SESSION['avt']= $user['display_img'];
     $_SESSION['type']= $user['group_id'];
     $_SESSION['id'] = $user['id'];
    $_SESSION['log_ss'] = $_SESSION['email'];
    $_SESSION['phone_num'] = $user['phone'];



  if(isset($_SESSION['log_ss'])){
    
    echo "
    <script>  
    alert('Ngu');
    </script> 
    ";
    header('location: ../index.php');
    unset($_SESSION['log_ss']);
 }  
     
   

       //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
      
        // header('location:../index.php');
        
   }
  
 }

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.15/sweetalert2.all.min.js" integrity="sha512-SFaxUL267Y1wH3eelsqXwDXir/ebciCMRmmqlbwnSKhQH8hmnqIbUm8FKiYWQ+8jcnagOColZIaQuhdZYUhcPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
