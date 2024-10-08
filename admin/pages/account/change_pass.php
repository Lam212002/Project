
<?php

if(isset($_POST['btn-submit'])){
  $taikhoan=$_POST['username'];
  $matkhaucu=md5($_POST['pass-old']);
  $matkhaumoi=md5($_POST['pass-new']);
  $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoan."'AND password='".$matkhaucu."' LIMIT 1";
  $row=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($row);

  if($count>0){
    $sql_update=mysqli_query($conn,"UPDATE tbl_admin SET password='".$matkhaumoi."'");
//    echo"<script> window.location.href='?mod=product&act=list_product'</script>";
   echo"<script> window.location.href='?mod=account&act=logout'</script>";

  }else{
    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác,vui lòng nhập lại")</script>';

  }
}
?>
<?php
get_header()
?>
<div id="main-content-wp" class="change-pass-page">
    <div class="wrap clearfix">
        
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section" id="title-page">
                    <div class="clearfix">
                        <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
                    </div>
                </div>
                <div class="section-detail">
                    <form method="POST">
                    <label for="old-pass">Tên</label>
                        <input type="fullname" name="username" id="pass-old">
                        <label for="old-pass">Mật khẩu cũ</label>
                        <input type="password" name="pass-old" id="pass-old">
                        <label for="new-pass">Mật khẩu mới</label>
                        <input type="password" name="pass-new" id="pass-new">
                        <!-- <label for="confirm-pass">Xác nhận mật khẩu</label>
                        <input type="password" name="confirm-pass" id="confirm-pass"> -->
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>