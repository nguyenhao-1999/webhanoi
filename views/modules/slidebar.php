<?php
    $category=loadModel('category');
    $topic=loadModel('topic');
    $post=loadModel('post');
    $slug=$_REQUEST['option'];
    $rowcat=$category->category_rowslug($slug);
    $rowtop=$topic->topic_rowslug('kinh-nghiem-hay');
    $atopic=$topic->topic_listid($rowtop['topic_id']);
    $listpost=$post->post_topicid($atopic,0,5); 
?>
    <?php if($rowcat==null): ?>
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
                 <?php foreach($listpost as $rowpost): ?>
                <li>
                    <div class="img-exp-sb">
                        <a href="<?php echo $rowpost['post_slug']; ?>.html">
                            <img src="<?php echo $rowpost['post_img']; ?>" alt="<?php echo $rowpost['post_title']; ?>"></a>
                    </div>
                    <div class="text-exp-sb">
                        <h3 class="h3-title"><a href="<?php echo $rowpost['post_slug']; ?>.html"><?php echo $rowpost['post_title']; ?></a></h3>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php else: ?>
     <div class="box-sidebar box-exp hidden-xs">
        <div class="wp-title-sidebar">
            <h2 class="h2-title"><a href="kinh-nghiem-hay.html">Kinh nghiệm mua <?php echo $rowcat['category_name']; ?></a></h2>
        </div>
        <div class="content-box box-2">
            <ul class="ul-b list-item-box">
                 <?php foreach($listpost as $rowpost): ?>
                <li>
                    <div class="img-exp-sb">
                        <a href="<?php echo $rowpost['post_slug']; ?>.html">
                            <img src="<?php echo $rowpost['post_img']; ?>" alt="<?php echo $rowpost['post_title']; ?>"></a>
                    </div>
                    <div class="text-exp-sb">
                        <h3 class="h3-title"><a href="<?php echo $rowpost['post_slug']; ?>.html"><?php echo $rowpost['post_title']; ?></a></h3>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>   
    <div class="box-sidebar box-phongthuy hidden-xs">
        <div class="wp-title-sidebar">
            <h2 class="h2-title"><a href="phong-thuy-nha-bep.html">Phong thủy nhà bếp</a></h2>
        </div>
        <div class="content-box">
            <ul class="ul-b list-item-box">
                <?php $slug='phong-thuy-nha-bep';
                    $phongthuy=$topic->topic_rowslug($slug);
                    $pttopic=$topic->topic_listid($phongthuy['topic_id']);
                    $listpt=$post->post_topicid($pttopic,0,5); 
                 ?>
                 <?php foreach($listpt as $rowpt): ?>
                <li>
                    <div class="img-exp-sb">
                        <a href="<?php echo $rowpt['post_slug']; ?>.html">
                            <img src="Data/ResizeImage/images/<?php echo $rowpt['post_img']; ?>" alt="<?php echo $rowpt['post_title']; ?>"></a>
                    </div>
                    <div class="text-exp-sb">
                        <h3 class="h3-title"><a href="<?php echo $rowpt['post_slug']; ?>.html"><?php echo $rowpt['post_title']; ?></a></h3>
                    </div>
                </li>
                <?php endforeach; ?>
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
                        <a href="#"><img src="publicimages/icon-sp1.png" alt=""></a>
                    </div>
                    <div class="text-avt">
                        <h3 class="h3-title">Kinh Doanh Hà Nội</h3><span>0913 14 1368</span></div>
                </li>
                <li class="item-avt-sp">
                    <div class="img-avt">
                        <a href="#"><img src="publicimages/icon-sp1.png" alt=""></a>
                    </div>
                    <div class="text-avt">
                        <h3 class="h3-title">Kinh Doanh HCM</h3><span>0888 34 1368</span></div>
                </li>
                <li class="item-avt-sp">
                    <div class="img-avt">
                        <a href="#"><img src="publicimages/icon-sp1.png" alt=""></a>
                    </div>
                    <div class="text-avt">
                        <h3 class="h3-title">Góp Ý Dịch Vụ</h3><span>0914 03 1368</span></div>
                </li>
            </ul>
        </div>
    <!-- end box tu van -->