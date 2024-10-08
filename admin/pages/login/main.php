
<?php
session_start();
if(isset($_POST['login_submit'])){
  $taikhoan=$_POST['username'];
  $matkhau=md5($_POST['password']);
  $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."'AND password='".$matkhau."' LIMIT 1";
  $row=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($row);

  if($count>0){
    $_SESSION['dangnhap']= $taikhoan;
   echo"<script> window.location.href='?mod=dashboard&act=main'</script>";

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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
   
</head>

<body>
    <style>
        /* //registers tart */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  html {
    color: #333;
    font-size: 62.5%;
    font-family: "Open Sans", sans-serif;
  }
  .main {
    background: #f1f1f1;
    min-height: 100vh;
    display: flex;
    justify-content: center;
  }
  .form {
    width: 360px;
    min-height: 100px;
    padding: 32px 24px;
    text-align: center;
    background: #fff;
    border-radius: 2px;
    margin: 24px;
    align-self: center;
    box-shadow: 0 2px 5px 0 rgba(51, 62, 73, 0.1);
  }
  .form .heading {
    font-size: 2rem;
  }
  .form .desc {
    text-align: center;
    color: #636d77;
    font-size: 1.6rem;
    font-weight: lighter;
    line-height: 2.4rem;
    margin-top: 16px;
    font-weight: 300;
  }
  
  .form-group {
    display: flex;
    margin-bottom: 16px;
    flex-direction: column;
  }
  
  
  .form-label,
  .form-message {
    text-align: left;
  }
  
  .form-label {
    font-weight: 700;
    padding-bottom: 6px;
    line-height: 1.8rem;
    font-size: 1.4rem;
  }
  
  .form-control {
    height: 40px;
    padding: 8px 12px;
    border: 1px solid #b3b3b3;
    border-radius: 3px;
    outline: none;
    font-size: 1.4rem;
  }
  
  .form-control:hover {
    border-color: #1dbfaf;
  }
  
  .form-group.invalid .form-control {
    border-color: #f33a58;
  }
  
  .form-group.invalid .form-message {
    color: #f33a58;
  }
  
  .form-message {
    font-size: 1.2rem;
    line-height: 1.6rem;
    padding: 4px 0 0;
  }
  
  .form-submit {
    outline: none;
    background-color: #1dbfaf;
    margin-top: 12px;
    padding: 12px 16px;
    font-weight: 600;
    color: #fff;
    border: none;
    width: 100%;
    font-size: 14px;
    border-radius: 8px;
    cursor: pointer;
  }
  
  .form-submit:hover {
    background-color: #1ac7b6;
  }
  
  .spacer {
    margin-top: 36px;
  }
/* //register end */

    </style>
    <!-- Start coding here -->




    <!-- Phần đăng ký start -->
    <div class="main">
        <form action="" autocomplete="off" method="POST" class="form" id="form-1">
          <h3 class="heading">đăng nhập tài khoản ADMIN</h3>
          <p class="desc">Chúc Bạn một ngày tốt lành ❤️</p>
      
          <div class="spacer"></div>

      
          <div class="form-group">
            <label for="email" class="form-label">Tên đăng nhập</label>
            <input id="email" name="username" rule="require|username " placeholder="Tên đăng nhập" type="text" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" rule="require|min:6" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <button class="form-submit" name="login_submit">Đăng nhập</button>
          <button class="form-submit" name="login_submit"><a href="" style="color:#fff">Đăng ký</a></button>
        </form>
      </div>

      <script src="./js.js"> </script>
      <!-- //sự kì vọng /mong muốn/thành quả đạt được =>ouput là gì? -->
      <!-- <script>
              var form=new Validator("#form-1");
              form.onSubmit=function(formData){
                        console.log(formData);
              }
              
      </script> -->

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



   
</body>

</html>