<?php 
if (!empty($slug = $_REQUEST['option'])) {
$product=loadModel('product');
$category=loadModel('category');
$option=loadModel('option');
$row=$product->product_rowslug($slug);
if ($row['product_catid']) {
  $category_of_product = $category->category_of($row['product_catid']);
  $product_relate = $product->product_relate($row['product_catid'], $row['product_id']);
}

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
                        <a href="thiet-bi-nha-bep.html" itemprop="url"><span itemprop="title">Thiết bị nhà bếp</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="may-hut-mui.html" itemprop="url"><span itemprop="title">Máy Hút Mùi</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="may-hut-mui-abbaka.html" itemprop="url"><span itemprop="title">Máy Hút Mùi Abbaka</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end bread page -->
    <div class="wp-main-content-page">
        <div class="container">
            <div class="main-content-page">
                <input type="hidden" value="3710" id="ProductID" />
                <input type="hidden" id="ParentID" value="0" />
                <div class="main-content-ctsp">
                    <div class="wp-title-ctsp">
                        <h1 class="h1-title"><?php if($row['product_name']) echo $row['product_name']; ?></h1>
                        <ul class="ul-b list-icon-title">
                            <li>
                                <a href="https://zalo.me/0913141368">
                                    <img src="public/images/mxh1.png" alt="Link_Zalo"></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sieuthibepanthinh/">
                                    <img src="public/images/mxh2.png" alt="Link_Facebook"></a>
                            </li>
                            <li>
                                <a href="https://www.messenger.com/t/sieuthibepanthinh">
                                    <img src="public/images/img-mess.png" alt="Link_Messenger"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="box-img-ctsp">
                        <div class="row row-edit-0">
                            <div class="col-md-5 col-sm-12 col-xs-12 col-edit-0">
                                <div class="wp-img-ctspa">
                                    <div class="wp-iconqua">
                                        <img src="public/images/icon-qua.png" alt="Quà tặng">
                                    </div>
                                    <div class="wp-img-zoom">
                                        <input type="hidden" id="__VIEWxSTATE" />
                                        <ul id='zoom1' class='gc-start'>
                                            <li>
                                                <img src="public/ResizeImage/images/product/bepanthinh/anhchinh/<?php echo $row['product_img']; ?>" alt='<?php echo $row['product_name']; ?>' /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12 col-edit-0">
                                <div class="wp-right-box-img">
                                    <div class="top-box-img">
                                        <div class="wp-gia-km">
                                            <span>Giá KM:<b><?php echo number_format($row['product_pricesale'], 0, '', '.'); ?> đ</b></span>
                                        </div>
                                        <div class="wp-gia-ny">
                                            <span>Giá niêm yết: <?php echo number_format($row['product_price'], 0, '', '.'); ?> đ</span>
                                        </div>
                                        <div class="wp-tiet-kiem">
                                            <span>Tiết kiệm: <?php echo number_format($row['product_price']-$row['product_pricesale'], 0, '', '.') ?> đ</span>
                                        </div>
                                    </div>
                                    <div class="main-box-img">
                                        <div class="box-s1">
                                            <div class="box-qua">
                                                <ul class="ul-b list-qua">
                                                    <?php if($row['product_informations']) echo $row['product_informations']; ?>
                                                </ul>
                                            </div>
                                            <div class="box-btn">
                                                <a href="javascript:void(0)" class="buy_now btn btn-default btn-b1" data-id="3710" data-returnpath="%2fmay-hut-mui-abbaka-ab-70-pq_3971.html" rel="nofollow">
                                                    <span class="span-1">Mua ngay</span>
                                                    <span class="span-2">Giao hàng tận nơi trên toàn quốc</span>
                                                </a>
                                                <button class="btn btn-default btn-b2" data-toggle="modal" data-target="#modal-xemtainha">
                                                    <span class="span-1">ĐĂNG KÝ XEM HÀNG TẠI NHÀ</span>
                                                    <span class="span-2">Không mua không sao</span>
                                                </button>
                                                <button class="btn btn-default btn-b3" data-toggle="modal" data-target="#modal-khaosat">
                                                    <span class="span-1">KHẢO SÁT TƯ VẤN LẮP ĐẶT TẠI NHÀ </span>
                                                    <span class="span-2">Miễn phí</span>
                                                </button>
                                            </div>
                                            <p class="text-center gio-a">Giờ làm việc: <b>8h00 - 20h00</b> (Tất cả các ngày)</p>
                                            <div class="box-address scroll">
                                                <div class="box-add1">
                                                    <div class="wp-ft2">
                                                        <h3 class="h3-title"><i class="fas fa-map-marker-alt"></i><span>HÀ NỘI</span><span class="p-gt"><a href="#">(Giới thiệu về showroom)</a></span></h3>
                                                        <p class="p-ft"><b>Địa chỉ:</b>374 Khâm Thiên, Đống Đa, Hà Nội</p>
                                                        <p class="p-ft"><b>Hotline:</b> 0913 14 1368</p>
                                                        <p class="p-ft p-map"><a href="https://www.google.com/maps/place/374+Khâm+Thiên,+Thổ+Quan,+Đống+Đa,+Hà+Nội,+Việt+Nam/@21.019416,105.8294143,17z/data=!3m1!4b1!4m5!3m4!1s0x3135ab82de00b9e1:0x69820c73a6ef445e!8m2!3d21.019411!4d105.831603?hl=vi-VN" target="_blank">(Xem chỉ dẫn)</a></p>
                                                    </div>
                                                </div>
                                                <div class="box-add1">
                                                    <div class="wp-ft2">
                                                        <h3 class="h3-title"><i class="fas fa-map-marker-alt"></i><span>TP. HỒ CHÍ MINH</span><span class="p-gt"><a href="#">(Giới thiệu về showroom)</a></span></h3>
                                                        <p class="p-ft"><b>Địa chỉ:</b>358 Hoàng Văn Thụ, P.4, Q Tân Bình</p>
                                                        <p class="p-ft"><b>Hotline:</b>0888 34 1368</p>
                                                        <p class="p-ft p-map"><a href="https://www.google.com/maps/place/358+Hoàng+Văn+Thụ,+Phường+4,+Tân+Bình,+Hồ+Chí+Minh,+Việt+Nam/@10.7967163,106.6546763,17z/data=!3m1!4b1!4m5!3m4!1s0x31752934216a497b:0xa5677a9f45820a05!8m2!3d10.796711!4d106.656865?hl=vi-VN" target="_blank">(Xem chỉ dẫn)</a></p>
                                                    </div>
                                                </div>
                                                <div class="box-add1">
                                                    <div class="wp-ft2">
                                                        <h3 class="h3-title"><i class="fas fa-map-marker-alt"></i><span>TP. HỒ CHÍ MINH (Đang Sửa Chữa)</span><span class="p-gt"><a href="#">(Giới thiệu về showroom)</a></span></h3>
                                                        <p class="p-ft"><b>Địa chỉ:</b>Bạch Đằng, P.24, Q Bình Thạnh, HCM</p>
                                                        <p class="p-ft"><b>Hotline:</b>0888 34 1368</p>
                                                        <p class="p-ft p-map"><a href="https://www.google.com/maps/place/Bạch+Đằng,+Bình+Thạnh,+Hồ+Chí+Minh,+Việt+Nam/@10.8032602,106.7025894,17z/data=!3m1!4b1!4m5!3m4!1s0x317528b90de0190f:0x7b8be3f539221109!8m2!3d10.8032549!4d106.7047781?hl=vi-VN" target="_blank">(Xem chỉ dẫn)</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-s2 hidden-xs">
                                            <div class="wp-box-camket">
                                                <h2 class="h2-title">Bếp AN THỊNH CAM KẾT</h2>
                                                <ul class="ul-b list-camket">
                                                    <li class="item-camket">
                                                        <div class="icon"><img src="public/images/icon-1.png" alt=""></div>
                                                        <div class="text">
                                                            <h3 class="h3-title">100% CHÍNH HÃNG</h3><span>Cam kết đền 1 tỷ đồng nếu phát hiện hàng giả, hàng nhái.</span></div>
                                                    </li>
                                                    <li class="item-camket">
                                                        <div class="icon"><img src="public/images/icon-2.png" alt=""></div>
                                                        <div class="text">
                                                            <h3 class="h3-title">UY TÍN – TẬN TÂM</h3><span>Phục vụ khách hàng bằng tất cả cái “Tâm” và “Sự tử tế” của người làm nghề.</span></div>
                                                    </li>
                                                    <li class="item-camket">
                                                        <div class="icon"><img src="public/images/icon-3.png" alt=""></div>
                                                        <div class="text">
                                                            <h3 class="h3-title">SỐ 1 VỀ CHẤT LƯỢNG</h3><span>Cam kết đem tới sản phẩm Chất lượng với giá cạnh tranh nhất</span></div>
                                                    </li>
                                                </ul>
                                                <div class="dichvu">
                                                    <ul class="ul-b list-dichvu">
                                                        <li class="item-dichvu">
                                                            <div class="icon">
                                                                <img src="public/images/chi-tiet-sp_23.gif" alt="">
                                                            </div>
                                                            <div class="text">
                                                                <span>Hotline: <b>0913 14 1368</b></span>
                                                            </div>
                                                        </li>
                                                        <li class="item-dichvu">
                                                            <div class="icon">
                                                                <img src="public/images/chi-tiet-sp_26.gif" alt="">
                                                            </div>
                                                            <div class="text">
                                                                <span><a href="https://www.messenger.com/t/sieuthibepanthinh">Messenger</a></span>
                                                            </div>
                                                        </li>
                                                        <li class="item-dichvu">
                                                            <div class="icon">
                                                                <img src="public/images/chi-tiet-sp_28.gif" alt="">
                                                            </div>
                                                            <div class="text">
                                                                <span><a href="https://www.messenger.com/t/sieuthibepanthinh">Zalo</a></span>
                                                            </div>
                                                        </li>
                                                        <li class="item-dichvu">
                                                            <div class="icon">
                                                                <img src="public/images/chi-tiet-sp_30.gif" alt="">
                                                            </div>
                                                            <div class="text">
                                                                <span><a href="#">Hướng dẫn mua hàng đảm bảo</a></span>
                                                            </div>
                                                        </li>
                                                        <li class="item-dichvu">
                                                            <div class="icon">
                                                                <img src="public/images/chi-tiet-sp_33.gif" alt="">
                                                            </div>
                                                            <div class="text">
                                                                <span><a href="#">Đăng ký nhận mã giảm giá</a></span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end box img ctsp -->
                    <div class="box-thongso">
                        <div class="ul-b e-tabs not-dqtab ajax-tab-1" data-section="ajax-tab-1">
                            <div class="content">
                                <div>
                                    <ul class="ul-b tabs tabs-title tab-mobile clearfix hidden-sm hidden-md hidden-lg">
                                        <li class="prev"><i class="fa fa-angle-left"></i>
                                        </li>
                                        <li class="tab-link tab-title hidden-sm hidden-md hidden-lg current tab-titlexs" data-tab="tab-1"><span>Thông số kỹ thuật</span>
                                        </li>
                                        <li class="next"><i class="fa fa-angle-right"></i>
                                        </li>
                                    </ul>
                                    <ul class="ul-b tabs tabs-title ajax clearfix hidden-xs">
                                        <li class="tab-link has-content" data-tab="tab-1"><span>Thông số kỹ thuật</span> </li>
                                        <li class="tab-link " data-tab="tab-2"><span>Chi tiết sản phẩm</span> </li>
                                        <li class="tab-link " data-tab="tab-3"><span>Bình luận - đánh giá</span> </li>
                                    </ul>
                                    <div class="tab-1 tab-content">
                                        <div class="content-thongso">
                                            <div class="wp-tab-thongso">
                                                <div class="table-responsive">
                                                    <ul class='specifications'>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Loại sản phẩm: Máy hút mùi tum kính</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Mã sản phẩm: <strong>ABBAKA AB 70 PQ</strong></span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Hãng sản xuất: ABBAKA</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Xuất xứ: Italy</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Chất liệu: Inox</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Công suất hút: 1000m3/h _+60m3/h</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Độ ồn: =<></span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Kích thước: 90cm</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">GW/NW: 29/25KG</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Điện Áp: 240V/60Hz</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Áp lực gió: 160Pa</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Lưới lọc mỡ: Aluminium – 5 lớp</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Ống thoát khí: (150mm)</span></span>
                                                        </li>
                                                        <li><span style="font-size:16px"><span style="font-family:times new roman,times,serif">Bảo hành: 3 năm</span></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-2 tab-content">
                                        <div class="content-thongso">
                                            <div class="post-thongso">

                                                <?php if ($row['product_detail']) echo $row['product_detail']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-3 tab-content">
                                        <div class="content-thongso">
                                            <!-- fb danh gia -->
                                            <!-- <div class="fb-comments" data-href="http://bepquangvinh.com/" data-width="" data-numposts="5"></div> -->
                                            <div class="fb-comments" data-href="<?php echo $_SERVER["SERVER_NAME"].'/'.$_SERVER["REQUEST_URI"]; ?>" data-width="100%" data-numposts="5"></div>
                                            <!-- end fb danh gia -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cac modal popup bo sung -->
            <div class="modal fade" id="modal-danhgia">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="wp-content-danhgia">
                                <div class="row">
                                    <div class="col-md-5 hidden-sm hidden-xs">
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="wp-form-dk-popup">
                                            <h3 class="h3-title">Đánh giá chất lượng phục vụ</h3>
                                            <form action="#">
                                                <div class="form-dk-popup">
                                                    <p class="p1">Nhận xét của quý khách là thông tin quan trọng để An Thịnh nâng cao chất lượng phục vụ</p>
                                                    <input type="text" class="form-control" placeholder="Họ và tên">
                                                    <input type="text" class="form-control" placeholder="Số điện thoại">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                    <textarea class="form-control" name="" id="" rows="5" placeholder="Quý khách có thể giúp chúng tôi chứng nhận về: Chất lượng sản phẩm, thái độ phục vụ, dịch vụ khách hàng..."></textarea>
                                                    <p class="p2">Ảnh chân dung quý khách</p>
                                                    <p>Vui lòng cung cấp một ảnh chân dung hoặc ảnh avatar facebook của quý khách</p>
                                                    <input type="file" class="input-file">
                                                    <button class="btn btn-danger" type="submit">GỬI ĐÁNH GIÁ <i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal gui tin nhan -->
            <div class="modal fade" id="modal-guicauhoi">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="wp-content-guicauhoi">
                                <div class="row">
                                    <div class="col-md-5 hidden-sm hidden-xs img-cover">
                                        <img src="index.html" alt="">
                                    </div>
                                    <div class="col-md-7 col-sm-12 col-xs-12">
                                        <div class="wp-form-dk-popup">
                                            <h3 class="h3-title">Để lại câu hỏi cho chúng tôi</h3>
                                            <form action="#">
                                                <div class="form-dk-popup">
                                                    <input type="text" placeholder="Họ và tên" class="form-control form-group">
                                                    <input type="text" placeholder="Số điện thoại" class="form-control form-group">
                                                    <input type="text" placeholder="Email" class="form-control form-group">
                                                    <button class="btn btn-danger" type="submit">Gửi câu hỏi <i class="fas fa-paper-plane"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wp-content-guicauhoi2">
                                <div class="row">
                                    <div class="col-md-7 hidden-sm hidden-xs img-cover">
                                        <img src="index.html" alt="">
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="wp-content-ch2">
                                            <h3 class="h3-title-tks">Trân trọng cảm ơn quý khách</h3>
                                            <p>
                                                Chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal dang ky xem tai nha -->
            <div class="modal fade" id="modal-xemtainha">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="wp-content-danhgia">
                                <div class="row">
                                    <div class="col-md-6 hidden-sm hidden-xs">
                                        <div class="wp-left-xemtainha">
                                            <h1 class="h1-title-xtn">Máy hút mùi ABBAKA AB 70 PQ</h1>
                                            <div class="img-xtn">
                                                <img src="public/ResizeImage/images/product/bepanthinh/anhchinh/may-hut-mui-abbaka-ab-70-pq_3971x500x500x4.png" alt="Máy hút mùi ABBAKA AB 70 PQ">
                                            </div>
                                            <div class="top-box-img">
                                                <div class="wp-gia-km">
                                                    <span>Giá KM:<b>6.752.000đ</b></span>
                                                </div>
                                                <div class="wp-gia-ny">
                                                    <span>Giá niêm yết: 9.100.000 đ</span>
                                                </div>
                                                <div class="wp-tiet-kiem">
                                                    <span>Tiết kiệm: 2.348.000</span>
                                                </div>
                                            </div>
                                            <div class="box-qua">
                                                <ul class="ul-b list-qua">
                                                    <p>Thông tin chi tiết sản phẩm máy hút mùi ABBAKA AB 70 PQ</p>
                                                    <p>Loại sản phẩm: Máy hút mùi tum kính</p>
                                                    <p>Mã sản phẩm: ABBAKA AB 70 PQ</p>
                                                    <p>Hãng sản xuất: ABBAKA</p>
                                                    <p>Xuất xứ: Italy</p>
                                                    <p>Chất ...</p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="wp-form-dk-popup wp-right-xemtainha">
                                            <h3 class="h3-title">Đăng ký xem tại nhà <span>Không mua không sao</span></h3>
                                            <form action="#" name="viewAtHome">
                                                <div class="form-dk-ct">
                                                    <div class="wp-input wp-input1 form-group">
                                                        <input id="Name_View" type="text" placeholder="Họ và tên" class="form-control">
                                                    </div>
                                                    <div class="wp-input wp-input2 form-group">
                                                        <input id="Phone_View" type="text" placeholder="Số điện thoại" class="form-control">
                                                    </div>
                                                    <div class="wp-input wp-input3 form-group">
                                                        <input id="Address_View" name="Address_Survey" type="text" placeholder="Địa chỉ giao hàng" class="form-control">
                                                    </div>
                                                    <div class="wp-button">
                                                        <a href="javascript:void(0)" type="button" onclick="regView()" class="btn btn-submit">ĐĂNG KÝ NGAY <i class="fas fa-paper-plane"></i></a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal dang ky khao sat -->
            <div class="modal fade" id="modal-khaosat">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="wp-content-danhgia">
                                <div class="row">
                                    <div class="col-md-6 hidden-sm hidden-xs">
                                        <div class="wp-left-xemtainha">
                                            <h1 class="h1-title-xtn">Máy hút mùi ABBAKA AB 70 PQ</h1>
                                            <div class="img-xtn">
                                                <img src="public/ResizeImage/images/product/bepanthinh/anhchinh/may-hut-mui-abbaka-ab-70-pq_3971x500x500x4.png" alt="Máy hút mùi ABBAKA AB 70 PQ">
                                            </div>
                                            <div class="top-box-img">
                                                <div class="wp-gia-km">
                                                    <span>Giá KM:<b>6.752.000đ</b></span>
                                                </div>
                                                <div class="wp-gia-ny">
                                                    <span>Giá niêm yết: 9.100.000 đ</span>
                                                </div>
                                                <div class="wp-tiet-kiem">
                                                    <span>Tiết kiệm: 2.348.000</span>
                                                </div>
                                            </div>
                                            <div class="box-qua">
                                                <ul class="ul-b list-qua">
                                                    <p>Thông tin chi tiết sản phẩm máy hút mùi ABBAKA AB 70 PQ</p>
                                                    <p>Loại sản phẩm: Máy hút mùi tum kính</p>
                                                    <p>Mã sản phẩm: ABBAKA AB 70 PQ</p>
                                                    <p>Hãng sản xuất: ABBAKA</p>
                                                    <p>Xuất xứ: Italy</p>
                                                    <p>Chất ...</p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="wp-form-dk-popup wp-right-xemtainha wp-right-khaosat">
                                            <h3 class="h3-title">Khảo sát tư vấn lắp đặt tại nhà <span>Miễn phí</span></h3>
                                            <form name="reg_survey">
                                                <div class="form-dk-ct">
                                                    <div class="wp-input wp-input1 form-group">
                                                        <input id="Name_Survey" name="Name_Survey" type="text" placeholder="Họ và tên" class="form-control">
                                                    </div>
                                                    <div class="wp-input wp-input2 form-group">
                                                        <input id="Phone_Survey" name="Phone_Survey" type="text" placeholder="Số điện thoại" class="form-control">
                                                    </div>
                                                    <div class="wp-input wp-input3 form-group">
                                                        <input id="Address_Survey" name="Address_Survey" type="text" placeholder="Địa chỉ" class="form-control">
                                                    </div>
                                                    <div class="wp-button">
                                                        <a href="javascript:void(0)" type="button" onclick="regSurvey()" class="btn btn-submit">ĐĂNG KÝ NGAY <i class="fas fa-paper-plane"></i></a>
                                                    </div>
                                                    <p class="text-center" style="padding-top: 5px;">Cam kết mọi thông tin đều được bảo mật</p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="sec-00 sec-sp-muanhieu">
                <div class="container">
                    <div class="wp-sec-sanpham wp-sanpham-muanhieu">
                        <div class="wp-title-sp">
                            <h2 class="h2-title"><a href="#">Sản phảm cùng chuyên mục</a></h2>
                        </div>
                        <div class="wp-list-sp">
                            <div id="" class="slide-sp owl-carousel owl-theme">
                            <?php if ($product_relate) { foreach ($product_relate as $key => $product) :?>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="<?php echo $product['product_slug']; ?>.html">
                                                <img class="owl-lazy" data-src="public/ResizeImage/images/product/<?php echo $product['product_img']; ?>" src="public/ResizeImage/images/product/<?php echo $product['product_img']; ?>" alt="M<?php echo $product['product_name']; ?>"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="<?php echo $product['product_slug']; ?>.html"><?php echo $product['product_name']; ?></a></h3>
                                            <div class="price">
                                                <span class="s-dell"><?php echo number_format($product['product_price'], 0, '', '.'); ?></span>
                                                <span class="s-ins"><?php echo number_format($product['product_pricesale'], 0, '', '.'); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>
    <!-- end main content page -->
</section>
<?php require_once('views/footer.php'); ?>


<!-- 
            <div class="loading"><i class="icon">Loading</i></div>
            <script type="text/javascript">
                function regSurvey() {
                    var ProductID = $("#ProductID").val();
                    var NameSurvey = $("#Name_Survey").val();
                    var PhoneSurvey = $("#Phone_Survey").val();
                    var AddressSurvey = $("#Address_Survey").val();
                    $('.loading').show();
                    $.ajax({
                        type: 'GET',
                        url: '/ajax/GetSuvey.html',
                        data: 'ProductID=' + ProductID + "&NameSurvey=" + NameSurvey + "&PhoneSurvey=" + PhoneSurvey + "&AddressSurvey=" + AddressSurvey,
                        dataType: 'json',
                        success: function(data) {
                            var content = data.Html;
                            var param = data.Params;
                            if (param != '') {
                                Swal.fire({
                                    type: 'error',
                                    html: param,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    focusConfirm: false,
                                    confirmButtonText: "OK",
                                })
                            }
                            if (content != '') {
                                //Swal.fire({
                                // type: 'success',
                                // html: content,
                                //})
                                location.href = "/dang-ky-thanh-cong";
                            }
                            $('.loading').hide();
                        },
                        error: function() {}
                    });
                }

                function add_comment(ParentID, ProductID, Vote, Name, Content) {
                    $.ajax({
                        type: "post",
                        url: "/ajax/AddComentUser.html",
                        data: {
                            ParentID: ParentID,
                            ProductID: ProductID,
                            Vote: Vote,
                            Name: Name,
                            Content: Content
                        },
                        dataType: "json",
                        success: function(data) {
                            var _Content = data.Html;
                            if (_Content == "OK") {
                                alert("Đã gửi nhận xét! Nhận xét sẽ được hiển thị sau khi quản trị viên xét duyệt!")
                            } else {
                                alert("Không có gì!")
                            }
                        },
                        error: function(data) {
                            alert('Đã có lỗi!');
                        }
                    });
                }

                function cmtConfirmUser2() {
                    var content = $("#cmtContent2").val();
                    var userName = $("#cmtUserName2").val();
                    var userEmail = $("#cmtUserEmail2").val();
                    var userPhone = $("#cmtUserPhone2").val();
                    var productID = $("#ProductID").val();
                    var parentID = $("#ParentID").val();
                    if (userName.length <= 0) {
                        zebra_alert("Thông báo", "Vui lòng nhập tên");
                    } else if (content.length <= 0) {
                        zebra_alert("Thông báo", "Vui lòng nhập nội dung bình luận");
                    } else {
                        $.ajax({
                            type: "post",
                            url: "/ajax/AddReplyComentUser.html",
                            data: {
                                Content: content,
                                UserName: userName,
                                UserEmail: userEmail,
                                UserPhone: userPhone,
                                ProductID: productID,
                                ParentID: parentID,
                                IP: $("#IP").val()
                            },
                            dataType: "json",
                            success: function(data) {
                                var _Content = data.Html;
                                if (_Content == "Login") {
                                    zebra_alert("Thông báo", "Vui lòng nhập nội dung bình luận!")
                                } else if (_Content == "OK") {
                                    zebra_confirm("Thông báo", "Bình luận của bạn đã được gửi tới Quản trị viên. Xin vui lòng tải lại trang để thấy bình luận sau khi được duyệt.")
                                } else {
                                    zebra_alert("Thông báo", "Không có gì!")
                                }
                            },
                            error: function(data) {
                                alert('Đã có lỗi!');
                            }
                        });
                    }
                }

                function regView() {
                    var ProductID = $("#ProductID").val();
                    var NameView = $("#Name_View").val();
                    var PhoneView = $("#Phone_View").val();
                    var AddressView = $("#Address_View").val();
                    $('.loading').show();
                    $.ajax({
                        type: 'GET',
                        url: '/ajax/GetView.html',
                        data: 'ProductID=' + ProductID + "&NameView=" + NameView + "&PhoneView=" + PhoneView + "&AddressView=" + AddressView,
                        dataType: 'json',
                        success: function(data) {
                            var content = data.Html;
                            var param = data.Params;
                            if (param != '') {
                                Swal.fire({
                                    type: 'error',
                                    html: param,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    focusConfirm: false,
                                    confirmButtonText: "OK",
                                })
                            }
                            if (content != '') {
                                //Swal.fire({
                                // type: 'success',
                                // html: content,
                                //})
                                location.href = "/dang-ky-thanh-cong";
                            }
                            $('.loading').hide();
                        },
                        error: function() {}
                    });
                }

                function regCode() {
                    var ProductID = $("#ProductID").val();
                    var NameCode = $("#Name_Code").val();
                    var PhoneCode = $("#Phone_Code").val();
                    var EmailCode = $("#Email_Code").val();
                    $('.loading').show();
                    $.ajax({
                        type: 'GET',
                        url: '/ajax/GetCode.html',
                        data: 'ProductID=' + ProductID + "&NameCode=" + NameCode + "&PhoneCode=" + PhoneCode + "&EmailCode=" + EmailCode,
                        dataType: 'json',
                        success: function(data) {
                            var content = data.Html;
                            var param = data.Params;
                            if (param != '') {
                                Swal.fire({
                                    type: 'error',
                                    html: param,
                                    showCloseButton: true,
                                    showCancelButton: true,
                                    focusConfirm: false,
                                    confirmButtonText: "OK",
                                })
                            }
                            if (content != '') {
                                //Swal.fire({
                                // type: 'success',
                                // html: content,
                                //})
                                location.href = "/dang-ky-thanh-cong";
                            }
                            $('.loading').hide();
                        },
                        error: function() {}
                    });
                }
            </script> -->

<?php }else{ Header("trang-chu.html");} ?>