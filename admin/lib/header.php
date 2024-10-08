<?php
session_start()

?>
<!DOCTYPE html>
<html>

<head>
    <title>Quản lý ISMART</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
</head>

<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div class="wp-inner clearfix">
                    <a href="?mod=product&act=list_product" title="" id="logo" class="fl-left">ADMIN</a>
                    <ul id="main-menu" class="fl-left">
                        <!-- <li>
                            <a href="?mod=post&act=list_post" title="">Trang</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?mod=page&act=add_page" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?mod=page&act=list_page" title="">Danh sách trang</a>
                                </li>
                            </ul>
                        </li> -->
                        <li><a href="?mod=dashboard&act=main">Tổng quan</a></li>
                        <li>
                            <a href="?mod=post&act=list_post" title="">Bài viết</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?mod=post&act=add_post" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?mod=post&act=list_post" title="">Danh sách bài viết</a>
                                </li>
                                <li>
                                    <a href="?mod=post&act=list_post_category" title="">Danh mục bài viết</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?mod=product&act=list_product" title="">Sản phẩm</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?mod=product&act=add_product" title="">Thêm mới</a>
                                </li>
                                <li>
                                    <a href="?mod=product&act=list_product" title="">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="?mod=category&act=list_cat" title="">Danh mục sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="" title="">Bán hàng</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="?mod=order&act=list_order" title="">Danh sách đơn hàng</a>
                                </li>
                                <li>
                                <a href="?mod=list_customers&act=main" title="" class="nav-link">Danh sách khách hàng</a>
                                </li>
                                <li>
                                <a href="?mod=danhsachhangtonkho&act=main" title="" class="nav-link">Danh sách hàng tồn kho</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?mod=quanlylienhe&act=main">Quản lý website</a>
                        </li>

                    </ul>
                    <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                        <?php
                        if (isset($_SESSION['dangnhap'])) {

                        ?>
                            <li style=" list-style: none;">

                                <a href="?mod=account&act=logout" id="account" class="fl-right">Đăng xuất : <?php
                                                                                                            echo $_SESSION['dangnhap'];
                                                                                                            ?></a>
                            </li>
                            <li style=" list-style: none;"><a style=" margin-top:-20px" href="?mod=account&act=change_pass" id="account" class="fl-right">Đổi mật khẩu</a></li>

                        <?php

                        } ?>
                    </div>

                </div>
            </div>