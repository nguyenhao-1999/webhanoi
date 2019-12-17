<?php 
$option = loadModel('option');
$category = loadModel('category');
$product = loadModel('product');
$cat = $option->get_field(["option_name" => 'home_product', 'menu_status' => 1]);
$phone = $option->get_field(["option_name" => 'phone', 'menu_status' => 1]);
$cat_arr  = json_decode($cat["option_value"]);
$cat_list = $category->get_category_by_id($cat_arr);

// lời nói của CEO 
$customer_reviews_author = $option->get_field(["option_name" => 'customer_reviews_author', 'menu_status' => 1]);
$customer_reviews = $option->get_field(["option_name" => 'customer_reviews', 'menu_status' => 1]);

// lấy ra danh sách dịch vụ
$servics = $option->get_field(["option_name" => 'servics', 'menu_status' => 1]);
$servics_name = json_decode($servics["option_value"]);

// lấy ra video đại diện 

// banner tư vấn
$bannerTuvan = $option->get_field(["option_name" => 'bannerTuvan', 'menu_status' => 1]);

// giao diện đối tác
$cat_partner = $option->get_field(["option_name" => 'partner', 'menu_status' => 1]);
$cat_arr  = json_decode($cat_partner["option_value"]);
$cat_list_partner = $category->get_category_by_id($cat_arr);

// icon
$icon = $option->get_field(["option_name" => 'icon', 'menu_status' => 1]);

// mãng xã hội
$zalo = $option->get_field(["option_name" => 'zalo', 'menu_status' => 1]);
$facebook = $option->get_field(["option_name" => 'facebook', 'menu_status' => 1]);
$youtube = $option->get_field(["option_name" => 'youtube', 'menu_status' => 1]);
$messenger = $option->get_field(["option_name" => 'messenger', 'menu_status' => 1]);
$gmail = $option->get_field(["option_name" => 'gmail', 'menu_status' => 1]);

// lấy ra thông tin hỗ trợ
$position = $option->get_field(["option_name" => 'position', 'menu_status' => 1]);
$position_arr  = json_decode($position["option_value"]);

// lấy ra chủ để của bài viết
$topic1 = $option->get_field(["option_name" => 'topic1', 'menu_status' => 1]);
$topic2 = $option->get_field(["option_name" => 'topic2', 'menu_status' => 1]);




require_once('views/header.php');
?>
    <?php require_once('views/modules/slider.php'); ?>

    <!-- end slide home -->
    <section class="sec-02 md-od6 hidden-xs">
        <div class="container">
            <div class="wp-sec-why">
                <div class="wp-title-sec">
                    <h2 class="h2-title">VÌ SAO KHÁCH HÀNG TIN TƯỞNG VÀ LỰA CHỌN AN THỊNH?</h2>
                    <div class="wp-after-title"></div>
                </div>
                <div class="wp-content-sec">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="wp-item-why">
                                <div class="wp-icon-why"><img src="public/images/icon01.png" alt=""></div>
                                <div class="wp-text-why">
                                    <h3 class="h3-title"><?php echo $servics_name[0]->title; ?></h3>
                                    <p><?php echo $servics_name[0]->content; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="wp-item-why">
                                <div class="wp-icon-why"><img src="public/images/icon02.png" alt=""></div>
                                <div class="wp-text-why">
                                    <h3 class="h3-title"><?php echo $servics_name[1]->title; ?></h3>
                                    <p><?php echo $servics_name[1]->content; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="wp-item-why">
                                <div class="wp-icon-why"><img src="public/images/icon03.png" alt=""></div>
                                <div class="wp-text-why">
                                    <h3 class="h3-title"><?php echo $servics_name[2]->title; ?></h3>
                                    <p><?php echo $servics_name[2]->content; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-text-2why">
                        <div class="text-2why">
                            <p><?php echo $customer_reviews['option_value']; ?></p>
                            <h4 class="h4-title"><?php echo $customer_reviews_author['option_value']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end sec 02 -->
    <section class="sec-03 md-od7">
        <div class="container">
            <div class="wp-sec-video">
                <div class="wp-title-sec">
                    <h2 class="h2-title"><a href="video.html">VIDEO</a></h2>
                    <div class="wp-after-title"></div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wp-item-video1 image_tn">
                            <a href="https://www.youtube.com/embed/T4ZcLOj94qs" data-showsocial="true" class="html5lightbox" title="">
                                <img src="public/upload/files/anh%20dai%20dien%20video/h%c3%acnh%20%c4%91%e1%ba%a1i%20di%e1%bb%87n%20tm01%20750x500.png">
                            </a>
                            <div class="text-video">
                                <h3 class="h3-title">Review chi tiết Hút mùi Arber TM01/TM02/TM03</h3>
                                <div class="div-view">
                                    <i class="fas fa-user"></i>
                                    <span>0 lượt xem</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="wp-right-video">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="wp-item-video2 image_tn">
                                        <a href="https://www.youtube.com/embed/Qz1OeOXWjic" data-showsocial="true" class="html5lightbox" title="">
                                            <img src="public/ResizeImage/files/anh%20dai%20dien%20video/HINH-DAI-DIEN-VIDEOx300x300x4.png">
                                        </a>
                                        <div class="text-video">
                                            <h3 class="h3-title">Giới thiệu Bếp từ Faster FS 288I/ Bếp điện từ Faster FS 288HI</h3>
                                            <div class="div-view">
                                                <i class="fas fa-user"></i>
                                                <span>4 lượt xem</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="wp-item-video2 image_tn">
                                        <a href="https://www.youtube.com/embed/Wy7GTEU_lcg" data-showsocial="true" class="html5lightbox" title="">
                                            <img src="public/ResizeImage/files/anh%20dai%20dien%20video/M-U-H-NH-MINH-H-A-VIDEO-BINOVA-BI-107-IDx300x300x4.png">
                                        </a>
                                        <div class="text-video">
                                            <h3 class="h3-title">Giới thiệu Bếp từ Binova BI-107-ID</h3>
                                            <div class="div-view">
                                                <i class="fas fa-user"></i>
                                                <span>13 lượt xem</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs ">
                                    <div class="wp-item-video2 image_tn">
                                        <a href="https://www.youtube.com/embed/lQPaNNKx6lQ" data-showsocial="true" class="html5lightbox" title="">
                                            <img src="public/ResizeImage/files/anh%20dai%20dien%20video/m-u-h-nh--i-di-n-video-750x500x300x300x4.png">
                                        </a>
                                        <div class="text-video">
                                            <h3 class="h3-title">Giới thiệu Bếp từ Cata IB 1822 BK made in Spain</h3>
                                            <div class="div-view">
                                                <i class="fas fa-user"></i>
                                                <span>29 lượt xem</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs ">
                                    <div class="wp-item-video2 image_tn">
                                        <a href="https://www.youtube.com/embed/0lrCcGtGplQ&amp;t=44s" data-showsocial="true" class="html5lightbox" title="">
                                            <img src="public/ResizeImage/files/anh%20dai%20dien%20video/H-NH--I-DI-N-H-T-M-I-CATA-SELENE-750x500x300x300x4.png">
                                        </a>
                                        <div class="text-video">
                                            <h3 class="h3-title">Video thực tế - Giới thiệu hút mùi Cata Selene kích thước 600/700/900</h3>
                                            <div class="div-view">
                                                <i class="fas fa-user"></i>
                                                <span>13 lượt xem</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end sec 03 -->
    <section class="sec-04 md-od8">
        <div class="container">
            <div class="wp-congtrinh">
                <div class="wp-title-congtrinh">
                    <h2 class="h2-title">
                        <span class="icon-title1">
                            <img src="public/images/icon-title1.png" alt=""></span><span><a href="san-pham-ban-giao-thuc-te.html">Sản phẩm bàn giao thực tế</a>
                        </span>
                    </h2>
                </div>
                <div id="slider-congtrinh" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="wp-item-congtrinh">
                            <div class="img-ctrinh">
                                <a href="san-pham-ban-giao-thuc-te.html">
                                    <img src="public/ResizeImage/images/may-hut-mui-arber-ab700ka-1-x300x300x4.jpg" alt="Máy hút mùi Arber AB-700KA"></a>
                            </div>
                            <div class="text-ctrinh">
                                <h3 class="h3-title"><a href="#">Máy hút mùi Arber AB-700KA</a></h3>
                                <p class="p-ctiet"><a href="#">Xem chi tiết <i class="fas fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-congtrinh">
                            <div class="img-ctrinh">
                                <a href="san-pham-ban-giao-thuc-te.html">
                                    <img src="public/ResizeImage/images/bep-tu-teka-irs-943-2-x300x300x4.png" alt="Bếp từ Teka IRS 943"></a>
                            </div>
                            <div class="text-ctrinh">
                                <h3 class="h3-title"><a href="#">Bếp từ Teka IRS 943</a></h3>
                                <p class="p-ctiet"><a href="#">Xem chi tiết <i class="fas fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-congtrinh">
                            <div class="img-ctrinh">
                                <a href="san-pham-ban-giao-thuc-te.html">
                                    <img src="public/ResizeImage/images/bep-tu-rommelsbacher-ebc-3410in-3-x300x300x4.png" alt="Bếp từ Rommelsbacher EBC 3410 IN"></a>
                            </div>
                            <div class="text-ctrinh">
                                <h3 class="h3-title"><a href="#">Bếp từ Rommelsbacher EBC 3410 IN</a></h3>
                                <p class="p-ctiet"><a href="#">Xem chi tiết <i class="fas fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-congtrinh">
                            <div class="img-ctrinh">
                                <a href="san-pham-ban-giao-thuc-te.html">
                                    <img src="public/ResizeImage/images/bep-tu-munchen-gm-6232x300x300x4.png" alt="Bếp từ Munchen GM 6232"></a>
                            </div>
                            <div class="text-ctrinh">
                                <h3 class="h3-title"><a href="#">Bếp từ Munchen GM 6232</a></h3>
                                <p class="p-ctiet"><a href="#">Xem chi tiết <i class="fas fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-congtrinh">
                            <div class="img-ctrinh">
                                <a href="san-pham-ban-giao-thuc-te.html">
                                    <img src="public/ResizeImage/images/bep-tu-munchen-gm-292sx300x300x4.png" alt="Bếp từ Munchen GM 292S"></a>
                            </div>
                            <div class="text-ctrinh">
                                <h3 class="h3-title"><a href="#">Bếp từ Munchen GM 292S</a></h3>
                                <p class="p-ctiet"><a href="#">Xem chi tiết <i class="fas fa-chevron-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end sec 04 -->
    <section class="sec-05 md-od9">
        <div class="container">
            <div class="wp-content-sec">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="wp-box-sec05">
                            <div class="wp-title-box5">
                                <h2 class="h2-title">
                                    <span class="icon-title1">
                                    <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></span>
                                    <span><a href="chung-nhan-dai-ly-chinh-hang.html">Chứng nhận đại lý chính hãng</a></span>
                                </h2>
                            </div>
                            <div class="wp-content-chungnhan">
                                <div class="img-chungnhan">
                                    <a href="chung-nhan-dai-ly-chinh-hang.html">
                                        <img src="public/images/chung-nhan.png" alt=""></a>
                                </div>
                                <div class="text-chungnhan">
                                    <h3 class="h3-title"><a href="chung-nhan-dai-ly-chinh-hang.html">Chúc mừng AN THỊNH trở thành đơn vị đại lý chính hãng của BOSCH</a> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="wp-box-sec05">
                            <div class="wp-title-box5">
                                <h2 class="h2-title">
                                    <span class="icon-title1"><a href="gioi-thieu-ve-bep-an-thinh.html">
                                    <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></a></span>
                                    <span><a href="gioi-thieu-ve-bep-an-thinh.html">Giới thiệu về bếp An Thịnh</a></span>
                                </h2>
                            </div>
                            <div class="img-gioithiu">
                                <a href="gioi-thieu-ve-bep-an-thinh.html">
                                    <img src="public/images/gioi-thieu.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="wp-box-sec05 box-kh">
                            <div class="wp-title-box5">
                                <h2 class="h2-title">
                                    <span class="icon-title1">
                                    <a href="y-kien-khach-hang.html">
                                    <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></a></span>
                                    <span><a href="y-kien-khach-hang.html">Khách hàng nói gì về chúng tôi</a></span>
                                </h2>
                            </div>
                            <div class="box-khachang">
                                <div class="wp-sldie-kh">
                                    <div id="slider-khachhang" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="wp-img-kh">
                                                <img src="public/ResizeImage/files/anh%20dai%20dien%20video/kh-tratienx500x500x4.png" alt="Admin">
                                                <p> “Nếu bạn đã sử dụng dịch vụ của chúng tôi
                                                    <br> Hãy viết cho chúng tôi những nhận xét chân thành tại đây
                                                    <br> để giúp chúng tôi phục vụ tốt hơn. Trân trọng!” </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-text-kh">
                                    <div class="btn-danhgia">
                                        <button class="btn btn-danhgia" data-toggle="modal" data-target="#modal-danhgia"><i class="far fa-envelope-open"></i><span>Viết đánh giá của bạn</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
















<?php foreach ($cat_list as $key => $list): 

$name_cat = $category->category_name_by_id($list["category_id"]);// lấy mãng 1 chiều
$get_categorys = $category->get_categorys($list["category_id"]);// lấy ra mang 2 chiều
$get_products = $product->get_products($name_cat["category_id"]);// lấy ra danh sách sản phẩm
?>
    

    <!-- end sec 05 -->
    <section class="sec-06 md-od2">
        <div class="container">
            <div class="wp-sec-sanpham wp-thietbibep">
                <div class="wp-title-sp">
                    <h2 class="h2-title">
                        <a href="<?php echo $name_cat["category_slug"]; ?>.html"><?php echo $name_cat["category_name"]; ?></a>
                    </h2>
                    <button class="btn btn-click hidden-md hidden-lg"><i class="fas fa-sort-down"></i></button>
                    <ul class="ul-b list-link-title">
                        <?php if($get_categorys): foreach ($get_categorys as $key => $category_title) {
                            echo '<li><a href="'.$category_title["category_slug"].'">'.$category_title["category_name"].'</a></li>';
                        } endif; ?>
                    </ul>
                </div>
                <div class="wp-list-sp">
                    <div id="" class="slide-sp owl-carousel owl-theme">

                        <?php foreach ($get_products as $key => $valuep) : ?>
                        <div class="item">
                            <div class="wp-item-sp-page">
                                <div class="img-item-sp-page">
                                    <a href="<?php echo $valuep['product_slug'] ?>.html">
                                        <img class="owl-lazy" data-src="public/images/products/<?php echo $valuep['product_img']; ?>" src="public/images/products/<?php echo $valuep["product_img"]; ?>" alt="<?php echo $valuep['product_name'] ?>">
                                    </a>
                                </div>
                                <div class="text-item-sp">
                                    <h3 class="h3-title"><a href="<?php echo $valuep['product_slug'] ?>.html"><?php echo $valuep['product_name'] ?></a></h3>
                                    <div class="price">
                                        <span class="s-dell"><?php echo $valuep['product_price'] ?></span>
                                        <span class="s-ins"><?php echo $valuep['product_pricesale'] ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                    </div>
                </div>
            </div>
        </div>
</section>


<?php endforeach ?>



<section class="sec-10 md-od10">
    <div class="container">
        <div class="wp-sec-sanpham wp-sec-xakho">
            <div class="wp-title-sp title-vang">
                <h2 class="h2-title">Xả kho Thanh lý</h2>
            </div>
            <div class="wp-list-sp wp-sp-thanhly">
                <div id="" class="slide-sp owl-carousel owl-theme">

                    <?php foreach ($product->get_products_pricesale() as $key => $sale) { ?>
                        
                        <div class="item">
                            <div class="wp-item-sp-page">
                                <div class="img-item-sp-page">
                                    <a href="may-hut-mui-giovani-g-7430-rst_1874.html">
                                        <img class="owl-lazy" data-src="<?php echo $sale["product_img"]; ?>" src="<?php echo $sale["product_img"]; ?>" alt="<?php echo $sale["product_name"]; ?>"></a>
                                </div>
                                <div class="text-item-sp">
                                    <div class="price">
                                        <span class="s-dell"><?php echo $sale["product_price"]; ?></span>
                                        <span class="s-ins"><?php echo $sale["product_pricesale"]; ?></span>
                                    </div>
                                    <h3 class="h3-title"><a href="<?php echo $sale["product_slug"]; ?>.html"><?php echo $sale["product_name"]; ?></a></h3>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sec 10 -->
<div class="wp-banner-ads md-od11">
    <div class="container">
        <div class="ads1 img-cover">
            <a href="#">
                <img src="<?php echo $bannerTuvan["option_value"]; ?>" alt="Tư vấn hợp tác"></a>
        </div>
    </div>
</div>
<!-- end banner ads -->
<section class="sec-11 md-od12">
    <div class="container">
        <div class="wp-tintuc">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="wp-item-exp box-exp">
                        <div class="wp-title-tin">
                            <h2 class="h2-title">
                                <span class="icon-title1">
                                <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></span>
                                <span><a href="kinh-nghiem-hay.html">Kinh nghiệm hay</a></span>
                            </h2>
                        </div>
                        <div class="wp-content-tin">
                            <div class="wp-tin-1">
                                <div class="img-tin1">
                                    <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                        <img src="public/ResizeImage/images/hut-mui-am-tu-boschx500x500x4.jpg" alt="Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả"></a>
                                    <span class="icon-hot"></span>
                                </div>
                                <div class="text-tin1">
                                    <h3 class="h3-title"><a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả</a></h3>
                                    <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html" class="a-xemthem">Xem thêm <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="wp-list-tin-sau">
                                <ul class="ul-b list-tin2">
                                    <li><a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách</a></li>
                                    <li><a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="wp-item-exp">
                        <div class="wp-title-tin">
                            <h2 class="h2-title">
                                <span class="icon-title1">
                                <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></span>
                                <span><a href="phong-thuy-nha-bep.html">Phong thủy nhà bếp</a></span>
                            </h2>
                        </div>
                        <div class="wp-content-tin">
                            <div class="wp-list-phongthuy">
                                <ul class="ul-b list-tin-phongthuy">
                                    <li>
                                        <div class="img-phongthuy">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh-3x300x300x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh"></a>
                                        </div>
                                        <div class="text-phongthuy">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">Bí quyết chọn đồ phù hợp cho bếp xinh</a></h3>
                                            <span class="s-date">08.08.2019</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-xinhx300x300x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại"></a>
                                        </div>
                                        <div class="text-phongthuy">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại</a></h3>
                                            <span class="s-date">23.08.2019</span>
                                        </div>
                                    </li>
                                    <li class="hidden-xs">
                                        <div class="img-phongthuy">
                                            <a href="bep-hong-ngoai-taka-dung-co-tot-khong.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh2x300x300x4.png" alt="Bếp hồng ngoại Taka dùng có tốt không ?"></a>
                                        </div>
                                        <div class="text-phongthuy">
                                            <h3 class="h3-title"><a href="bep-hong-ngoai-taka-dung-co-tot-khong.html">Bếp hồng ngoại Taka dùng có tốt không ?</a></h3>
                                            <span class="s-date">08.08.2019</span>
                                        </div>
                                    </li>
                                    <li class="hidden-xs">
                                        <div class="img-phongthuy">
                                            <a href="bep-hong-ngoai-la-gi.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-hong-ngoaix300x300x4.png" alt="Bếp hồng ngoại là gì?"></a>
                                        </div>
                                        <div class="text-phongthuy">
                                            <h3 class="h3-title"><a href="bep-hong-ngoai-la-gi.html">Bếp hồng ngoại là gì?</a></h3>
                                            <span class="s-date">08.08.2019</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 hidden-xs">
                    <div class="wp-item-exp">
                        <div class="wp-title-tin">
                            <h2 class="h2-title">
                                <span class="icon-title1">
                                <img src="public/images/<?php echo $icon["option_value"]; ?>" alt=""></span>
                                <span>An thịnh trên mạng xã hội</span>
                            </h2>
                        </div>
                        <div class="wp-content-tin">
                            <div class="box-mxh">
                                <ul class="ul-b list-mxh">
                                    <li>
                                        <a href="<?php echo $zalo["option_value"]; ?>">
                                            <img src="public/images/mxh1.png" alt="">
                                            <span>Zalo</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $facebook["option_value"]; ?>">
                                            <img src="public/images/mxh2.png" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $youtube["option_value"]; ?>">
                                            <img src="public/images/mxh3.png" alt="">
                                            <span>Youtube</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $messenger["option_value"]; ?>">
                                            <img src="public/images/mxh4.png" alt="">
                                            <span>Messenger</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $gmail["option_value"]; ?>">
                                            <img src="public/images/mxh5.png" alt="">
                                            <span>Gmail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-support">
                                <h3 class="h3-title-support">Support và tư vấn trực tuyến</h3>
                                <ul class="ul-b list-support">
                                    <?php foreach ($position_arr as $kesy => $pstn) { ?>
                                    <li>
                                        <div class="icon-sp"><img src="<?php echo $pstn->image; ?>" alt="<?php echo $pstn->name; ?>"></div>
                                        <div class="text-sp1"><span><?php echo $pstn->position; ?></span></div>
                                        <div class="text-sp2"><span><?php echo $pstn->name; ?></span><span class="do"><?php echo $pstn->phone; ?></span></div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<?php foreach ($cat_list_partner as $keys => $list_partner): 

$name_cat_partner = $category->category_name_by_id($list_partner["category_id"]);// lấy mãng 1 chiều
$get__cat_partner = $product->get_products($name_cat_partner["category_id"]);// lấy ra danh sách sản phẩm
?>
    

    <section class="sec-12 md-od13">
    <div class="container">
        <div class="wp-doitac">
            <div class="wp-title-doitac">
                <h2 class="h2-title">
            <span class="icon-title1">
            <img class="owl-lazy" data-src="public/images/<?php echo $icon["option_value"]; ?>" src="public/images/<?php echo $icon["option_value"]; ?>"alt=""></span>
            <span><a href="<?php echo $name_cat_partner["category_slug"]; ?>.html"><?php echo $name_cat_partner["category_name"]; ?></a></span>
            </h2>
            </div>
            <div class="wp-slide-doitac">
                <div id="slider-doitac" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="wp-img-soitac">
                            <a href="bosch.html">
                                <img class="owl-lazy" data-src="<?php echo $valuep['product_img']; ?>" src="<?php echo $valuep['product_img']; ?>" alt="Bosch"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sec 12 -->

<?php endforeach ?>





<?php
require_once('views/footer.php'); 
?>

<!-- <div class="modal banner" id="modal-banner" style="top: 40px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <a href="khuyen-mai-7-ngay-vang-gia-soc.html">
                        <img src="public/upload/images/Banner%20khuy%e1%ba%bfn%20m%e1%ba%a1i/BANNER%c4%90%e1%ba%a6UTRANG_optimized.jpg" alt="Bếp An Thịnh Khuyến Mãi"></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var modal = $(".banner");
            modal.show();
        });
        $('.close').click(function() {
            var modal = $(".banner");
            modal.hide();
        })
    </script> -->