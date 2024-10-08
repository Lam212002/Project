<?php
// ob_start();  // Start output buffering

// require 'config/database.php';
// require "./inc/redirect.php";
$post_name=$_POST['post_name'];
$id_danhmuc=$_POST['danhmuc'];
$detail_post=$_POST['detail_post'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;
$status_post=$_POST['status_post'];

//xulyhinhanh



// $submit=$_POST['btn-submit'];

if(isset($_POST['btn-submit'])){
    $sql_them="INSERT INTO tbl_post(post_name,id_danhmuc,detail_post,hinhanh,status_post) VALUE('".$post_name."
    ','".$id_danhmuc."','".$detail_post."','".$hinhanh."','".$status_post."')";
    mysqli_query($conn,$sql_them);
    move_uploaded_file($hinhanh_tmp,'./public/uploads_post/'.$hinhanh);
   echo"<script> window.location.href='?mod=post&act=list_post'</script>";
    //    header('Location:?mod=category&act=list_cat');
    // header('Location:?mod=product&act=list_product');
}


?>
