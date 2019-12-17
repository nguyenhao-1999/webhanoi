<?php
$category=loadModel('category');
$slug=$_REQUEST['option'];
$listrow=$category->category_rowslug($slug);
$listrow['category_id'];
$rowtrademark=$category->category_trademark($listrow['category_id']);
$rowparentid=$category->category_rowid($listrow['category_parentid']);
if($rowtrademark['category_trademark']!=0)
{
    $listid=$category->category_parentid($rowtrademark['category_parentid'],$listrow['category_id']);
}
else
{
    $listid=$category->category_parentid($listrow['category_id']);
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
                    <?php if($rowparentid!=null): ?>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $rowparentid['category_slug']; ?>.html" itemprop="url"><span itemprop="title"><?php echo $rowparentid['category_name']; ?></span></a>
                    </li>
                    <?php endif; ?>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="<?php echo $listrow['category_slug']; ?>.html" itemprop="url"><span itemprop="title"><?php echo $listrow['category_name']; ?></span></a>
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
                            <div class="wp-title-ct-sp">
                                <h1 class="h1-title"><?php echo $listrow['category_name']; ?></h1>
                            </div>
                            <div class="wp-list-item-danhmuc">
                                <div class="row">
                                    <?php foreach($listid as $row): ?>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <div class="wp-item-danhmuc">
                                            <div class="img-danhmuc img-cover">
                                                <a href="<?php echo $row['category_slug']; ?>.html">
                                                    <img src="<?php echo $row['category_img']; ?>" alt="Bếp từ" />
                                                </a>
                                            </div>
                                            <div class="text-danhmuc">
                                                <h2 class="h2-title-dm"><a href="<?php echo $row['category_slug']; ?>.html"><?php echo $row['category_name']; ?></a></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 fl-left">
                        <?php require_once('views/modules/slidebar.php'); ?>
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
                                <a href="bep-tu-munchen-gm2285_8356.html">
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" alt="Bếp từ munchen GM2285"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" alt="Bếp từ Munchen GM 292"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm6629s_8190x500x500x4.png" alt="Bếp điện từ munchen GM6629S"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/pageimage/beptu%20hutmui/968mix500x500x4.jpg" alt="Bếp Từ Đôi ATG-AH968MI"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-arber-ab-398_6098x500x500x4.png" alt="Bếp điện từ Arber AB 398"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" alt="Bếp từ Arber AB 396"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" alt="Bếp từ Munchen GM 8999"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm-6318_5181x500x500x4.png" alt="Bếp điện từ Munchen GM 6318"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" alt="Bếp từ Munchen GM 5656"></a>
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
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" alt="Bếp Từ Munchen G60BK"></a>
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
<?php require_once('views/footer.php'); ?>