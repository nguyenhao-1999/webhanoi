<?php 
$product=loadModel('product');
$category=loadModel('category');
$cat=$_REQUEST['url'];
$rowcat=$category->category_rowslug($cat);
$rowcat['category_id'];
$listid=$category->category_listid($rowcat['category_id']);
$list_product=$product->product_category($listid);
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
                        <a href="thiet-ke-tu-bep.html" itemprop="url"><span itemprop="title">Tủ bếp</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="tu-bep-go-tu-nhien.html" itemprop="url"><span itemprop="title"><?php echo $rowcat['category_name']; ?></span></a>
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
                            <div class="wp-content-sp-page danhmuc-sp-mb">
                                <div class="wp-box-post-sp">
                                    <div class="wp-title-ct-sp">
                                        <h1 class="h1-title">Tủ Bếp Gỗ Tự Nhiên</h1>
                                    </div>
                                    <div class="wp-post-title scroll">
                                    </div>
                                </div>
                                <div class="hidden-md hidden-lg">
                                </div>
                                <!-- end box text top -->
                                <div class="wp-list-sp-page">
                                    <div class="wp-filter1-page-sp hidden-sm hidden-xs">
                                        <select name="" id="sort" onchange="filter_product('tu-bep-go-tu-nhien.html');">
                                            <option value="0">- Sắp xếp theo -</option>
                                            <option value="price_asc">Giá thấp đến cao</option>
                                            <option value="price_desc">Giá cao đến thấp</option>
                                            <option value="view">Xem nhiều nhất</option>
                                        </select>
                                    </div>
                                    <!-- end filter 1 -->
                                    <div class="main-list-sp-page product-fs productListVuSon">
                                        <div class="row">
                                        	<?php foreach($list_product as $row): ?>
                                            <div class="col-md-4 col-sm-4 col-xs-6 ">
                                                <div class="wp-item-sp-page">
                                                    <div class="img-item-sp-page">
                                                        <a href="<?php echo $row['product_slug']; ?>.html">
                                                            <img src="public/ResizeImage/images/product/bepanthinh/anhchinh/<?php echo $row['product_img'] ?>" alt="<?php echo $row['product_name']; ?>"></a>
                                                    </div>
                                                    <div class="text-item-sp-page">
                                                        <h3 class="h3-title"><a href="<?php echo $row['product_slug']; ?>.html"><?php echo $row['product_name']; ?></a></h3>
                                                        <div class="price">
                                                            <span class="s-ins">1</span>
                                                            <span class="s-dell">1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- end list sp page -->
                                <div class="phantrang text-center">
                                    <div class="pagination ajax">
                                        <a href="javascript:void(0)" data-url="https://bepanthinh.com/tu-bep-go-tu-nhien.html" rel="nofollow">Xem thêm</a>
                                        <div class="loading"><i class="icon">Loading</i></div>
                                    </div>
                                </div>
                                <!-- end phan trang -->
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 fl-left">
                        <div class="box-sidebar box-exp hidden-xs">
                            <div class="wp-title-sidebar">
                                <h2 class="h2-title"><a href="kinh-nghiem-hay.html">Kinh nghiệm mua Tủ Bếp Gỗ Tự Nhiên</a></h2>
                            </div>
                            <div class="content-box box-2">
                                <ul class="ul-b list-item-box">
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">
                                                <img src="public/ResizeImage/images/hut-mui-am-tu-boschx500x500x4.jpg" alt="Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="chuyen-gia-huong-dan-cach-su-dung-may-hut-mui-dung-cach-hieu-qua.html">Chuyên gia hướng dẫn cách sử dụng máy hút mùi đúng cách, hiệu quả</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">
                                                <img src="public/ResizeImage/images/583_lo_nuong_sunhouse_shd4226__3_x500x500x4.jpg" alt="Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="nhung-luu-y-khi-su-dung-va-huong-dan-bao-quan-lo-nuong-dien-dung-cach.html">Những lưu ý khi sử dụng và hướng dẫn bảo quản lò nướng điện đúng cách</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">
                                                <img src="public/ResizeImage/images/Bep-hong-ngoai-Philips-HR-2015-Made-in-Thailand-4x500x500x4.jpg" alt="Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="gioi-thieu-ve-bep-hong-ngoai-la-gi-bep-cua-thoi-dai-cong-nghe-moi.html">Giới thiệu về bếp hồng ngoại là gì? - bếp của thời đại công nghệ mới</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/anh-3x500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh.html">Bí quyết chọn đồ phù hợp cho bếp xinh</a></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="img-exp-sb">
                                            <a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">
                                                <img src="public/ResizeImage/files/anh%20tin%20tuc/bep-xinhx500x500x4.png" alt="Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại"></a>
                                        </div>
                                        <div class="text-exp-sb">
                                            <h3 class="h3-title"><a href="bi-quyet-chon-do-phu-hop-cho-bep-xinh-bat-kip-xu-the-hien-dai.html">Bí quyết chọn đồ phù hợp cho bếp xinh bắt kịp xu thế hiện đại</a></h3>
                                        </div>
                                    </li>
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
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh Hà Nội</h3><span>0913 14 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
                                        </div>
                                        <div class="text-avt">
                                            <h3 class="h3-title">Kinh Doanh HCM</h3><span>0888 34 1368</span></div>
                                    </li>
                                    <li class="item-avt-sp">
                                        <div class="img-avt">
                                            <a href="#"><img src="Content/pc/images/icon-sp1.png" alt=""></a>
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
<section class="sec-00 sec-sp-muanhieu">
    <div class="container">
        <div class="wp-sec-sanpham wp-sanpham-muanhieu">
            <div class="wp-title-sp">
                <h2 class="h2-title"><a href="http://bepanthinh.akr.vn/san-pham-ban-chay.html">Sản phẩm được mua nhiều nhất</a></h2>
            </div>
            <div class="wp-list-sp">
                <div id="" class="slide-sp owl-carousel owl-theme">
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-33_2060.html">
                                    <img class="owl-lazy"  src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-33_2060x500x500x4.png" alt="Tủ bếp Gỗ Xoan đ&#224;o AT - 33"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-33_2060.html">Tủ bếp Gỗ Xoan đ&#224;o AT - 33</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-32_2058.html">
                                    <img class="owl-lazy"  src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-32_2058x500x500x4.png" alt="Tủ bếp Gỗ Xoan đ&#224;o AT - 32"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-32_2058.html">Tủ bếp Gỗ Xoan đ&#224;o AT - 32</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-31_2056.html">
                                    <img class="owl-lazy"  src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-31_2056x500x500x4.png" alt="Tủ bếp Gỗ Xoan đ&#224;o AT - 31"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-31_2056.html">Tủ bếp Gỗ Xoan đ&#224;o AT - 31</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-30_2054.html">
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-30_2054x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-30"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-30_2054.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-30</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-29_2053.html">
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-29_2053x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-29"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-29_2053.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-29</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-28_2052.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-28_2052x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-28_2052x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-28"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-28_2052.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-28</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-27_2050.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-27_2050x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-27_2050x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-27"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-27_2050.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-27</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-26_2048.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-26_2048x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-26_2048x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-26"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-26_2048.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-26</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-25_2047.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-25_2047x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-25_2047x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-25"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-25_2047.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-25</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="tu-bep-go-xoan-dao-at-24_2046.html">
                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-24_2046x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/tu-bep-go-xoan-dao-at-24_2046x500x500x4.png" alt="Tủ Bếp Gỗ Xoan Đ&#224;o AT-24"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="tu-bep-go-xoan-dao-at-24_2046.html">Tủ Bếp Gỗ Xoan Đ&#224;o AT-24</a></h3>
                                <div class="price">
                                    <span class="s-dell">1</span>
                                    <span class="s-ins">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('views/footer.php'); ?>