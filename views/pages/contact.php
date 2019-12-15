<?php 

$contact=loadModel('contact');
$title="Liên hệ";
if(isset($_POST['THUCHIEN']))
{
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        $data=array(
        'contact_fullname'=>$_POST['fullname'],
        'contact_email'=>$_POST['email'],
        'contact_phone'=>$_POST['phone'],
        'contact_gender'=>$_POST['gioitinh'],
        'contact_createdat'=>date('Y-m-d H:i:s'),
        'contact_updatedat'=>date('Y-m-d H:i:s'),
        'contact_updatedby'=>1,
        'contact_status'=>1
        );
        $contact->contact_insert($data);
    }
    else
    {
        redirect('index.php?option=contact');
        echo '<script language="javascript">';
        echo 'alert("Địa chỉ email của bạn chưa chính xác!!!")';
        echo '</script>';
    }
    
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
                        <a href="thong-tin-cong-ty.html" itemprop="url"><span itemprop="title">Thông Tin Công Ty</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="lien-he.html" itemprop="url"><span itemprop="title">Thông Tin Liên Hệ</span></a>
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
                                <h1 class="h1-title-ct ct-tin">Thông Tin Liên Hệ</h1>
                                <p class="p-date-ct"><i class="fas fa-calendar-alt"></i><span>08/08/2019 2:15:33 CH</span></p>
                                <p><span style="font-size:26px;"><strong>SIÊU THỊ BẾP AN THỊNH</strong></span></p>
                                <p><span style="color:#FF0000;">CN Hà Nội: 374 Khâm Thiên, Đống Đa, HN</span></p>
                                <p>Hotline: 0913.14.1368 - 024.3379.1368</p>
                                <p><span style="color:#FF0000;">CN HCM: 358 Hoàng Văn Thụ, Tân Bình, HCM</span></p>
                                <p>Hotline: 0888.34.1368 - 0914.03.1368</p>
                                <p>Email: sieuthibep.anthinh@gmail.com</p>
                                <?php require_once('views/modules/lien-he.php'); ?>
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
                                    <img class="owl-lazy"  src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" alt="Bếp từ Arber AB 396"></a>
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