<?php  
$option = loadModel('option');
$phone = $option->get_field(["option_name" => 'phone', 'menu_status' => 1]);
$address = $option->get_field(["option_name" => 'address', 'menu_status' => 1]);
$copyrighter = $option->get_field(["option_name" => 'copyrighter', 'menu_status' => 1]);
// mãng xã hội
$zalo = $option->get_field(["option_name" => 'zalo', 'menu_status' => 1]);
$facebook = $option->get_field(["option_name" => 'facebook', 'menu_status' => 1]);
$youtube = $option->get_field(["option_name" => 'youtube', 'menu_status' => 1]);
$messenger = $option->get_field(["option_name" => 'messenger', 'menu_status' => 1]);
$gmail = $option->get_field(["option_name" => 'gmail', 'menu_status' => 1]);
$cuongthuong = $option->get_field(["option_name" => 'cuongthuong', 'menu_status' => 1]);
//Giới thiệu / Chính sách / Ưu đãi / Tuyển dụng
$header_get_post = $option->get_field(["option_name" => 'header_get_post', 'menu_status' => 1]);
$header_get_post_j  = json_decode( $header_get_post["option_value"] );
$get_post_by_id = $post->get_post_by_id($header_get_post_j);
// lấy ra logo
?>

<section class="sec-14 md-od15">
    <div class="container">
        <div class="wp-dangky">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="wp-title-dk">
                        <h2 class="h2-title">Đăng ký ngay!</h2>
                        <p>Nhận Mã Giảm Giá <span class="int-giamgia">1.000.000</span> khi mua hàng tại Bếp Quang Vinh</p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="wp-form-dk">
                        <form>
                            <div class="form-dk">
                                <input type="text" id="EmailRegister" name="cwEmail" placeholder="Nhập địa chỉ email" class="form-control">
                                <button type="button" class="btn btn-default btn-submit" id="customemail">ĐĂNG KÝ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end sec 14 -->
</main>
<!-- end main -->
<footer id="footer-site">
    <!-- back to top -->
    <div class="back-tt">
        <a href="#" id="back-to-top" title="Back to top" class="show"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <!-- end back to top -->
    <div class="wp-footer-top">
        <div class="container">
            <div class="box-ft2">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="wp-ft2">
                           <div class="wp-ft">
                            <h3 class="h3-title"><i class="fas fa-map-marker-alt"></i><span>Địa chỉ liên hệ</span></h3>
                            <p class="p-ft"><b>Địa chỉ:</b><?php echo $address["option_value"]; ?></p>
                            <p class="p-ft"><b>Hotline:</b> <?php echo $phone["option_value"]; ?></p>
                            <hr style="color: #fff;">
                            <h3 class="h3-title"><i class="fas fa-info-circle"></i>&nbsp;<span>Hỗ trợ</span></h3>
                            <?php foreach ($get_post_by_id as $key => $jh):  ?>
                                <li><a href="<?php echo $jh['post_slug'] ?>.html"><?php echo $jh['post_title'] ?></a></li>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="wp-ft2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3315468594988!2d105.82941431440719!3d21.01941599347434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab82de00b9e1%3A0x69820c73a6ef445e!2zMzc0IEtow6JtIFRoacOqbiwgVGjhu5UgUXVhbiwgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1576557383912!5m2!1svi!2s" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="wp-ft2">
                        <h3 class="h3-title"><i class="fas fa-wifi"></i> &nbsp; &nbsp;<span>Kết nối với chúng tôi</span></h3>
                        <p>
                            <a href="<?php echo $cuongthuong["option_value"]; ?>"><img class="bct" src="public/images/bct.png" alt=""></a>
                        </p>
                        <ul class="ul-b list-mxh-ft">
                            <li>
                                <a href="<?php echo $zalo["option_value"]; ?>">
                                    <img src="public/images/mxh1.png" alt="Link_Zalo"></a>
                                </li>
                                <li>
                                    <a href="<?php echo $facebook["option_value"]; ?>">
                                        <img src="public/images/mxh2.png" alt="Link_Facebook"></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $youtube["option_value"]; ?>">
                                            <img src="public/images/mxh3.png" alt="Link_Youtube"></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $messenger["option_value"]; ?>">
                                                <img src="public/images/mxh4.png" alt="Link_Messenger"></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $gmail["option_value"]; ?>">
                                                    <img src="public/images/mxh5.png" alt="Link_Gmail"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wp-footer-bottom text-center">
                        <div class="container">
                            <span class="text-bottom"><?php echo $copyrighter["option_value"]; ?></span>
                        </div>
                    </div>
                    <!-- cac modal popup bo sung -->
                    <div class="modal fade" id="modal-danhgia">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="wp-content-danhgia">
                                        <div class="row">
                                            <div class="col-md-5 hidden-sm hidden-xs">
                                            </div>
                                            <div class="col-md-7 col-sm-12 col-xs-12">
                                                <div class="wp-form-dk-popup">
                                                    <h3 class="h3-title">Đánh giá chất lượng phục vụ</h3>
                                                    <form method="post" id="review_bepanthinh" enctype="multipart/form-data">
                                                        <div class="form-dk-popup">
                                                            <p class="p1">Nhận xét của quý khách là thông tin quan trọng để An Thịnh nâng cao chất lượng phục vụ</p>
                                                            <input type="text" name="Name" class="form-control" placeholder="Họ và tên">
                                                            <input type="text" name="Phone" class="form-control" placeholder="Số điện thoại">
                                                            <input type="email" name="Email" class="form-control" placeholder="Email">
                                                            <textarea class="form-control" name="Content" id="" rows="5" placeholder="Quý khách có thể giúp chúng tôi chứng nhận về: Chất lượng sản phẩm, thái độ phục vụ, dịch vụ khách hàng..."></textarea>
                                                            <p class="p2">Ảnh chân dung quý khách</p>
                                                            <p>Vui lòng cung cấp một ảnh chân dung hoặc ảnh avatar facebook của quý khách</p>
                                                            <input type="file" name="File" id="File" class="input-file">
                                                            <input class="btn btn-danger" type="submit" name="_vsw_action[CStatic-ReviewPost-Copyright]" value="GỬI ĐÁNH GIÁ ">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!--  Thông báo -->
                    <div id="cwMessage" class="swal2-container swal2-center swal2-fade swal2-shown" style="overflow-y: auto; display: none;">
                        <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex; top: 30%;">
                            <div class="swal2-header">
                                <img align="center" id="show-img" style="width: 30px;" src="public/images/thongbao.png">
                                <button type="button" class="swal2-close cwButtonClose" aria-label="Close this dialog" style="display: flex;">×</button>
                            </div>
                            <div class="swal2-content">
                                <div id="swal2-content" style="display: block;">

                                    vjgjg
                                </div>
                            </div>
                            <div class="swal2-actions" style="display: flex;">
                                <button type="button" class="swal2-confirm swal2-styled cwButtonClose" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button>
                            </div>
                            <div class="swal2-footer" style="display: none;"></div>
                        </div>
                    </div>
                    <!--  Thông báo -->
                </footer>
                <script src="public/js/jquery.min.js"></script>
                <script type="text/javascript" src="public/js/owl.carousel.js"></script>
                <script type="text/javascript" src="public/js/script.js"></script> 
            </body>
            </html>


