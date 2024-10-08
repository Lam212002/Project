<?php
session_start();
//phần scron sản phẩm nam 
$sql_pro_srman = "SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_danhmuc='1' ORDER BY tbl_product.id_product DESC";
$query_pro_sr_man = mysqli_query($conn, $sql_pro_srman);

////phần scron sản phẩm nữ
$sql_pro_srwomen = "SELECT * FROM tbl_product,tbl_categry WHERE tbl_product.id_danhmuc=tbl_categry.id_danhmuc AND tbl_product.id_danhmuc='2' ORDER BY tbl_product.id_product DESC";
$query_pro_sr_women = mysqli_query($conn, $sql_pro_srwomen);


//phần bài viết
$sql_post_new = "SELECT * FROM tbl_post,tbl_danhmuc_baiviet WHERE tbl_post.id_danhmuc=tbl_danhmuc_baiviet.id_baiviet ORDER BY tbl_post.id_post DESC LIMIT 3";
$query_post_new = mysqli_query($conn, $sql_post_new);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Css Styles -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <!-- <script src="../public/js/app.js"></script> -->

</head>

<body>
    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
    </div>

   

    <!-- body lời chào trang web start -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="public/img/hero-1.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>tháng mới</span>
                            <h1>giảm giá sập sàn</h1>
                            <p>Cửa hàng của chúng tôi là điểm đến lý tưởng cho những ai yêu thích thời trang hiện đại và cá tính. Nơi đây mang đến cho bạn một không gian mua sắm tràn đầy cảm hứng </p>
                            <a href="#" class="primary-btn">Mua sắm ngay</a>
                        </div>
                    </div>

                    <div class="off-card">
                        <h2>sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="public/img/hero-2.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>tháng mới</span>
                            <h1>giảm giá sập sàn</h1>
                            <p>Cửa hàng của chúng tôi là điểm đến lý tưởng cho những ai yêu thích thời trang hiện đại và cá tính. Nơi đây mang đến cho bạn một không gian mua sắm tràn đầy cảm hứng </p>
                            <a href="#" class="primary-btn">Mua sắm ngay</a>
                        </div>
                    </div>

                    <div class="off-card">
                        <h2>sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="public/img/hero-3.png">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>tháng mới</span>
                            <h1>giảm giá sập sàn</h1>
                            <p>Cửa hàng của chúng tôi là điểm đến lý tưởng cho những ai yêu thích thời trang hiện đại và cá tính. Nơi đây mang đến cho bạn một không gian mua sắm tràn đầy cảm hứng </p>
                            <a href="#" class="primary-btn">Mua sắm ngay</a>
                        </div>
                    </div>

                    <div class="off-card">
                        <h2>sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- body lời chào trang web end -->

    <!-- Banner trang web start -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Con trai</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Con gái</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Học sinh</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner trang web end -->


    <!-- Banner phụ nữ start -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="public/img/products/women-large.jpg">
                        <h2>Phụ nữ</h2>
                        <a href="?mod=search&act=detail_product&id=2">Xem chi tiết</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control ">
                        <ul>
                            <li ><h3> Quần áo phụ kiện thời trang nữ</h3></li>
                            
                        </ul>
                        <div class="line"></div>
                    </div>
               

                    <div class="  product-slider owl-carousel">
                    <?php
                        while ($row_pro_women=mysqli_fetch_array($query_pro_sr_women)){

                        
                        ?>
                        <div class="product-item">
                            <form method="POST" action="?mod=cats&act=add_product&id=<?php echo $row_pro_women['id_product']?>">

                                <div class="pi-pic">
                                <img src="././admin/public/uploads/<?php echo $row_pro_women['hinhanh'] ?>" alt="Tên sản phẩm">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><button type="submit" name="themsanpham" class="buy_now" ><i class="icon_bag_alt"></i></button></li>
                                        <li class="quick-view"><a href="?mod=product&act=product_detail&id=<?php echo $row_pro_women['id_product'] ?>">+ xem chi tiết</a></li>
                                        <!-- <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li> -->
                                    </ul>
                                </div>
                                <!-- ok -->
        
                                <div class="pi-text">
                                    <div class="catagory-name">Thời trang</div>
                                    <a href="">
                                        <h5><?php echo $row_pro_women['product_name'] ?></h5>
                                    </a>
                                    <div class="product-price">
                                    <?php echo number_format($row_pro_women['price'], 0, ',', '.') . 'VND' ?>
                                        <!-- <span>300.000đ</span> -->
                                    </div>
                                </div>
                                <!-- ok -->
                            </form>
                            
                      
                      
                        </div>
                        <?php
                        }
                        ?>
                        
                      

                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- Banner phụ nữ end -->


    <!-- khuyến mãi start -->

    <section class="deal-of-week set-bg spad" data-setbg="public/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Khuyến mãi tháng này</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br/> Blanditiis placeat sequi quis nihil magnam maiores aliquam sapiente, ipsum suscipit maxime?</p>
                    <div class="product-price">
                        400.000đ
                        <span> HanBag</span>
                    </div>
                </div>

                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>

                <a href=""class="primary-btn">Đến cửa hàng</a>
            </div>
        </div>
    </section>
    <!-- khuyến mãi end -->


    <!-- Sản phẩm nổi bật cho nam start -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                   

                    <div class="filter-control">
                        <ul>
                            <li class=""><h3>Quần áo phụ kiện thời trang Nam</h3></li>
                            
                        </ul>
                    </div>
    
                    <div class="product-slider owl-carousel">
                        
                        <?php
                        while ($row_pro_men=mysqli_fetch_array($query_pro_sr_man)){

                        
                        ?>
                        <div class="product-item">
                        <form method="POST" action="?mod=cats&act=add_product&id=<?php echo $row_pro_men['id_product']?>">
                            <div class="pi-pic">
                            <img src="././admin/public/uploads/<?php echo $row_pro_men['hinhanh'] ?>" alt="Tên sản phẩm">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                <li class="w-icon active"><button type="submit" name="themsanpham" class="buy_now" ><i class="icon_bag_alt"></i></button></li>
                                        <li class="quick-view"><a href="?mod=product&act=product_detail&id=<?php echo $row_pro_men['id_product'] ?>">+ xem chi tiết</a></li>
                                    <!-- <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li> -->
                                </ul>
                            </div>
                            <!-- ok -->
    
                            <div class="pi-text">
                                <div class="catagory-name">Thời trang</div>
                                <a href="">
                                    <h5><?php echo $row_pro_men['product_name'] ?></h5>
                                </a>
                                <div class="product-price">
                                <?php echo number_format($row_pro_men['price'], 0, ',', '.') . 'VND' ?>
                                    <!-- <span>300.000đ</span> -->
                                </div>
                            </div>
                            <!-- ok -->
                            
                      
                        </form>
                        </div> 
                        <?php
                        }
                        ?>
    
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="public/img/products/man-large.jpg">
                        <h2>Đàn ông</h2>
                        <a href="?mod=search&act=detail_product&id=1">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sản phẩm nổi bật cho nam end -->


    <!-- khối hiển thị mạng xã hội start -->

    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="public/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="public/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="public/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="public/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="public/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="public/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">ISHOP</a></h5>
            </div>
        </div>
    </div>

    <!-- khối hiển thị mạng xã hội end -->


    <!-- Phần bài viết mới bắt đầu start -->

    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Hiển thị bài viết</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <?php  
                    while($row_post=mysqli_fetch_array($query_post_new)){

                    
                ?>
                <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                <img src="./admin/public/uploads_post/<?php echo $row_post['hinhanh'] ?>" alt="Tên bài viết">
                        <div class="latest-text">
                               <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                       <?php echo $row_post['tendanhmuc_baiviet']?>
                                    </div>
                               </div> 
                               <a href="?mod=blog-details&act=blog_detail&id=<?php  echo $row_post['id_post']?>">
                                 <h4><?php  echo $row_post['post_name']?></h4>
                               </a>
                               <!-- <p><?php echo $row_post['detail_post'] ?></p> -->
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>

            <div class="benefit-items">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="public/img/icon-1.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>miễn phí vận chuyển</h6>
                                    <p>khi đơn hàng trên 99k</p>
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="public/img/icon-2.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>Thời gian giao hàng nhanh</h6>
                                    <p>trong vòng 1 tuần</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-benefit">
                                <div class="sb-icon">
                                    <img src="public/img/icon-1.png" alt="">
                                </div>
                                <div class="sb-text">
                                    <h6>đa dạng thanh toán</h6>
                                    <p>thuận tiện khi mua hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Phần bài viết mới bắt đầu end -->

    <!-- phần logo của các đối tác -->
    


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

    <script>
     const $=document.querySelector.bind(document);
             const $$=document.querySelectorAll.bind(document);

             const tabs=$$('.tab-item');
             const panes=$$('.tab-pane');


             const tabActive=$('.tab-item.active')
             const line=$('.tabs .line');

             line.style.left=tabActive.offsetLeft + 'px'
             line.style.width=tabActive.offsetWidth + 'px'


           
             tabs.forEach((tab,index)=>{
                const pane=panes[index]

                tab.onclick=function(){
                    $('.tab-item.active').classList.remove('active');
                    $('.tab-pane.active').classList.remove('active');

                    line.style.left=this.offsetLeft + 'px'
                    line.style.width=this.offsetWidth + 'px'

                    this.classList.add('active');
                    pane.classList.add('active');

                }
             })
</script>

</body>

</html>