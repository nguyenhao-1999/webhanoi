<!DOCTYPE html>
<html class="no-js" lang="vi-vn" xml:lang="vi-vn">
<head>
    <title>
        BẾP AN THỊNH - THIẾT BỊ BẾP NHẬP KHẨU
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="public/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script>
        var home_url = 'http://localhost:81/webhanoi/';
    </script>

</head>
<body id="body">
<header id="header-site">
    <div class="wp-header">
        <div class="wp-header-top">
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-8 hidden-sm hidden-xs">
                            <div class="left-header-top">
                                <i class="fas fa-phone-square-alt"></i>
                                <ul class="ul-b time-open">
                                    <li><b>Holine: </b><a href="tell:0913 14 1368">0913 14 1368</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-xs">
                            <div class="right-header-top">
                                <i class="fas fa-shield-alt"></i>
                                <ul class="ul-b list-link-top">
                                    <li><a href="#">Giới thiệu</a></li>
                                    <li><a href="#">Chính sách</a></li>
                                    <li><a href="#">Ưu đãi</a></li>
                                    <li><a href="#">Tuyển dụng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wp-header-main">
            <div class="container">
                <div class="main-header header-mobile">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="wp-logo">
                                <h1 class="logo-text" style="position: absolute; height: 0px; opacity: 0;">BẾP AN THỊNH - THIẾT BỊ BẾP NHẬP KHẨU</h1>
                                <a href="index.html">
                                    <img src="public/upload/files/Logo/logo-s1.png" alt="Bếp An Thịnh"></a>
                            </div>
                            <div class="wp-menu-mobile hidden-lg hidden-md">
                                <div id="trigger-mobile">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="wp-search">
                                <form method="GET" id="formSearchTop" action="">
                                    <div class="content-search">
                                        <input type="text" class="form-control" name="keyword" id="keyword" autocomplete="off" value="" placeholder="Nhập từ khóa tìm kiếm">
                                        <button class="btn btn-danger btn-search" onclick="doSearch(); return false;"><i class="fa fa-search"></i></button>
                                        <ul class="resuiltSearch ul-menu-muiten" id="addHtml"></ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="wp-right-headertop">
                                <div class="wp-hotline hidden-sm hidden-xs">
                                    <div class="wp-icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="wp-text">
                                        <span>Hỗ trợ khách hàng</span>
                                        <span>0913 14 1368</span>
                                    </div>
                                </div>
                                <div class="wp-cart">
                                    <div class="wp-icon">
                                        <a id="check-cart" href="javscript::void(0)">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span id="ins-sp"><?php $count=loadClass('cart');
                                            echo $count->count_toltal_product();?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('views/modules/mainmenu.php'); ?>
</header>
<main id="main-site">




<!-- Tiện ích facebook -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=291849335066119&autoLogAppEvents=1"></script>
<!-- End tiện ích facebook -->