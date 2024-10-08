<?php
session_start();
//phần scron sản phẩm nam 
$sql_pro_srman = "SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_danhmuc='$_GET[id]' ORDER BY tbl_product.id_product DESC";
$query_pro_sr_man = mysqli_query($conn, $sql_pro_srman);


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
    <!-- Start coding here -->
    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
    </div>

   

    <style>
        .menu-sb {
            min-height: 600px;
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
        .menu-loai-san-pham ul li  {
            margin-top: 15px;
        }
        .menu-loai-san-pham h3  {
            margin-top: 55px;
        }
        .buynow{
            background: green;
            padding: 5px;
            color: #fff;
        }
        .addcat{
            background: green;
            padding: 5px;
            color: #fff;

        }
        .buynow:hover{
           background: red
        }
        .addcat:hover{
            background: red
           

        }
    </style>
    <!-- khung sản phẩm start -->

    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 menu-sb "> -->
                <!-- <?php
                get_sidebar()
                ?> -->

            <!-- </div> -->
            <div class="col-lg-11 offset-lg-1">
                <h4 style="margin-top:20px;margin-left:-40px">Danh sách sản phẩm</h4>
                <div class="row">
                    <?php
                    while($row_pro=mysqli_fetch_array($query_pro_sr_man)){

                    
                    ?>
                    <div class="col-lg-3 product-sh">
                        <a href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product']?>">

                            <img src="././admin/public/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="Tên sản phẩm">
                            <p><?php echo $row_pro['product_name'] ?></p>
                            <p class="gia">Giá: <span class="khuyen-mai"><?php echo number_format( $row_pro['price'],0,',','.').'VND'?></span> </p>
                            <a class="buynow" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product']?>">Mua ngay</a>
                            <a class="addcat" href="?mod=product&act=product_detail&id=<?php echo $row_pro['id_product']?>">Thêm vào giỏ hàng</a>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
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