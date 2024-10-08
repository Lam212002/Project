<?php
// session_start();


if (isset($_GET['id']) && $_GET['id'] == 1) {
    unset($_SESSION['dangky']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
</head>

<body>

    <div class="header-section">
        <div class="header-top">
            <div class="ht-left">
                <div class="mail-service">
                    <i class="fa fa-envelope"></i>
                    Vanlam@gmail.com
                </div>

                <div class="phone-service">
                    <i class="fa fa-phone"></i>
                    +84 336.147.380
                </div>
            </div>
            <div class="ht-right">
                <?php
                if (isset($_SESSION['id_khachhang'])) {

                ?>
                    <a href="?mod=account&act=logout" class="login-panel"><i class="fa fa-user"></i> Đăng Xuất</a>

                <?php } else { ?>


                    <a href="?mod=register&act=main" class="login-panel"><i class="fa fa-user"></i> Đăng Ký</a>
                <?php

                } ?>
                <div class="lan-selector">
                    <select class="language_drop" name="countries" id="countries" style="width:300px;">

                        <option value="yt" data-image="public/img/vn.jpg" data-imagecss="flag yt" data-title="VietNam">VietNam</option>
                        <option value="yu" data-image="public/img/flag-1.jpg" data-imagecss="flag yu" data-title="English">English</option>

                    </select>
                </div>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="header-section">

        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="?">
                                <h3>
                                    ISHOP
                                </h3>
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-7 col-md-7">
                        <form action="?mod=search&act=main" method="POST">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All thể loại</button>

                                <div class="input-group">
                                    <input type="text" name="tukhoa" placeholder="Bạn cần gì hãy tìm kiếm">
                                    <button type="submit" name="timkiem"><i class="ti-search"></i></button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
                                <!-- <span></span> -->
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="#">
                                <i class="icon_bag_alt"></i>
                                <!-- <span></span> -->
                            </a>
                            <div class="cart-hover">
                                <div class="select-items">
                                    <table>
                                        <tbody>
                                            <?php
                                            if (isset($_SESSION['cart'])) {
                                                $i = 0;
                                                $tongtien = 0;
                                                foreach ($_SESSION['cart'] as $cart_item) {
                                                    $thanhtien = $cart_item['soluong'] * $cart_item['giasp'];
                                                    $tongtien = $tongtien + $thanhtien;
                                                    $i++;
                                            ?>
                                                    <tr>
                                                        <td class="si-pic" style="width:80px"><img src="././admin/public/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p><?php echo number_format($cart_item['giasp']) ?> x <?php echo $cart_item['soluong'] ?></p>
                                                                <h6><?php echo $cart_item['product_name'] ?></h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>


                                                <?php
                                                }
                                            } else {


                                                ?>
                                                <tr>
                                                    <td colspan="6">
                                                        <p>Hiện chưa có sản phẩm nào trong giỏ hàng</p>
                                                    </td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="select-total">
                                    <span>Tổng tiền:</span>
                                    <?php
                                    if (isset($_SESSION['cart'])) {


                                    ?>
                                        <h5><?php echo number_format($tongtien) ?>VNĐ</h5>
                                    <?php
                                    } else {
                                    ?>
                                        <h5>0 VNĐ</h5>

                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="select-button">
                                    <a href="?mod=shopping_cart&act=main" class="primary-btn view-card">giỏ hàng</a>
                                    <a href="?mod=quanlydonhang&act=lietke" class="primary-btn view-card">quản lý đơn hàng</a>
                                    <?php
                                if (isset($_SESSION['dangky'])) {

                                ?>

                                    <a href="?mod=check-out&act=vanchuyen" name="thanhtoan" class="proceed-btn view-card">Hình thức vận chuyển</a>

                                <?php
                                } else {
                                ?>
                                    <a href="?mod=register&act=main" class="proceed-btn view-card">Đăng ký để đặt hàng</a>

                                <?php
                                }
                                ?>
                                    <!-- <a href="?mod=check-out&act=main" class="primary-btn view-card">Thanh Toán</a> -->

                                </div>
                            </div>
                        </li>
                        <?php
                                    if (isset($_SESSION['cart'])) {


                                    ?>
                                         <li class="cart-price"><?php echo number_format($tongtien) ?>VNĐ</li>
                                    <?php
                                    } else {
                                    ?>
                                         <li class="cart-price">0 VNĐ</li>

                                    <?php
                                    }
                                    ?>
                      
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    <?php get_nav() ?>

</div>







    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/jquery.zoom.min.js"></script>
    <script src="public/js/jquery.dd.min.js"></script>

    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>