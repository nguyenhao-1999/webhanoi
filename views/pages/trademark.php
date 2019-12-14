<?php 
$category=loadModel('category');
$slug=$_REQUEST['url'];
$listrow=$category->category_rowslug($slug);
$listrow['category_id'];
$rowparentid=$category->category_rowid($listrow['category_parentid']);
$listid=$category->category_parentid($listrow['category_id']);
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
                    <a href="thuong-hieu.html" itemprop="url"><span itemprop="title">Thương hiệu</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- end bread page -->
<div class="wp-banner-page">
    <div class="container">
        <div class="banner-page img-cover">
            <img src="public/upload/images/BannerPage/banner-page.jpg" alt="Thương hiệu">
        </div>
    </div>
</div>
<!-- end banner page -->
<div class="wp-main-content-page">
    <div class="container">
        <div class="main-content-page">
            <div class="main-content-page content-nsx">
                <div class="wp-title-h1-page">
                    <h1 class="h1-title">DANH SÁCH CÁC HÃNG SẢN XUẤT THIẾT BỊ NHÀ BẾP HÀNG ĐẦU</h1>
                </div>
                <div class="post-content-npp">
                    <div class="row">
                        <?php foreach($listid as $item): ?>
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <div class="wp-item-npp">
                                <a href="<?php echo $item['category_slug'] ?>.html">
                                    <img src="public/ResizeImage/files/<?php echo $item['category_img']; ?>" alt="<?php echo $item['category_name']; ?>"></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
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
                                            <a href="bep-tu-munchen-gm2285_8356.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" alt="Bếp từ munchen GM2285"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-munchen-gm2285_8356.html">Bếp từ munchen GM2285</a></h3>
                                            <div class="price">
                                                <span class="s-dell">18.500.000</span>
                                                <span class="s-ins">16.675.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-munchen-gm-292_8192.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" alt="Bếp từ Munchen GM 292"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-munchen-gm-292_8192.html">Bếp từ Munchen GM 292</a></h3>
                                            <div class="price">
                                                <span class="s-dell">19.100.000</span>
                                                <span class="s-ins">17.200.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-dien-tu-munchen-gm6629s_8190.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm6629s_8190x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm6629s_8190x500x500x4.png" alt="Bếp điện từ munchen GM6629S"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-dien-tu-munchen-gm6629s_8190.html">Bếp điện từ munchen GM6629S</a></h3>
                                            <div class="price">
                                                <span class="s-dell">23.300.000</span>
                                                <span class="s-ins">21.200.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-doi-atg-ah968mi_7780.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/pageimage/beptu hutmui/968mix500x500x4.jpg" src="public/ResizeImage/images/pageimage/beptu%20hutmui/968mix500x500x4.jpg" alt="Bếp Từ Đôi ATG-AH968MI"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-doi-atg-ah968mi_7780.html">Bếp Từ Đôi ATG-AH968MI</a></h3>
                                            <div class="price">
                                                <span class="s-dell">19.000.000</span>
                                                <span class="s-ins">15.900.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-dien-tu-arber-ab-398_6098.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-arber-ab-398_6098x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-arber-ab-398_6098x500x500x4.png" alt="Bếp điện từ Arber AB 398"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-dien-tu-arber-ab-398_6098.html">Bếp điện từ Arber AB 398</a></h3>
                                            <div class="price">
                                                <span class="s-dell">18.950.000</span>
                                                <span class="s-ins">8.700.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-arber-ab-396_6097.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" alt="Bếp từ Arber AB 396"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-arber-ab-396_6097.html">Bếp từ Arber AB 396</a></h3>
                                            <div class="price">
                                                <span class="s-dell">17.850.000</span>
                                                <span class="s-ins">10.500.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-munchen-gm-8999_5203.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" alt="Bếp từ Munchen GM 8999"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-munchen-gm-8999_5203.html">Bếp từ Munchen GM 8999</a></h3>
                                            <div class="price">
                                                <span class="s-dell">22.500.000</span>
                                                <span class="s-ins">20.475.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-dien-tu-munchen-gm-6318_5181.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm-6318_5181x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm-6318_5181x500x500x4.png" alt="Bếp điện từ Munchen GM 6318"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-dien-tu-munchen-gm-6318_5181.html">Bếp điện từ Munchen GM 6318</a></h3>
                                            <div class="price">
                                                <span class="s-dell">23.500.000</span>
                                                <span class="s-ins">20.250.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-munchen-gm-5656_5158.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" src="public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" alt="Bếp từ Munchen GM 5656"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-munchen-gm-5656_5158.html">Bếp từ Munchen GM 5656</a></h3>
                                            <div class="price">
                                                <span class="s-dell">22.500.000</span>
                                                <span class="s-ins">20.475.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wp-item-sp-page">
                                        <div class="img-item-sp-page">
                                            <a href="bep-tu-munchen-g60bk_468.html">
                                                <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" alt="Bếp Từ Munchen G60BK"></a>
                                        </div>
                                        <div class="text-item-sp-page">
                                            <h3 class="h3-title"><a href="bep-tu-munchen-g60bk_468.html">Bếp Từ Munchen G60BK</a></h3>
                                            <div class="price">
                                                <span class="s-dell">17.300.000</span>
                                                <span class="s-ins">15.535.000</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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