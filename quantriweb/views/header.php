<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo ($title !== "")?$title:'Trang quản trị'; ?></title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="../public/admin/assets/css/normalize.min.css">
    <link rel="stylesheet" href="../public/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/admin/fontawesome/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../public/admin/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../public/admin/assets/css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="../public/admin/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../public/admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../public/admin/assets/css/style.css">
    <link href="../public/admin/assets/css/chartist.min.css" rel="stylesheet">
    <link href="../public/admin/assets/css/jqvmap.min.css" rel="stylesheet">
    <link href="../public/admin/datatables/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../public/admin/assets/css/weather-icons.css" rel="stylesheet" />
    <link href="../public/admin/assets/css/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <?php include_once 'modules/mainmenu.php'; ?>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../public/images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../public/images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Tìm ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../public/images/user/<?php echo $_SESSION['user_img']; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="index.php?option=user&cat=update&id=<?php echo $_SESSION['user_id']; ?>"><i class="fa fa -cog"></i>Thông tin cá nhân</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Thoát</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->