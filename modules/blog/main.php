<?php

//phần bài viết
$sql_post_new = "SELECT * FROM tbl_post,tbl_danhmuc_baiviet WHERE tbl_post.id_danhmuc=tbl_danhmuc_baiviet.id_baiviet ORDER BY tbl_post.id_post DESC ";
$query_post_new = mysqli_query($conn, $sql_post_new);
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
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Tất cả bài viết</h2>
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

         
    </section>

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