<?php 
$order=loadModel('order');
$list_order=$order->order_list();
$user=loadModel('user');
$list_user=$user->user_list('index',0);
$contact=loadModel('contact');
$list_contact=$contact->contact_list();
?>
<?php require_once 'views/header.php'; ?>
<section class="clearfix">
  <div class="container-fluid">
<div class="row mt-3">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><?php echo count($list_contact); ?> Liên hệ mới!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?option=contact">
                <span class="float-left">Xem chi tiết</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="far fa-user-circle"></i>
                </div>
                <div class="mr-5"><?php echo count($list_user); ?> Khách hàng mới</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?option=customer">
                <span class="float-left">Xem chi tiết</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><?php echo count($list_order); ?> Đơn hàng mới!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="index.php?option=order">
                <span class="float-left">Xem chi tiết</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">Xem chi tiết</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
      </section>
<?php require_once 'views/footer.php'; ?>