<?php 
$slider=loadModel('slider');
$list_slider=$slider->slider_list();
?>
<section class="sec-01 md-od1">
        <div class="wp-slide-home">
            <div id="slider-home" class="owl-carousel owl-theme">
                <?php foreach($list_slider as $s): ?>
                <div class="item">
                    <div class="wp-img-slider-main">
                        <a href="index.html" target="_blank">
                            <img class="owl-lazy" src="public/upload/files/Slide/<?php echo $s['slider_img']; ?>">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
</section>