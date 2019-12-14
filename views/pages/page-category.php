<?php 
$slug=$_REQUEST['url'];
$post=loadModel('post');
$topic =loadModel('topic');
$listtop=$topic->topic_list();
$row=$post->post_rowslug($slug,'page');
$listrow=$post->post_list(4);
?>
<?php require_once('views/header.php'); ?>
<section class="sec-content-page">
    <div class="wp-bread-page">
        <div class="container">
            <div class="bread-page">
                <ul itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#" class="breadcrumb">
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url"><span itemprop="title">bepanthinh.com</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="chinh-sach.html" itemprop="url"><span itemprop="title">Chính Sách</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="bao-mat-thong-tin.html" itemprop="url"><span itemprop="title"><?php echo $row['post_title']; ?></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end bread page -->
    <div class="wp-main-content-page">
        <div class="container">
            <div class="main-content-page">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12 fl-right">
                        <div class="wp-right-page">
                            <div class="wp-post-content-ct">
                                <h1 class="h1-title-ct ct-tin"><?php echo $row['post_title']; ?></h1>
                                <p class="p-date-ct"><i class="fas fa-calendar-alt"></i><span><?php echo $row['post_createdat']; ?></span></p>
                                <?php echo $row['post_detail']; ?>
                                <?php require_once('views/modules/lien-he.php'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 fl-left">
                        <div class="box-sidebar box-contact">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title">Về chúng tôi</h2>
                            </div>
                            <div class="content-box box-1">
                                <ul class="ul-b list-item-box">
                                    <li><a href="gioi-thieu-ve-bep-an-thinh.html">Giới Thiệu Về Bếp An Thịnh</a></li>
                                    <li><a href="uu-dai-dai-ly-khach-cong-trinh.html">Ưu Đãi Đại lý - Khách Công Trình</a></li>
                                    <li><a href="hop-tac-mo-chi-nhanh-tinh.html">Hợp Tác Mở Chi Nhánh Tỉnh</a></li>
                                    <li><a href="lien-he.html">Thông Tin Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="box-sidebar box-exp hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title"><a href="kinh-nghiem-hay.html">Kinh nghiệm hay</a></h2>
                            </div>
                            <div class="content-box box-2">
                                <ul class="ul-b list-item-box">
                                	<?php 	foreach($listrow as $post): ?>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                                <img src="public/ResizeImage/images/<?php 	echo $post['post_img']; ?>" alt="<?php 	echo $post['post_title']; ?>"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="<?php echo $post['post_slug']; ?>.html"><?php 	echo $post['post_title']; ?></a></h3>
                                        </div>
                                    </li>
                                <?php 	endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="box-sidebar box-phongthuy hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title"><a href="phong-thuy-nha-bep.html">Phong thủy nhà bếp</a></h2>
                            </div>
                            <div class="content-box">
                                <ul class="ul-b list-item-box">
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                                <img src="public/ResizeImage/images/hut-mui-am-tu-boschx500x500x4.jpg" alt="Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả</a></h3>
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html" class="a-xemthem">Xem thêm <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">
                                                <img src="public/ResizeImage/images/583_lo_nuong_sunhouse_shd4226__3_x500x500x4.jpg" alt="Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách</a></h3>
                                            <span class="s-date">23/08/2019 4:50:06 CH</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">
                                                <img src="public/ResizeImage/images/Bep-hong-ngoai-Philips-HR-2015-Made-in-Thailand-4x500x500x4.jpg" alt="Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới</a></h3>
                                            <span class="s-date">23/08/2019 4:02:34 CH</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh-3x500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">Bí quyết chọn đồ phù hợp cho bếp xinh</a></h3>
                                            <span class="s-date">08/08/2019 11:23:29 SA</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-phongthuy-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-xinhx500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại"></a>
                                        </div>
                                        <div class="text-phongthuy-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại</a></h3>
                                            <span class="s-date">23/08/2019 11:41:00 SA</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box 3 -->
                        <div class="box-sidebar box-exp hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title">Tư vấn trực tuyến</h2>
                            </div>
                            <div class="content-box box-2 box-tuvan">
                                <ul class="ul-b list-item-box">
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="public/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh Hà Nội</h3><span>0913 14 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="public/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh HCM</h3><span>0888 34 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="public/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Góp Ý Dịch Vụ</h3><span>0914 03 1368</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end box tu van -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content page -->
</section>
<?php require_once('views/footer.php'); ?>