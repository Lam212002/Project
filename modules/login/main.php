<?php
session_start();
if(isset($_POST['login_submit'])){
  $email=$_POST['email'];
  $matkhau=md5($_POST['password']);
  $sql="SELECT * FROM tbl_dangky WHERE emali='".$email."'AND matkhau='".$matkhau."' LIMIT 1";
  $row=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($row);
  
  if($count>0){
      $row_data=mysqli_fetch_array($row);
    $_SESSION['dangky']= $row_data['tenkhachhang'];
    $_SESSION['emali']= $row_data['emali'];

    $_SESSION['id_khachhang']= $row_data['id_dangky'];

   echo"<script> window.location.href='?mod=shopping_cart&act=main'</script>";

  }else{
    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác,vui lòng nhập lại")</script>';
  //  echo"<script> window.location.href='?mod=login&act=main'</script>";

  }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <script src="public/js/js.js"></script>
</head>

<body>
    <!-- Start coding here -->

    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Phần đăng ký start -->
    <div class="main">
        <form action="" method="POST" class="form" id="form-1">
          <h3 class="heading">đăng nhập tài khoản</h3>
          <p class="desc">Chúc các bạn mua sắm vui vẻ ❤️</p>
      
          <div class="spacer"></div>

      
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" rule="require|email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" rule="require|min:6" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <button type="submit" name="login_submit" class="form-submit">Đăng nhập</button>
        </form>
      </div>

      <script src="./js.js"> </script>
      <!-- //sự kì vọng /mong muốn/thành quả đạt được =>ouput là gì? -->
      <script>
            //   var form=new Validator("#form-1");
            //   form.onSubmit=function(formData){
            //             console.log(formData);
            //   }
              
      </script>

    <!-- Phần đăng ký end -->

    <!-- phần logo của các đối tác -->
    <!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <p>ISHOP</p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <?php get_footer() ?>
    <!-- Js Plugins -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/jquery.zoom.min.js"></script>
    <script src="public/js/jquery.dd.min.js"></script>
    <script src="public/js/jquery.slicknav.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
   
</body>

</html>