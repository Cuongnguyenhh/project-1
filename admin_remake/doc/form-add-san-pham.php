<?php

require '../config/database.php';
condb();
 require '../config/controller/Catelory.php';
 $kq_cate = getAll_cate();
 $kq_supp = getAll_supp();
 

?>
<!-- Add product controll -->

<?php
$conn = condb();
// them danh muc------

if (isset($_POST['add_cate'])) {
  $name_cate =$_POST['name_cate'];
  try{
    $sql = "INSERT INTO cms_products_group (prd_group_name)
    VALUES ('$name_cate')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header("Refresh:0");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

}




  if(isset($_POST['themsp'])){
    $today = date("Y-m-d");
    $post_prd_name = $_POST['prd_name'];
    $post_quaility = $_POST['quaility'];
    $post_cate = $_POST['cate'];
    $post_supp = $_POST['supp'];
    $post_priceSell = $_POST['priceSell'];
    $post_price = $_POST['price'];
    $imgload =basename( $_FILES['imgload']['name']);

    // uploadfile

    $target_dir = "../../uploads/";
    $target_file = $target_dir . $imgload;
    move_uploaded_file($_FILES["imgload"]["tmp_name"], $target_file);

    // try {
    //   $sql = "INSERT INTO cms_product (prd_name,quaility , id_prd_group, id_pro_manufacture,  prd_sell_price)
    //   VALUES ('$post_prd_name' , '$post_quaility' , '$post_cate', '$post_supp'  )";
    //   // use exec() because no results are returned
    //   $conn->exec($sql);
    //   echo "New record created successfully";
    // } catch(PDOException $e) {
    //   echo $sql . "<br>" . $e->getMessage();
    // }
  
    try{
    $sql = "INSERT INTO cms_product (prd_name, quaility, id_prd_group, id_pro_manufacture, prd_img, prd_sell_price, prd_price )
  VALUES ('$post_prd_name', '$post_quaility', '$post_cate', '$post_supp', '$imgload', '$post_priceSell', '$post_price')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
  }
  
 

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Thêm sản phẩm | Quản trị Admin</title> 
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
        <li class="breadcrumb-item">Danh sách sản phẩm</li>
        <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Tạo mới sản phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
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
            </div>
            <form action="./form-add-san-pham.php" class="row" enctype="multipart/form-data"  method="POST">
              <div class="form-group col-md-3">
                <label class="control-label">Mã sản phẩm </label>
                <input name="ID_prd" class="form-control" type="number" placeholder="Nếu bỏ trống sẽ tự tạo mã sản phẩm">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên sản phẩm</label>
                <input name="prd_name" class="form-control" type="text">
              </div>
     

              <div class="form-group  col-md-3">
                <label class="control-label">Số lượng</label>
                <input name="quaility" class="form-control" type="number">
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Tình trạng</label>
                <select class="form-control" id="exampleSelect1">
                  <option>-- Chọn tình trạng --</option>
                  <option>Còn hàng</option>
                  <option>Hết hàng</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Danh mục</label>
                <select name="cate" class="form-control" id="exampleSelect1">
                  <?php
                 echo '<option>--Chọn Danh mục--</option>';
                   foreach ($kq_cate as $cate){
                   echo  '<option>'.$cate['prd_group_name'].' </option>';
                   };
                 ;
                  ?>
    
                
                </select>
              </div>
              <div class="form-group col-md-3 ">
                <label for="exampleSelect1" class="control-label">Nhà cung cấp</label>
                <select name="supp" class="form-control" id="exampleSelect1">
                <?php
                 echo '<option>--Chọn Nhà Cung Cấp --</option>';
                   foreach ($kq_supp as $supp){
                   echo  '<option>'.$supp['supplier_name'].' </option>';
                   };
                 ;
                  ?>
       
                </select>
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá bán</label>
                <input name="priceSell" class="form-control" type="text">
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Giá vốn</label>
                <input name="price" class="form-control" type="text">
              </div>
              <div class="form-group col-md-12">
                <!-- Upload hanh sp -->
                <label class="control-label">Ảnh sản phẩm</label>
            
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
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota" id="mota"></textarea>
                <script>CKEDITOR.replace('mota');</script>
              </div>
            
          <a class="btn btn-cancel" href="table-data-product.php">Hủy bỏ</a>
          <input class="btn btn-save" name="themsp" type="submit">
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

       <form action="" method="POST">
       <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Thêm mới danh mục </h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên danh mục mới</label>
              <input name="name_cate" class="form-control" type="text" required>
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
          <button name="add_cate" class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
       </form>
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