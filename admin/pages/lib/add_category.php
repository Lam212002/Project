<?php
ob_start();  // Start output buffering

// require 'config/database.php';
// require "./inc/redirect.php";
$tendanhmucsanpham=$_POST['title'];
$thutudanhmuc=$_POST['order'];
// $submit=$_POST['btn-submit'];

if(isset($_POST['btn-submit'])){
    $sql_them="INSERT INTO tbl_danhmuc_baiviet(tendanhmuc_baiviet,thutu) VALUE('".$tendanhmucsanpham."','".$thutudanhmuc."')";
    mysqli_query($conn,$sql_them);
    
   echo"<script> window.location.href='?mod=post&act=list_post_category'</script>";
    //    header('Location:?mod=category&act=list_cat');
    // header('Location:?mod=product&act=list_product');
}


?>