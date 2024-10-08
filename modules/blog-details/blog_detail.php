<?php
$sql_chitiet_blog = "SELECT * FROM tbl_post,tbl_danhmuc_baiviet WHERE tbl_post.id_danhmuc=tbl_danhmuc_baiviet.id_baiviet AND tbl_post.id_post='$_GET[id]' LIMIT 1";
$query_chitiet_blog = mysqli_query($conn, $sql_chitiet_blog);


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
    <!-- Start coding here -->
    <?php get_header() ?>

    <div id="preloder">
        <div class="loader"></div>
    </div>



    <!-- Bài viết start -->
    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <?php
                        while($row_detail_post=mysqli_fetch_array($query_chitiet_blog)){

                        
                        
                        ?>
                        <div class="blog-detail-title">
                            <h2><?php echo $row_detail_post['post_name'] ?></h2>
                            <p> travel <span>- May 19, 2024</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="./admin/public/uploads_post/<?php echo $row_detail_post['hinhanh'] ?>" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p><?php echo $row_detail_post['detail_post'] ?></p>
                        </div>
                        <div class="blog-quote">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eaque placeat natus eos nesciunt totam sunt commodi? Assumenda tenetur veniam impedit voluptates, dolorum sapiente numquam modi accusamus minima harum iste doloribus earum adipisci. Numquam repellendus explicabo, iure voluptatem deserunt fuga odio praesentium a ullam excepturi porro architecto nihil beatae molestiae.</p>
                        </div>
                        <!-- <div class="blog-more">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="public/img/blog/blog-detail-1.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                <img src="public/img/blog/blog-detail-2.jpg" alt="">
                                </div>
                                <div class="col-sm-4">
                                <img src="public/img/blog/blog-detail-3.jpg" alt="">
                                </div>

                            </div>
                        </div> -->

                        <?php
                        }
                        ?>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>ISHOP</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>    
                            </div>
                        </div>

                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="#" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="public/img/blog/prev-blog.png" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            
                                            
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 col-md-6 offset-lg-2">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="public/img/blog/next-blog.png" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            

                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="posted-by">
                            <div class="pb-pic">
                                <img src="public/img/blog/post-by.png" alt="">
                            </div>
                            <div class="pb-text">
                                <a href="#">
                                    <h5>My ơi</h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam culpa nisi et ea nostrum autem officia obcaecati illum labore unde nobis magnam quia odit sed ipsum possimus quibusdam deserunt incidunt velit alias earum ducimus, soluta hic! Facilis consequuntur omnis ipsum delectus dolores officia soluta sint eaque dolor! Deleniti, alias amet!</p>
                            </div>

                        </div>
                        <div class="leave-comment">
                            <h4>Gửi một bình luận</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="name">
                                    </div>
                                    <div class="col-lg-6">
                                    <input type="text" placeholder="Email">

                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                        <button type="submit" class="site-btn">Gửi</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Bài viết end -->

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