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
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/css/style.css" type="text/css">
    <script src="public/js/js.js"></script>
</head>

<body>
    <!-- Start coding here -->

    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
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
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All thể loại</button>
                            <div class="input-group">
                                <input type="text" placeholder="Bạn cần gì hãy tìm kiếm">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="public/img/select-product-1.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>150.000đ x 1</p>
                                                            <h6>vip pro vip</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="si-pic"><img src="public/img/select-product-2.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>150.000đ x 1</p>
                                                            <h6>vip pro vip</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="select-total">
                                        <span>Tổng tiền:</span>
                                        <h5>300.000đ</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="?mod=shopping-cart&act=main" class="primary-btn view-card">Hiển thị giỏ hàng</a>
                                        <a href="?mod=check-out&act=main" class="primary-btn view-card">Thanh Toán</a>

                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">150.000đ</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Tất cả</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Thời trang nữ</a></li>
                            <li><a href="#">Thời trang nam</a></li>
                            <li><a href="#">Áo thun</a></li>
                            <li><a href="#">Áo gió</a></li>
                            <li><a href="#">váy</a></li>
                            <li><a href="#">giày nam</a></li>
                            <li><a href="#">giày nữ</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="?">Trang chủ</a></li>
                        <li><a href="?mod=shop&act=main">Cửa hàng</a></li>
                        <li><a href="">bộ sưu tập</a>
                            <ul class="dropdown">
                                <li><a href="">Đàn ông</a></li>
                                <li><a href="">Phụ nữ</a></li>
                                <li><a href="">trẻ em</a></li>
                            </ul>
                        </li>
                        <li><a href="?mod=blog&act=main">Bài viết</a></li>
                        <li><a href="?mod=contact&act=main">liên hệ</a></li>
                        <li><a href="">các trang</a>
                            <ul class="dropdown">
                                <li><a href="?mod=blog-details&act=main">chi tiết bài viết</a></li>
                                <li><a href="?mod=shopping-cart&act=main">Giỏ hàng</a></li>
                                <li><a href="?mod=check-out&act=main">Thanh toán</a></li>
                                <li><a href="?mod=faq&act=main">Câu hỏi</a></li>
                                <li><a href="?mod=register&act=main">Đăng ký</a></li>
                                <li><a href="?mod=login&act=main">Đăng nhập</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>


    <!-- Phần đăng ký start -->
    <div class="main">
        <form action="" method="POST" class="form" id="form-1">
          <h3 class="heading">đăng ký Tài khoản</h3>
          <p class="desc">Chúc các bạn mua sắm vui vẻ ❤️</p>
      
          <div class="spacer"></div>
      
          <div class="form-group">
            <label for="fullname" class="form-label">Tên đầy đủ</label>
            <input id="fullname" name="fullname" rule="require" type="text" placeholder="VD: Văn Lâm" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="address" class="form-label">Quê quán đầy đủ</label>
            <input id="address" name="address" rule="require" type="text" placeholder="VD: Chi Lăng,Lạng sơn" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="number" class="form-label">Số điện thoại</label>
            <input id="number" name="number" rule="require" type="text" placeholder="VD: 0123456789" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" rule="require|email" type="text" placeholder="VD: email@domain.com" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <div class="form-group">
            <label for="password" class="form-label">Mật khẩu</label>
            <input id="password" name="password" rule="require|min:6" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>
          </div>
      
          <button class="form-submit">Đăng ký</button>
        </form>
      </div>

      <script src="./js.js"> </script>
      <!-- //sự kì vọng /mong muốn/thành quả đạt được =>ouput là gì? -->
      <script>
              var form=new Validator("#form-1");
              form.onSubmit=function(formData){
                        console.log(formData);
              }
              
      </script>

    <!-- Phần đăng ký end -->

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
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/jquery.countdown.min.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/jquery.zoom.min.js"></script>
    <script src="public/js/jquery.dd.min.js"></script>
    <script src="public/js/jquery.slicknav.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
   
</body>

</html>