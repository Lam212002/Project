<?php
session_start();
  if(isset($_GET['act'])=='logout'){
     unset($_SESSION['dangnhap']);
    echo"<script> window.location.href='?mod=login&act=main'</script>";

  }
?>