<?php 
$slug=$_REQUEST['option'];
$post=loadModel('post');
$row=$post->post_rowslug($slug);
$listorther=$post->post_orther($row['post_topid'],$row['post_id'],6);
$title=$row['post_title'];
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
                <div class="wp-right-page">
                    <div class="wp-post-content-ct">
                        <h1 class="h1-title-ct ct-tin"><?php echo $row['post_title']; ?></h1>
                        <p class="p-date-ct"><i class="fas fa-calendar-alt"></i><span><?php echo $row['post_createdat']; ?></span></p>
                        <?php echo $row['post_detail']; ?>
                        <?php require_once('views/modules/lien-he.php'); ?>
                        <div class="wp-iframe-cmt-fb">
                            <img src="Content/pc/images/iframe-fb.jpg" alt="">
                        </div>
                        <div class="wp-tin-lienquan">
                            <div class="wp-title-tin-lq">
                                <h2 class="h2-title">Tin tức liên quan</h2>
                            </div>
                            <div class="content-box-lienquan">
                                <ul class="ul-b list-item-box-lq">
                                	<?php foreach($listorther as $post): ?>
                                    <li>
                                        <div class="img-tin-lq">
                                            <a href="<?php echo $post['post_slug']; ?>.html">
                                                <img src="<?php echo $post['post_img']; ?>" alt="<?php echo $post['post_title']; ?>"></a>
                                        </div>
                                        <div class="text-tin-lq">
                                            <h3 class="h3-title"><a href="<?php echo $post['post_slug']; ?>.html"><?php echo $post['post_title']; ?></a></h3>
                                            <span class="s-date"><?php echo $post['post_createdat']; ?></span>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once('views/modules/product-most.php'); ?>
            </div>
        </div>
    </div>
    <!-- end main content page -->
</section>
<?php require_once('views/footer.php'); ?>