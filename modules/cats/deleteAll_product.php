<?php
session_start();


if(isset($_GET['xoasanpham'])&&$_GET['xoasanpham']==1){
     unset($_SESSION['cart']);
    echo "<script> window.location.href='?mod=shopping_cart&act=main'</script>";
    
}


?>