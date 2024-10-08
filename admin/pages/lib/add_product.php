<?php
// ob_start();  // Start output buffering

// require 'config/database.php';
// require "./inc/redirect.php";
$product_name=$_POST['product_name'];
$product_code=$_POST['product_code'];
$price=$_POST['price'];
$id_danhmuc=$_POST['danhmuc'];
$soluong=$_POST['soluong'];
$desc_product=$_POST['desc_product'];
$detail_product=$_POST['detail_product'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$hinhanh=time().'_'.$hinhanh;
$status_product=$_POST['status_product'];

//xulyhinhanh



// $submit=$_POST['btn-submit'];

if(isset($_POST['btn-submit'])){
    $sql_them="INSERT INTO tbl_product(product_name,product_code,price,id_danhmuc,soluong,desc_product,detail_product,hinhanh,status_product) VALUE('".$product_name."
    ','".$product_code."','".$price."','".$id_danhmuc."','".$soluong."','".$desc_product."','".$detail_product."','".$hinhanh."','".$status_product."')";
    mysqli_query($conn,$sql_them);
    move_uploaded_file($hinhanh_tmp,'./public/uploads/'.$hinhanh);
   echo"<script> window.location.href='?mod=product&act=list_product'</script>";
    //    header('Location:?mod=category&act=list_cat');
    // header('Location:?mod=product&act=list_product');
}


?>
