<?php 
require_once('views/header.php');
?>
    <?php require_once('views/modules/slider.php'); ?>
<?php
require_once('views/footer.php'); 
?>
<div class="modal banner" id="modal-banner" style="top: 40px">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <a href="khuyen-mai-7-ngay-vang-gia-soc.html">
                        <img src="public/upload/images/Banner%20khuy%e1%ba%bfn%20m%e1%ba%a1i/BANNER%c4%90%e1%ba%a6UTRANG_optimized.jpg" alt="Bếp An Thịnh Khuyến Mãi"></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var modal = $(".banner");
            modal.show();
        });
        $('.close').click(function() {
            var modal = $(".banner");
            modal.hide();
        })
    </script>