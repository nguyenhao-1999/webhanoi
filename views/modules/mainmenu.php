<?php 
$menu=loadModel('menu');
$listmenu1=$menu->menu_list(0);
?>
<div class="wp-main-menu hidden-sm hidden-xs sticky">
            <div class="container">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding: 0px;">
                        <ul class="nav navbar-nav navbar-left">
                            <?php foreach($listmenu1 as $m1): ?>
                                <?php $listmenu2=$menu->menu_list($m1['menu_id']); ?>
                                 <?php if(count($listmenu2)): ?>
                                    <li class="dropdown">
                                        <a href="<?php echo $m1['menu_link']; ?>.html"><span><?php echo $m1['menu_name']; ?></span></a>
                                        <div class="dropdown-menu">
                                            <div class="wp-submenu">
                                                <div class="row row-edit-0">
                                                    <div class="col-md-7">
                                                        <ul class="ul-b list-submenu">
                                                            <?php foreach($listmenu2 as $m2): ?>
                                                                <li><a href="<?php echo $m2['menu_link']; ?>.html"><?php echo $m2['menu_name']; ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="img-submenu">
                                                            <a href="<?php echo $m1['menu_link']; ?>.html">
                                                                <img src="public/ResizeImage/files/<?php echo $m1['menu_img']; ?>" alt="<?php echo $m1['menu_name']; ?>">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php else:  ?>
                            <li>
                                <a href="<?php echo $m1['menu_link']; ?>.html"><span><?php echo $m1['menu_name']; ?></span></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
       <!-- <div class="backdrop__body-backdrop___1rvky"></div>
        <div class="mobile-main-menu">
            <div class="la-scroll-fix-infor-user">
                <div class="la-nav-menu-items">
                    <h4 class="h4-title">Menu</h4>
                    <ul class="la-nav-list-items ul-b">
                        <li class="ng-scope ">
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="thiet-bi-nha-bep.html">Thiết bị nhà bếp<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="bep-tu.html">Bếp từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="bep-dien-tu.html">Bếp điện từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="may-hut-mui.html">Máy Hút Mùi</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="lo-nuong.html">Lò Nướng</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="may-rua-bat.html">Máy Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="chau-rua-bat.html">Chậu Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="lo-vi-song.html">Lò Vi Sóng</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="voi-rua-bat.html">Vòi Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="bep-dien.html">Bếp điện</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="may-loc-nuoc.html">Máy Lọc Nước</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="lo-hap.html">Lò Hấp</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="bep-hong-ngoai.html">Bếp Hồng Ngoại</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="may-say-bat.html">Máy Sấy Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="bep-gas.html">Bếp Gas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="thiet-ke-tu-bep.html">Tủ bếp<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="tu-bep-go-tu-nhien.html">Tủ Bếp Gỗ Tự Nhiên</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="tu-bep-go-cong-nghiep.html">Tủ Bếp Gỗ Công Nghiệp</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="phu-kien-tu-bep.html">Phụ kiện tủ bếp<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="tu-kho.html">Tủ Kho</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="mam-xoay.html">Mâm Xoay</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="ke-goc-lien-hoan.html">Kệ Góc Liên Hoàn</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="gia-xoong-noi-bat-dia.html">Giá Xoong Nồi Bát Đĩa</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="ke-dao-thot-gia-vi.html">Kệ Dao Thớt Gia Vị</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="thung-gao.html">Thùng Gạo</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="thung-rac.html">Thùng Rác</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="ray-truot-ngan-keo.html">Ray Trượt Ngăn Kéo</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="khay-chia-thia-dia.html">Khay Chia Thìa Dĩa</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="phu-kien-treo-ngoai.html">Phụ Kiện Treo Ngoài</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="phu-kien-quay-bar.html">Phụ Kiện Quầy Bar</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="tay-nang-canh-tu.html">Tay Nâng Cánh Tủ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="tay-nam-tu-bep.html">Tay Nắm Tủ Bếp</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="ban-le.html">Bản Lề</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="den-led-tu-bep-tu-ao.html">Đèn Led Tủ Bếp Tủ Áo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="quat-tran-den.html">Quạt trần đèn<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-canh-cup-xoe.html">Quạt Trần Cánh Cụp Xòe</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-khong-den.html">Quạt Trần Không Đèn</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-canh-la.html">Quạt Trần Cánh Lá</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-phong-tre-em.html">Quạt Trần Phòng Trẻ Em</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-cho-tran-thap.html">Quạt Cho Trần Thấp</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-canh-nhua.html">Quạt Trần Cánh Nhựa</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-canh-kim-loai.html">Quạt Trần Cánh Kim Loại</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="quat-tran-canh-ngan.html">Quạt Trần Cánh Ngắn</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="do-gia-dung.html">Đồ gia dụng<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="bo-noi-bep-tu.html">Bộ Nồi Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="chao-bep-tu.html">Chảo Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="am-dun-nuoc-bep-tu.html">Ấm Đun Nước Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="noi-ap-suat-bep-tu.html">Nồi Áp Suất Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="noi-hap-bep-tu.html">Nồi Hấp Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="noi-luoc-ga-bep-tu.html">Nồi Luộc Gà Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="noi-quay-bot-bep-tu.html">Nồi Quấy Bột Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="vien-rua-bat.html">Viên Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="muoi-rua-bat.html">Muối Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="bot-rua-bat.html">Bột Rửa Bát</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="nuoc-lam-bong.html">Nước Làm Bóng</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="dung-dich-ve-sinh-bep-tu.html">Dung Dịch Vệ Sinh Bếp Từ</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="dao-ve-sinh-bep-tu.html">Dao Vệ Sinh Bếp Từ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ng-scope ">
                            <a href="khuyen-mai.html">Khuyến mãi</a>
                        </li>
                        <li class="ng-scope ng-has-child1">
                            <a href="thuong-hieu.html">Thương hiệu<i class="fa fa-plus fa1" aria-hidden="true"></i></a>
                            <ul class="ul-has-child1 ul-b">
                                <li class="ng-scope ng-has-child2">
                                    <a href="bosch.html">Bosch</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="chefs.html">Chefs</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="teka.html">Teka</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="brandt.html">Brandt</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="elica.html">Elica</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="hafele.html">Hafele</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="fagor.html">Fagor</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="malloca.html">Malloca</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="canzy.html">Canzy</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="giovani.html">Giovani</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="faster.html">Faster</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="cata.html">Cata</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="faber.html">Faber</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="binova.html">Binova</a>
                                </li>
                                <li class="ng-scope ng-has-child2">
                                    <a href="sevilla.html">Sevilla</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="ul-b mobile-support">
                <li>
                    <div class="drawer-text-support">HỖ TRỢ</div>
                </li>
                <li>
                    <i class="fas fa-phone-volume"></i>HOTLINE: <a href="tel:0913 14 1368">0913 14 1368</a>
                </li>
            </ul>
        </div>-->
    </div>