<?php
require './config/database.php';

$sql_danhmuc_header = "SELECT * FROM tbl_categry ORDER BY id_danhmuc ASC";
$query_danhmuc_header = mysqli_query($conn, $sql_danhmuc_header);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <!-- <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="../public/css/themify-icons.css" type="text/css">
<link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="../public/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="../public/css/style.css" type="text/css"> -->
    <script src="../public/js/app.js"></script>

</head>

<body>

    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>Tất cả</span>
                    <ul class="depart-hover">
                    <?php
             while($row_danhmuc=mysqli_fetch_array($query_danhmuc_header)){
            ?>
            <li><a href="?mod=shop&act=main&id=<?php echo$row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
            
            <?php
             }
            ?>
                    </ul>
                </div>
            </div>
            <nav class="tabs nav-menu mobile-menu">
                <ul>


                    <li class="tab-item "><a href="?">Trang chủ</a></li>

                    <li class="tab-item"><a href="?mod=shop&act=main">Cửa hàng</a></li>
                   
                    <li class="tab-item"><a href="?mod=blog&act=main">Bài viết</a></li>
                    <li class="tab-item"><a href="?mod=contact&act=main">liên hệ</a></li>
                    <li class="tab-item"><a href="">các trang</a>
                        <ul class="dropdown">
                            <li><a href="?mod=blog&act=main">bài viết</a></li>
                            <li><a href="?mod=shopping_cart&act=main">Giỏ hàng</a></li>
                            <!-- <li><a href="?mod=check-out&act=main">Thanh toán</a></li>
                            <li><a href="?mod=faq&act=main">Câu hỏi</a></li> -->
                            <!-- <li><a href="?mod=register&act=main">Đăng ký</a></li>
                                <li><a href="?mod=login&act=main">Đăng nhập</a></li> -->

                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    </div>


    <!-- Js Plugins -->
    <!-- <script src="../public/js/jquery-3.3.1.min.js"></>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery-ui.min.js"></script>
    <script src="../public/js/jquery.countdown.min.js"></script>
    <script src="../public/js/jquery.nice-select.min.js"></script>
    <script src="../public/js/jquery.zoom.min.js"></script>
    <script src="../public/js/jquery.dd.min.js"></script>
    <script src="../public/js/jquery.slicknav.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/main.js"></script>
    <script src="../public/js/app.js"></script> -->

</body>

</html>