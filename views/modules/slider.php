<?php 
$slider=loadModel('slider');
$list_slider=$slider->slider_list();
$d=1;
?>
<section class="sec-01 md-od1">
        <div class="wp-slide-home">
            <div id="slider-home" class="owl-carousel owl-theme">
                <?php foreach($list_slider as $s): ?>
                    <?php if($d==1): ?>
                <div class="item active">
                    <div class="wp-img-slider-main">
                        <a href="index.html" target="_blank">
                            <img class="owl-lazy" src="public/upload/files/Slide/<?php echo $s['slider_img']; ?>" style="opacity: 1">
                        </a>
                    </div>
                </div>
                <?php else: ?>
                <div class="item">
                    <div class="wp-img-slider-main">
                        <a href="index.html" target="_blank">
                            <img class="owl-lazy" src="public/upload/files/Slide/<?php echo $s['slider_img']; ?>" style="opacity: 1">
                        </a>
                    </div>
                </div>
                <?php endif; ?>
                <?php $d++; ?>
            <?php endforeach; ?>
            </div>
        </div>
</section>