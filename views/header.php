<!DOCTYPE html>
<html class="no-js" lang="vi-vn" xml:lang="vi-vn">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>
        BẾP AN THỊNH - THIẾT BỊ BẾP NHẬP KHẨU
    </title>
    <link href="public/images/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body id="body">
<header id="header-site">
    <div class="wp-header">
        <div class="wp-header-top">
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-9 hidden-sm hidden-xs">
                            <div class="left-header-top">
                                <i class="fas fa-shield-alt"></i>
                                <ul class="ul-b list-link-top">
                                    <li><a href="#">Mua hàng đảm bảo tại An Thịnh</a></li>
                                    <li><a href="#">Giới thiệu về An Thịnh</a></li>
                                    <li><a href="#">Ưu đãi đại lý/ khách công trình</a></li>
                                    <li><a href="#">Hợp tác mở chi nhánh tỉnh</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="right-header-top">
                                <i class="fas fa-clock"></i>
                                <ul class="ul-b time-open">
                                    <li>Thời gian mở cửa: <b>08h00 - 22h00</b></li>
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
                                <form method="post" id="formSearchTop" onsubmit="doSearch(); return false;">
                                    <div class="content-search">
                                        <input type="text" class="form-control" name="keyword" id="keyword" onkeyup="search(this.value)" autocomplete="off" value="" placeholder="Nhập từ khóa tìm kiếm">
                                        <button class="btn btn-danger btn-search" onclick="doSearch(); return false;"><i class="fa fa-search"></i></button>
                                        <ul class="resuiltSearch ul-menu-muiten"></ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript">
                            function doSearch() {
                                var keyword = $('#keyword').val();
                                if (keyword.length < 2 || keyword == 'Nhập từ khóa tìm kiếm') {
                                    //zebra_alert('Thông báo !', 'Từ khóa phải nhiều hơn 1 ký tự.');
                                    Swal.fire({
                                        type: 'error',
                                        title: "Thông báo",
                                        text: "Từ khóa phải nhiều hơn 1 ký tự.",
                                        showCloseButton: true,
                                        showCancelButton: true,
                                        focusConfirm: false,
                                        confirmButtonText: "OK",
                                    })
                                    return;
                                }
                                location.href = 'https://bepanthinh.com/tim-kiem.html?keyword=' + keyword;
                            }
                        </script>
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
                                        <a href="gio-hang.html">
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