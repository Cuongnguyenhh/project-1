<?php
  $get_id = $_GET['ID'];
  require '../config/database.php';
  $conn = condb();

  require '../config/controller/user.php';
    $user = getOne_user_byId($get_id);
    foreach($user as $user);
    //  edit controll--------------
      if(isset($_POST['edit'])){
        $ID =$_POST['ID'];
        $display_name =$_POST['user_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $adr = $_POST['adr'];
        $group = $_POST['group'];
        $imgload =basename( $_FILES['imgload']['name']);

        // uploadfile

    $target_dir = "../../uploads/";
    $target_file = $target_dir . $imgload;
    move_uploaded_file($_FILES["imgload"]["tmp_name"], $target_file);
        try{
          if($imgload==null){
          $sql = "UPDATE cms_users SET id='$ID', display_name='$display_name', group_id='$group',phone='$phone', adr_user='$adr', email='$email'  WHERE id=$get_id";
          }else {$sql = "UPDATE cms_users SET id='$ID', display_name='$display_name', group_id='$group',phone='$phone', adr_user='$adr', email='$email', display_img='$imgload'  WHERE id=$get_id";
          }

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
        }
      
      

  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // echo $pro_cate;
    // echo $pro_name;
    // echo $pro_price;
    // echo $pro_quaility; 
    // echo $pro_supp;
    // echo $pro_sell;
    ?>
  <title>Sửa sản phẩm | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").php('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <?php

  ?>
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  
 
  <main class="app-content">
 
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách người dùng</li> 
        <li class="breadcrumb-item"><a href="#">Chỉnh sửa người dùng</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Chỉnh sửa người dùng</h3>
          <div class="tile-body">
            <!-- <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><i
                    class="fas fa-folder-plus"></i> Thêm nhà cung cấp</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i
                    class="fas fa-folder-plus"></i> Thêm danh mục</a>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#addtinhtrang"><i
                    class="fas fa-folder-plus"></i> Thêm tình trạng</a>
              </div>
            </div> -->


            <!-- day la cai form ne -->


            <form action="" class="row" enctype="multipart/form-data"  method="POST">
              <div class="form-group col-md-3">
                <label class="control-label">Mã User </label>
                <input name="ID" class="form-control" type="number" value="<?php echo $get_id ?>">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên Người Dùng</label>
                

                <input name="user_name" class="form-control" value="<?php echo $user['display_name'] ?>">
                
                
              </div>
     

              <div class="form-group  col-md-3">
                <label class="control-label">Số Điện Thoại</label>
                <input name="phone" class="form-control" type="" value="<?php echo $user['phone'] ?>" >
              </div>
                <div class="form-group col-md-3 ">
                    <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" name="group" id="group">
                  <option>-- Phân quyền --</option>
                  <option value="2">Người dùng</option>
                  <option value="1">Quản trị viên</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Địa chỉ</label>
                <input type="text" class="form-control" name="adr" value="<?php echo $user['adr_user'] ?>">
              </div>
              
             
              <div class="form-group col-md-12">
                <!-- Upload hanh sp -->
                <label class="control-label">Ảnh Đại Diện</label>
            
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="imgload" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                  <p style="clear:both"></p>
                </div>
                <!-- Load anh  -->

              </div>
             
            
          <a class="btn btn-cancel" href="table-data-product.php">Hủy bỏ</a>
          <input class="btn btn-save" name="edit" type="submit">
          </div>
          </form>
          

        </div>
  </main>


  <!--
  MODAL CHỨC VỤ 
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới nhà cung cấp</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" required>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                <?php
                  foreach ($kq_supp as $supp){
                    echo '   <ul style="padding-left: 20px;">
                    <li>'.$supp['supplier_name'].'</li>
                  </ul>';
                  }
                ?>
            </div>
          </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->



  <!--
  MODAL DANH MỤC
-->
  <div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới danh mục </h5> <?php
               
                ?>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên danh mục mới</label>
              <input class="form-control" type="text" required>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Danh mục sản phẩm hiện đang có</label>
                <?php
                  foreach ($kq_cate as $cate){
                    echo '   <ul style="padding-left: 20px;">
                    <li>'.$cate['prd_group_name'].'</li>
                  </ul>';
                  }
                ?>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->




  <!--
  MODAL TÌNH TRẠNG
-->
  <div class="modal fade" id="addtinhtrang" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới tình trạng</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tình trạng mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
MODAL
-->



  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script>
    const inpFile = document.getElementById("inpFile");
    const loadFile = document.getElementById("loadFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");
    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";
        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });
        reader.readAsDataURL(file);
      }
    });

  </script>
</body>

</html>