<nav class="navbar navbar-expand-lg text-light">
       <a class="navbar-brand text-light" href="index.php">Delta Shoes</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle   navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
         <a class="nav-link" href="index.php">Trang chủ<span class="sr-only">(current)</span></a>
       </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sản phẩm
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=product">Tất cả sản phẩm</a>
          <a class="dropdown-item" href="index.php?option=product&cat=insert">Thêm sản phẩm</a>
          <a class="dropdown-item" href="index.php?option=category">Loại sản phẩm</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bài viết
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=post">Tất cả bài viết</a>
          <a class="dropdown-item" href="index.php?option=post&cat=insert">Thêm bài viết</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trang đơn
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=page">Tất cả trang đơn</a>
          <a class="dropdown-item" href="index.php?option=page&cat=insert">Thêm trang đơn</a>
          <a class="dropdown-item" href="index.php?option=topic">Chủ đề</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Giao diện
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=menu">Menu</a>
          <a class="dropdown-item" href="index.php?option=slider">Slider</a>
          <a class="dropdown-item" href="index.php?option=home">Trang chủ</a>
          <a class="dropdown-item" href="index.php?option=setting">Cài đặt</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thành viên
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=user">Tất cả thành viên</a>
          <a class="dropdown-item" href="index.php?option=user&cat=insert">Thêm mới thành viên</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Khách hàng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?option=customer">Tất cả khách hàng</a>
          <a class="dropdown-item" href="index.php?option=order">Đơn hàng</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="index.php?option=contact" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
          Liên hệ
        </a>
      </li>
    </ul>
    <ul class="navbar account">
      <li><i class="far fa-user-circle"></i> <?php  echo $_SESSION['user_fullname'];?> </li> 
      <li> <i class="fas fa-power-off ml-2"></i><a class="logout" href="logout.php"> Thoát</a></li>
    </ul>
  </div>
</nav>