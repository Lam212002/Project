<?php
session_start();
  if(isset($_GET['act'])=='logout'){
     unset($_SESSION['id_khachhang']);
     unset($_SESSION['dangky']);
    echo"<script> window.location.href='?mod=login&act=main'</script>";

  }
?>