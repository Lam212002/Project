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
            <h5 style="padding-bottom: 24px;">Lịch sử đơn hàng:

              
            </h5>
            <div class="container">
                                    <!-- Responsive Arrow Progress Bar -->
                                    <div class="arrow-steps clearfix" style="margin-left:-15px">
                                        <div class="step done"> <span> <a href="?mod=shopping_cart&act=">Giỏ hàng</a></span> </div>
                                        <div class="step done"> <span><a href="?mod=check-out&act=vanchuyen">Vận chuyển đơn hàng</a></span> </div>
                                        <div class="step done"> <span><a href="?mod=check-out&act=thongtinthanhtoan">Thanh toán</a><span> </div>
                                        <div class="step current"> <span><a href="?mod=check-out&act=donhangdadat">Lịch sử đơn hàng</a><span> </div>
                                    </div>
                                    <!-- end Responsive Arrow Progress Bar -->
                                    <!-- <div class="nav clearfix">
                                        <a href="#" class="prev">Previous</a> |
                                        <a href="#" class="next pull-right">Next</a>
                                    </div> -->
                                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                           
                          

                        </div>
                       
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