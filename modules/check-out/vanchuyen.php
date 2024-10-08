<?php
session_start();

// echo $_SESSION['id_khachhang']
?>
<?php
// if(isset($_SESSION['cart'])){
//     print_r($_SESSION['cart']);
// }

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
</head>

<body>
    <style>
        .deleteproduct {
            color: black;
        }

        .deleteproduct:hover {
            color: red;
        }


        /* thanh thanh toan */
        /* jQuery Demo */

        .clearfix:after {
            clear: both;
            content: "";
            display: block;
            height: 0;
        }

        /* Responsive Arrow Progress Bar */

        .container {
            font-family: 'Lato', sans-serif;
        }

        .arrow-steps .step {
            font-size: 14px;
            text-align: center;
            color: #777;
            cursor: default;
            margin: 0 1px 0 0;
            padding: 10px 0px 10px 0px;
            width: 15%;
            float: left;
            position: relative;
            background-color: #ddd;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .arrow-steps .step a {
            color: #777;
            text-decoration: none;
        }

        .arrow-steps .step:after,
        .arrow-steps .step:before {
            content: "";
            position: absolute;
            top: 0;
            right: -17px;
            width: 0;
            height: 0;
            border-top: 19px solid transparent;
            border-bottom: 17px solid transparent;
            border-left: 17px solid #ddd;
            z-index: 2;
        }

        .arrow-steps .step:before {
            right: auto;
            left: 0;
            border-left: 17px solid #fff;
            z-index: 0;
        }

        .arrow-steps .step:first-child:before {
            border: none;
        }

        .arrow-steps .step:last-child:after {
            border: none;
        }

        .arrow-steps .step:first-child {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .arrow-steps .step:last-child {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .arrow-steps .step span {
            position: relative;
        }

        *.arrow-steps .step.done span:before {
            opacity: 1;
            content: "";
            position: absolute;
            top: -2px;
            left: -10px;
            font-size: 11px;
            line-height: 21px;
        }

        .arrow-steps .step.current {
            color: #fff;
            background-color: #5599e5;
        }

        .arrow-steps .step.current a {
            color: #fff;
            text-decoration: none;
        }

        .arrow-steps .step.current:after {
            border-left: 17px solid #5599e5;
        }

        .arrow-steps .step.done {
            color: #173352;
            background-color: #2f69aa;
        }

        .arrow-steps .step.done a {
            color: #173352;
            text-decoration: none;
        }

        .arrow-steps .step.done:after {
            border-left: 17px solid #2f69aa;
        }
    </style>
    <!-- Start coding here -->

    <?php get_header() ?>
    <!-- 
    <div id="preloder">
        <div class="loader"></div>
    </div> -->



    <!-- Breadcrumb section Begin? -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="?"><i class="fa fa-home"></i>Home</a>
                        <a href="?mod=shop&act=main">Shop</a>
                        <span>Giỏ Hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb section end -->

    <!-- code giỏ hàng start -->
    <div class="shopping-cart spad">
        <div class="container">
            <h5 style="padding-bottom: 24px;">Thông tin vận chuyển:


            </h5>
            <div class="container">
                <!-- Responsive Arrow Progress Bar -->
                <div class="arrow-steps clearfix" style="margin-left:-15px">
                    <div class="step done"> <span> <a href="?mod=shopping_cart&act=">Giỏ hàng</a></span> </div>
                    <div class="step current"> <span><a href="?mod=check-out&act=vanchuyen">Vận chuyển đơn hàng</a></span> </div>
                    <div class="step "> <span><a href="?mod=check-out&act=thongtinthanhtoan">Thanh toán</a><span> </div>
                    <div class="step "> <span><a href="?mod=check-out&act=donhangdadat">Lịch sử đơn hàng</a><span> </div>
                </div>
                <!-- end Responsive Arrow Progress Bar -->
                <!-- <div class="nav clearfix">
                                        <a href="#" class="prev">Previous</a> |
                                        <a href="#" class="next pull-right">Next</a>
                                    </div> -->
            </div>
            <?php
            if (isset($_POST['themvanchuyen'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];

                $sql__them_vanchuyen = mysqli_query($conn, "INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) VALUES('$name','$phone','$address','$note','$id_dangky')");

                if ($sql__them_vanchuyen) {
                    echo '<script>alert("thêm vận chuyển thành công")</script>';
                }
            }else if(isset($_POST['capnhatvanchuyen'])){
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $id_dangky = $_SESSION['id_khachhang'];

                $sql_update_vanchuyen = mysqli_query($conn, "UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address',note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky' ");

                if ($sql_update_vanchuyen) {
                    echo '<script>alert("cập nhật vận chuyển thành công")</script>';
                }
            }
            ?>
            <div class="row">
                <?php
                $id_dangky = $_SESSION['id_khachhang'];
                $sql_get_vanchuyen = mysqli_query($conn, "SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
                $count = mysqli_num_rows($sql_get_vanchuyen);
                if ($count > 0) {
                    $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                    $name = $row_get_vanchuyen['name'];
                    $phone = $row_get_vanchuyen['phone'];
                    $address = $row_get_vanchuyen['address'];
                    $note = $row_get_vanchuyen['note'];
                } else {
                    $name = '';
                    $phone = '';
                    $address = '';
                    $note = '';
                }
                ?>
                <div class="col-lg-4">
                    <div class="cart-table">
                        <form action="" method="POST" style="margin-top:10px" autocomplete="off">
                            <div class="form-group">
                                <label for="name">
                                    <p>Họ và tên</p>
                                </label>
                                <input type="text" value="<?php echo $name ?>" name="name" class="form-control" id="name" placeholder="Nhập họ và tên đầy đủ">
                                <small id="emailHelp" class="form-text text-muted">Hãy nhập tên đầy đủ của bạn</small>
                            </div>
                            <div class="form-group">
                                <label for="phone">
                                    <p>Số điện thoại</p>
                                </label>
                                <input type="text" value="<?php echo $phone ?>" name="phone" class="form-control" id="phone" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <label for="address">
                                    <p>Địa chỉ</p>
                                </label>
                                <input type="text" value="<?php echo $address ?>" name="address" class="form-control" id="address" placeholder="Địa chỉ sinh sống của bạn">
                            </div>
                            <div class="form-group">
                                <label for="address">
                                    <p>Ghi chú </p>
                                </label>
                                <textarea name="note" id="" cols="30" rows="10" placeholder="thêm ghi chú của bạn" style="font-size:15px"><?php echo $note ?></textarea>
                            </div>
                            <?php
                            if ($name == '' && $phone == '') {


                            ?>
                                <button type="submit" name="themvanchuyen" class="btn btn-primary" style="padding:10px;font-size:12px">Thêm vận chuyển</button>
                            <?php
                            } else if($name != '' && $phone != '') {


                            ?>

                                <button type="submit" name="capnhatvanchuyen" class="btn btn-success" style="padding:10px;font-size:15px">Cập nhật vận chuyển</button>

                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Mã Sản phẩm</th>
                                    <th class="p-name">Tên Sản phẩm</th>
                                    <th>Hình Ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Size</th>
                                    <th>giá sản phẩm</th>
                                    <th>Thành tiền</th>

                                    <th><a href="?mod=cats&act=deleteAll_product&xoasanpham=1" class="deleteproduct"><i class="ti-close"></a></i></th>
                                </tr>
                            </thead>
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
                                            <td class="cart-title first-row">
                                                <p style="text-align:center"><?php echo $i ?></p>
                                            </td>
                                            <td class="p-price first-row"><?php echo $cart_item['masp'] ?></td>
                                            <td class="qua-col first-row">
                                                <p><?php echo $cart_item['product_name'] ?></p>
                                            </td>
                                            <td class="cart-pic first-row"><img src="././admin/public/uploads/<?php echo $cart_item['hinhanh'] ?>" alt=""></td>

                                            <td class="total-price first-row">
                                                <a href="?mod=cats&act=giam&id=<?php echo $cart_item['id'] ?>" class="deleteproduct">-</a>
                                                <?php echo $cart_item['soluong'] ?>
                                                <a href="?mod=cats&act=tang&id=<?php echo $cart_item['id'] ?>" class="deleteproduct">+</a>
                                            </td>

                                            <td class="total-price first-row"><?php echo $cart_item['size'] ?></td>
                                            <td class="total-price first-row"><?php echo number_format($cart_item['giasp']) ?></td>
                                            <td class="total-price first-row"><?php echo number_format($thanhtien) ?></td>
                                            <td class="close-td first-row"><a href="?mod=cats&act=delete_product&id=<?php echo $cart_item['id'] ?>" class="deleteproduct"><i class="ti-close"></i></a></td>
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
                    <div class="proceed-checkout">
                        <ul>
                            <?php
                            if (empty($tongtien)) {


                            ?>
                                <li class="subtotal">Tổng dự kiến <span>0 VND</span></li>
                                <li class="cart-total">tổng <span>0 VND</span></li>
                            <?php
                            } else {


                            ?>
                                <li class="subtotal">Tổng dự kiến <span><?php echo number_format($tongtien) ?>VND</span></li>
                                <li class="cart-total">tổng <span><?php echo number_format($tongtien) ?>VND</span></li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                                if (isset($_SESSION['dangky'])) {

                                ?>

                                    <a href="?mod=check-out&act=thongtinthanhtoan" name="thanhtoan" class="proceed-btn">Hình thức Thanh toán</a>

                                <?php
                                } else {
                                ?>
                                    <a href="?mod=register&act=main" class="proceed-btn">Đăng ký để đặt hàng</a>

                                <?php
                                }
                                ?>

                    </div>
                </div>



            </div>
        </div>

    </div>


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