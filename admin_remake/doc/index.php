<?php  
session_start();
 if(isset($_SESSION['email']) && ($_SESSION['type'])==1){
require '../config/database.php';
condb();
require '../config/controller/product.php';
require '../config/controller/Catelory.php';
require '../config/controller/customer.php';



require  './user_menu.php';
if(isset($_GET['act'])){
    $act =$_GET['act'];
    switch($_GET['act']){
        case 'main':
            $kq_customers = getAll_customer();
            $kq = getAll_pro();
            require_once './mainControll.php';
        // case 'pos':
        //     require_once './phan-mem-ban-hang.php';
        case 'ql_nhanvien':
            // require_once './navbar.php';
            require_once './table-data-table.php';
        case 'ql_khachhang':
            $kq_customers = getAll_customer();
            require_once './navbar.php';
            require_once './Customer_control.php';
        case 'product':
            $kq = getAll_pro();
            $kq_cate = getAll_cate();
            // require_once './navbar.php';
            require_once './table-data-product.php';
            break;
        case 'order':
            require_once './navbar.php';
            require_once './table-data-oder.php';
        case 'pos':
            require_once './phan-mem-ban-hang.php';
        case 'report':
            require_once './quan-ly-bao-cao.php';
            
    }
}else{
    $kq_customers = getAll_customer();
    $kq = getAll_pro();
   require_once './navbar.php';
   require_once './mainControll.php';
}
 }else{
    header('location:../../furni-web/index.php?action=login'); 
 }
 

?>