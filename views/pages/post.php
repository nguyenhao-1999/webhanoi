<?php
$slug=$_REQUEST['option'];
$post=loadModel('post');
$topic=loadModel('topic');
$rowtopic=$topic->topic_rowslug($slug);
$rowlist=$topic->topic_listid($rowtopic['topic_id']);
$pt=loadClass('phantrang');
$limit=8;
$current=$pt->pageCurrent();
$first=$pt->pageFirst($current,$limit);
$total=$post->post_topic_count_atopic($rowlist);
$list=$post->post_topicid($rowlist,$first,$limit);
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
                        <a href="kinh-nghiem-hay.html" itemprop="url"><span itemprop="title">Kinh nghiệm hay</span></a>
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
                            <div class="wp-list-tin-page">
                            	<?php foreach($list as $row): ?>
                                <div class="wp-item-tin-page">
                                    <div class="img-item-tin-page">
                                        <a href="<?php echo $row['post_slug']; ?>.html" title="<?php echo $row['post_title']; ?>">
                                            <img src="<?php echo $row['post_img']; ?>" alt="<?php echo $row['post_title']; ?>" />
                                        </a>
                                    </div>
                                    <div class="text-item-tin-page">
                                        <h3 class="h3-title"><a href="<?php echo $row['post_slug']; ?>.html" title="<?php echo $row['post_title']; ?>"><?php echo $row['post_title']; ?></a></h3>
                                        <p class="p-date"><i class="fas fa-calendar-alt"></i><span><?php echo $row['post_createdat']; ?></span></p>
                                        <p class="p-post"><?php echo str_limit($row['post_detail'],220); ?></p>
                                        <div class="btn-xem-them">
                                            <a href="<?php echo $row['post_slug']; ?>.html" class="btn btn-default xem-them">Xem thêm <i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                 <?php endforeach; ?>
                            </div>
                            <div class="text-center mt10">
                                <ul class="pagination not-ajax">
                                    <?php echo $pt->pageLink($total,$current,$limit,$rowtopic['topic_slug'].'.html'); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 fl-left">
                    <?php require_once('views/modules/slidebar.php'); ?>
                	</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content page -->
</section>
<?php require_once('views/modules/product-most.php'); ?>
<?php require_once('views/footer.php'); ?>