<?php
require "inc/function.php";
require "config/database.php"


?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShopBay | SVLam</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Start coding here -->
    <?php
    // tạo đường dẫn trên url để phần trang chủ ,không hiện url
    $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'Home';
    $act = !empty($_GET['act']) ? $_GET['act'] : 'main';

    // chuyển hướng đến các trang như new content...
    $path = "modules/{$mod}/{$act}.php ";

    if (file_exists($path)) {
        require $path;
    } else {
        require 'lib/404.php';
    }

    ?>
  

   
</body>

</html>