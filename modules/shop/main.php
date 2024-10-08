<?php
session_start();

if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = '';
}

if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 6) - 6;
}


//Lấy tên danh mục
if (isset($_GET['id'])) {
    $sql_product = "SELECT * FROM tbl_categry,tbl_product WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_danhmuc='$_GET[id]' ORDER BY tbl_product.id_product DESC LIMIT $begin,6";
    $query_pro = mysqli_query($conn, $sql_product);

    $sql_cate = "SELECT * FROM tbl_categry WHERE tbl_categry.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($conn, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
} else {
    $sql_product = "SELECT * FROM tbl_categry,tbl_product WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_danhmuc='' ORDER BY tbl_product.id_product DESC";
    $query_pro = mysqli_query($conn, $sql_product);

    $sql_cate = "SELECT * FROM tbl_categry WHERE tbl_categry.id_danhmuc='1' LIMIT 1";
    $query_cate = mysqli_query($conn, $sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
}


$sql_pro_new = "SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc ORDER BY tbl_product.id_product DESC LIMIT $begin,6";
$query_pro_new = mysqli_query($conn, $sql_pro_new);



?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeLean | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <link rel="stylesheet" href="../public/css/sidebar.css" type="text/css">
</head>

<body>
    <style>
        #list-paging {
            list-style: none;
            float: right;
            padding: 0;
            margin: 0;
        }

        #list-paging li {
            float: left;
            padding: 5px;
            margin: 5px;
            font-size: 15px;
        }

        #list-paging li a {
            color: #000;
        }

        #list-paging li a:hover {
            color: red;
        }
    </style>
    <!-- Start coding here -->
    <?php get_header() ?>

    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->



    <style>
        .menu-sb {
            min-height: 300px;
            /* background-color: #041a18; */
            color: rgb(189, 33, 33);
        }

        .product-sh {
            margin: 30px 10px;
            border: 1px solid;
            padding: 5px;
            text-align: center;

        }

        .menu-loai-san-pham {
            width: 100%;
            height: auto;
            margin: 0 auto;
            background-color: #fff;
        }

        .menu-loai-san-pham ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-loai-san-pham ul li {
            /* display: inline-block; */
            margin-right: 10px;
        }

        .menu-loai-san-pham ul li a {
            text-decoration: none;
            color: #000;
            font-size: 16px;
            padding: 10px 15px;
        }

        .menu-loai-san-pham ul li a:hover {
            color: sandybrown;

        }

        .menu-loai-san-pham ul li a:active {
            background-color: #ccc;
        }

        .menu-loai-san-pham ul li {
            margin-top: 15px;
        }

        .menu-loai-san-pham h3 {
            margin-top: 55px;
        }

        .buynow {
            background: green;
            padding: 5px;
            color: #fff;
        }

        .addcat {
            background: green;
            padding: 5px;
            font-size: 15px;
            width: 150px;
            color: #fff;

        }

        .buynow:hover {
            background: red
        }

        .addcat:hover {
            transition: all 1s;
            background: red;
            border-radius: 10px;
        }
    </style>
    <!-- khung sản phẩm start -->

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 menu-sb ">
                <?php
                get_sidebar()
                ?>

            </div>
            <?php
            if (isset($_GET['id'])) {


            ?>
                <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-1">
                    <h4 style="margin-top:20px">Danh mục sản phẩm:<?php echo $row_title['tendanhmuc'] ?></h4>
                    <div class="row">
                        <?php
                        while ($row_pro = mysqli_fetch_array($query_pro)) {


                        ?>
                            <div class="col-lg-3 col-md-5 col-sm-4 product-sh">
                                <a href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">

                                    <img src="././admin/public/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="Tên sản phẩm">
                                    <p><?php echo $row_pro['product_name'] ?></p>
                                    <p class="gia">Giá: <span class="khuyen-mai"><?php echo number_format($row_pro['price'], 0, ',', '.') . 'VND' ?></span> </p>
                                    <!-- <a class="buynow" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">Mua ngay</a> -->
                                    <a type="submit" class="addcat" name="themsanpham" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">Xem chi tiết</a>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

        </div>
    </div>
    <!-- <div class="section" id="paging-wp">
        <div class="section-detail clearfix">

            <?php
                $sql_trang = mysqli_query($conn, "SELECT * FROM tbl_product");
                $row_count = mysqli_num_rows($sql_trang);
                $trang = ceil($row_count / 6);
            ?>
            <ul id="list-paging" class="fl-right">
                <?php
                for ($i = 1; $i <= $trang; $i++) {


                ?>
                     <li>
                        <a <?php if ($i == $page) {
                                echo 'style="color:red"';
                            } else {
                                echo '';
                            } ?> href="?mod=shop&act=main&trangpr=<?php echo $i ?>" title=""><?php echo $i ?></a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div> -->
<?php
            } else {


?>


    <div class="col-lg-8 col-md-8 col-sm-10 offset-lg-1">
        <h4 style="margin-top:20px">Sản phẩm mới nhất</h4>
        <div class="row">
            <?php
                while ($row_pro = mysqli_fetch_array($query_pro_new)) {


            ?>
                <div class="col-lg-3 col-md-5 col-sm-5 product-sh">
                    <a href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">

                        <img src="././admin/public/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="Tên sản phẩm">
                        <p><?php echo $row_pro['product_name'] ?></p>
                        <p class="gia">Giá: <span class="khuyen-mai"><?php echo number_format($row_pro['price'], 0, ',', '.') . 'VND' ?></span> </p>
                        <!-- <a class="buynow" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">Mua ngay</a> -->
                        <a type="submit" class="addcat" name="themsanpham" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product'] ?>">Xem chi tiết</a>
                    </a>
                </div>
            <?php
                }
            ?>
        </div>
    </div>

    </div>
    </div>
    <div class="section" id="paging-wp">
        <div class="section-detail clearfix">

            <?php
                $sql_trang = mysqli_query($conn, "SELECT * FROM tbl_product");
                $row_count = mysqli_num_rows($sql_trang);
                $trang = ceil($row_count / 6);
            ?>
            <ul id="list-paging" class="fl-right">
                <li>
                    <p>Trang:</p>
                </li>
                <?php
                for ($i = 1; $i <= $trang; $i++) {


                ?>
                    <li>
                        <a <?php if ($i == $page) {
                                echo 'style="color:red"';
                            } else {
                                echo '';
                            } ?> href="?mod=shop&act=main&trang=<?php echo $i ?>" title=""><?php echo $i ?></a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>

<?php
            }
?>
<!-- khung sản phẩm end -->


<!-- phần logo của các đối tác -->
<!-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <h5>ISHOP</h5>
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <p>ISHOP</p>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


<?php get_footer() ?>

<!-- Js Plugins -->
<script src="../public/js/jquery-3.3.1.min.js"></script>
<script src="../public/js/bootstrap.min.js"></script>
<script src="../public/js/jquery-ui.min.js"></script>
<script src="../public/js/jquery.countdown.min.js"></script>
<script src="../public/js/jquery.nice-select.min.js"></script>
<script src="../public/js/jquery.zoom.min.js"></script>
<script src="../public/js/jquery.dd.min.js"></script>
<script src="../public/js/jquery.slicknav.js"></script>
<script src="../public/js/owl.carousel.min.js"></script>
<script src="../public/js/main.js"></script>
</body>

</html>