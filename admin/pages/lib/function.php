<?php
ob_start();  // Start output buffering

// require 'config/database.php';
// require "./inc/redirect.php";
$tenloaisanpham=$_POST['title'];
$thutu=$_POST['order'];
$mota=$_POST['desc'];
// $submit=$_POST['btn-submit'];

if(isset($_POST['btn-submit'])){
    $sql_them="INSERT INTO tbl_categry(tendanhmuc,thutu,mota) VALUE('".$tenloaisanpham."','".$thutu."','".$mota."')";
    mysqli_query($conn,$sql_them);
    
   echo"<script> window.location.href='?mod=category&act=list_cat'</script>";
    //    header('Location:?mod=category&act=list_cat');
    // header('Location:?mod=product&act=list_product');
}


?>