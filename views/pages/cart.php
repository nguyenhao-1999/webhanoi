<?php 
$cart=loadClass('cart');
$cart_list=$cart->cart_content();
if ($cart->count_toltal_product() != 0) :
?>
<?php 
require_once('views/header.php');
?>
	<section class="sec-content-page">
    <div class="wp-bread-page">
        <div class="container">
            <div class="bread-page">
                <ul itemprop="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#" class="breadcrumb">
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url"><span itemprop="title">bepanthinh.com</span></a>
                    </li>
                    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="gio-hang.html" itemprop="url"><span itemprop="title">Giỏ hàng</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end bread page -->
    <div class="wp-banner-page">
        <div class="container">
            <div class="banner-page img-cover">
                <img src="public/upload/images/BannerPage/banner-page.jpg" alt="Giỏ hàng">
            </div>
        </div>
    </div>
    <!-- end banner page -->
    <div class="wp-main-content-page">
        <div class="container">
            <div class="main-content-page">
                <div class="wp-main-content-page">
                    <div class="container">
                        <div class="wp-title-giohang text-center">
                            <h1 class="h1-title"><span>Đơn hàng của bạn</span></h1>
                            <p class="p-giohang1">12/12/2019 7:16:15 CH</p>
                        </div>
                        <?php if(has_flash('thongbao')): ?>
							<?php $tb=get_flash('thongbao'); ?>
							<div class="alert alert-<?php echo $tb['type']; ?>"><?php echo $tb['msg']; ?></div>
						<?php endif; ?>
						<?php if($cart_list!=NULL): ?>
                        <form action="index.php?option=cart&cat=updatecart" method="post">
                        <div class="text-right">
                        	<button type="submit" class="button btn-success" name="CAPNHAT" style="padding: 7px 10px;">Cập nhật giỏ hàng</button>
                        </div>
                        <div class="box-thongtin-sp">
                            <div class="table-responsive">
                                <table cellpadding="5" border="1" bordercolor="#CCCCCC" style="border-collapse: collapse; width: 100%;" id="tbl_list_cart">
                                    <tbody>
                                        <tr style="background-color: #f5f5f5; font-weight: bold; text-transform: uppercase;">
                                            <td>STT</td>
                                            <td>Tên sản phẩm</td>
                                            <td>Giá sản phẩm</td>
                                            <td>Số lượng</td>
                                            <td>Tổng</td>
                                            <td>Xóa</td>
                                        </tr>
                                        <?php $tong=0;$i=0;?>
										<?php foreach($cart_list as $item): ?>
											<tr>
												<td><input type="hidden" name="id[]" value="<?php echo $item['id']; ?>"><?php $i++;echo $i; ?></td>
												<td class="product_cart">
													<img src="public/ResizeImage/images/product/bepanthinh/anhchinh/<?php echo $item['img'];?>" style="vertical-align: middle; margin-right: 10px; float: left; width: 100px;">
													<div style="margin-left: 120px;">
													<a href="https://bepanthinh.com/bep-dien-ket-hop-tu-fagor-i-200ts_273.html" style="text-decoration: none; padding-top: 10px;"><b><?php echo $item['name'];?></b></a>
													<div class="clearfix"></div>
													</div>
												</td>
												<td class="product_cart"><span id="sell_price_pro_25875"><?php echo number_format($item['price']);?></span>VND </td>
												<td>
													<?php 
													$product=loadModel('product');
													$rowproduct=$product->product_rowid($item['id']);
													?>
												<input type="number" name="qty[]"  min="0" max="<?php echo $rowproduct['product_number']; ?>" class="form-control" value="<?php echo $item['qty']; ?>" min="1">
												</td>
												<?php $tien=$item['price']*$item['qty'];
												$tong+=$tien;
												?>
												<td class="product_cart"><b><span id="price_pro_25875"><?php echo number_format($tien);?></td>
												<td>
													<a href="index.php?option=cart&cat=delete&id=<?php echo $item['id']; ?>" class="clickDele" ><i class="fa fa-trash"></i></a>
												</td>
											</tr>
										<?php endforeach;?>
                                        <tr class="itemCart" style="border-bottom: none;">
                                            <td colspan="3" style="text-align: right;">Phí vận chuyển</td>
                                            <td colspan="3" class="red"> <span id="fee-shipping">0</span> VND</td>
                                        </tr>
                                        <tr class="itemCart" style="border-bottom: none;">
                                            <td colspan="3" style="text-align: right;">Phí thu hộ:</td>
                                            <td colspan="3" class="red"><span id="fee-keep">0</span> VND (Phí này có thể thay đổi)</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" style="text-align: right">Mã giảm giả / Quà tặng
                                                <div class="voucher space10px">
                                                    <input class="inputcheckdiscount" type="text" placeholder="Nhập mã giảm giá" id="discount_code" name="coupon_code">
                                                    <a href="javascript:void(0);" class="button button-check-discount" style="padding: 7px 10px">Áp dụng</a>
                                                    <div class="clear"></div>
                                                </div>
                                            </td>
                                            <td colspan="3" style="text-align: left; line-height: 22px; color: #555">Tổng cộng : <span class="sub1 txt_18 red total_value_step" id="total_value"><?php echo number_format($tong); ?></span> VND
                                                <br>
                                                <span id="other-discount">Khuyến mại khi sử dụng code: <span data-discount="0" id="price-discount" class="txt_pink">0</span> VND</span>
                                                <br>
                                                <span>Tổng tiền: <span id="total_shopping_price" class="red" style="font-size: 18px;"><strong><?php echo number_format($tong); ?></strong></span><strong> VND</strong>
                                                </span>
                                                <div class="clear space5px"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>
                        <?php   else: ?>
                            
                    <?php endif; ?>
                    <form action="add-order.html" method="post">
                        <div class="box-form-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><b class="red">Nội dung nhập Bắt buộc(*)</b></p>
                                    <form name="cart_form" id="cart_form" class="form-thongtin">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="hoten">Họ tên*:</label>
                                            <div class="col-md-9">
                                                <input type="text" required class="form-control" name="fullname" id="hoten" value="" placeholder="nhập họ và tên">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="telphone">Số điện thoại*:</label>
                                            <div class="col-md-9">
                                                <input type="text" required class="form-control" name="phone" id="telphone" value="" placeholder="Nhập số điện thoại liên lạc">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="hoten">Địa chỉ nhận hàng*:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="diachi" name="address" value="" placeholder="Địa chỉ cụ thể giao hàng">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3" for="hoten">Ghi chú*:</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="4" placeholder="Ghi chú ..." name="content"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div class="box-phuongthucthanhtoan">
                                        <h5 class="title red mb10"><strong>Phương thức thanh toán*</strong></h5>
                                        <div class="all-payment">
                                            <div class="all-paymet-border">
                                                <div class="payment-method">
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_1" name="type" class="input-radio" type="radio" value="1" checked="checked">
                                                        <label for="payment_method_1">Thanh toán khi nhận hàng - COD </label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Bạn nhận hàng và kiểm tra hàng sau đó mới phải trả tiền </p>
                                                        </div>
                                                    </div>
                                                    <div class="pay-top sin-payment">
                                                        <input id="payment_method_2" name="type" class="input-radio" type="radio" value="0">
                                                        <label for="payment_method_2">Chuyển khoản</label>
                                                        <div class="payment_box payment_method_bacs">
                                                            <p>Qúy khách vui lòng chuyển khoản vào một trong các tài khoản sau:</p>
                                                            <p>( Nội dung chuyển tiền: HỌ TÊN + SỐ ĐIỆN THOẠI + MÃ SẢN PHẨM )</p>
                                                            <p><b>Ngân hàng TMCP Việt Nam Thịnh Vượng - VPbank</b></p>
                                                            <p>
                                                                Chủ tài khoản :Trần Văn A
                                                                <br> Số tài khoản : 52981937
                                                                <br> Chi nhánh: Ngô Quyền - Hà Nội
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt10">
                            	<button type="submit" name="GUI" class="btn btn-danger payoffline choosepayment" rel="nofollow">Gửi đơn hàng</button>
                                <div class="pagination">
                                    <div class="loading"><i class="icon">Loading</i></div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-2285x500x500x4.jpg" alt="Bếp từ munchen GM2285"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-GM-292x500x500x4.jpg" alt="Bếp từ Munchen GM 292"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm6629s_8190x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm6629s_8190x500x500x4.png" alt="Bếp điện từ munchen GM6629S"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/pageimage/beptu hutmui/968mix500x500x4.jpg" src="public/ResizeImage/images/pageimage/beptu%20hutmui/968mix500x500x4.jpg" alt="Bếp Từ Đôi ATG-AH968MI"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-arber-ab-398_6098x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-arber-ab-398_6098x500x500x4.png" alt="Bếp điện từ Arber AB 398"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-arber-ab-396_6097x500x500x4.png" alt="Bếp từ Arber AB 396"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-tu-munchen-gm-8999_5203x500x500x4.png" alt="Bếp từ Munchen GM 8999"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm-6318_5181x500x500x4.png" src="public/ResizeImage/images/product/bepanthinh/anhchinh/bep-dien-tu-munchen-gm-6318_5181x500x500x4.png" alt="Bếp điện từ Munchen GM 6318"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" src="public/ResizeImage/images/product/bep-tu-Munchen-GM-5656x500x500x4.png" alt="Bếp từ Munchen GM 5656"></a>
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
                                                    <img class="owl-lazy" data-src="/public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" src="public/ResizeImage/images/product/bep-tu-munchen-g60bkx500x500x4.jpg" alt="Bếp Từ Munchen G60BK"></a>
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
            </div>
        </div>
    </div>
    <!-- end main content page -->
</section>
	<?php 
    require_once('views/footer.php');
else:
    header('Location:index.html');
endif;
	
	?>