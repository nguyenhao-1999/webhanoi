<?php if(has_flash('thongbao')): ?>
	<?php $tb=get_flash('thongbao'); ?>
    <div class="alert alert-<?php echo $tb['type']; ?>"><?php echo $tb['msg']; ?></div>
 <?php endif; ?>