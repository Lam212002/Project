<?php
// ob_start();  // Start output buffering

// require 'config/database.php';
// require "./inc/redirect.php";
$thongtinlienhe=$_POST['thongtinlienhe'];
$id=$_GET['id'];
if(isset($_POST['btn-submit'])){
    $sql_update="UPDATE tbl_lienhe SET thongtinlienhe='".$thongtinlienhe."' WHERE id='$id'";
    mysqli_query($conn,$sql_update);
    
   echo"<script> window.location.href='?mod=quanlylienhe&act=main'</script>";
    //    header('Location:?mod=category&act=list_cat');
    // header('Location:?mod=product&act=list_product');
}


?>