<?php
require './inc/function.php';
require 'config/database.php';
require "pages/inc/redirect.php";


?>
<?php

// ob_start(); 
// tạo đường dẫn trên url để phần trang chủ ,không hiện url
$mod = !empty($_GET['mod']) ? $_GET['mod'] : 'login';
$act = !empty($_GET['act']) ? $_GET['act'] : 'main';

// chuyển hướng đến các trang như new content...
$path = "pages/{$mod}/{$act}.php ";

if (file_exists($path)) {
    require $path;
} else {
    require 'lib/404.php';
}

    
    // ob_end_flush()
?>