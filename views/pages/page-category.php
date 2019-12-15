<?php 
$slug=$_REQUEST['option'];
$post=loadModel('post');
$row=$post->post_rowslug($slug,'page');
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
                        <a href="chinh-sach.html" itemprop="url"><span itemprop="title">Chính Sách</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="bao-mat-thong-tin.html" itemprop="url"><span itemprop="title"><?php echo $row['post_title']; ?></span></a>
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
                                <h1 class="h1-title-ct ct-tin"><?php echo $row['post_title']; ?></h1>
                                <p class="p-date-ct"><i class="fas fa-calendar-alt"></i><span><?php echo $row['post_createdat']; ?></span></p>
                                <?php echo $row['post_detail']; ?>
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
<?php require_once('views/footer.php'); ?>