them order vao db

<?php 


if(isset($_POST['order'])){
  $conn = condb();
if(isset($_SESSION['email'])){
    $user = getOne_user($_SESSION['email']);
    foreach($user as $user_gg);
 $id_cus = $user_gg['id'];
 $name_cus = $_SESSION['display_name'];
 $phone_num = $_SESSION['phone_num'];
 $adr_user = $_SESSION['adr_user'];
 $date = date("Y/m/d");
}else{
$user = null;
}
    try {
     
        $sql = "INSERT INTO cms_order (customer_id, name_cus, sell_date ,total_price, phone_num, adr_cus, status)
        VALUES ('$id_cus', '$name_cus', '$date' ,'$total_price', '$phone_num', '$adr_user', '1')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
}
      
// add oder


?>
<!-- hetttt -->
<?php print_r($_SESSION['viewcart'][0][1]);
      echo $total_prd; ?>