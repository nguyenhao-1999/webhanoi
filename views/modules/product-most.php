<?php 
$orderdetail=loadModel('orderdetail');
$product=loadModel('product');
$listproduct=$product->product_list();
$id=array();
foreach($listproduct as $row)
{
    $listorderdetail=$orderdetail->orderdetail_count_product($row['product_id']);
    if($listorderdetail!=null)
    {
        $id[]=$listorderdetail['orderdetail_productid'];
    }
}
$list=$product->product_most($id);

 ?>
<section class="sec-00 sec-sp-muanhieu">
    <div class="container">
        <div class="wp-sec-sanpham wp-sanpham-muanhieu">
            <div class="wp-title-sp">
                <h2 class="h2-title"><a href="http://bepanthinh.akr.vn/san-pham-ban-chay.html">Sản phẩm được mua nhiều nhất</a></h2>
            </div>
            <div class="wp-list-sp">
                <div id="" class="slide-sp owl-carousel owl-theme">
                    <?php foreach($list as $row): ?>
                    <div class="item">
                        <div class="wp-item-sp-page">
                            <div class="img-item-sp-page">
                                <a href="<?php echo $row['product_slug']; ?>.html">
                                    <img class="owl-lazy" src="public/ResizeImage/images/product/<?php echo $row['product_img']; ?>" alt="<?php echo $row['product_name']; ?>"></a>
                            </div>
                            <div class="text-item-sp-page">
                                <h3 class="h3-title"><a href="<?php echo $row['product_slug']; ?>.html"><?php echo $row['product_name']; ?></a></h3>
                                <div class="price">
                                    <span class="s-dell"><?php echo number_format($row['product_price']); ?><sup>đ</sup></span>
                                    <span class="s-ins"><?php echo number_format($row['product_pricesale']); ?><sup>đ</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>