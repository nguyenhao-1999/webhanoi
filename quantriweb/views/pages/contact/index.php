<?php  
$contact = loadModel('contact');
$category = loadModel('category');
$list = $contact->contact_list();
$title="Danh sách liên hệ";
$traloi = ['', 'Trả lời', 'Đã trả lời'];
?>
<?php include_once 'views/header.php'; ?>

<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo $title; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php?option=contact&cat=trash">Thùng rác</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Danh sách Liên hệ</strong>
                    </div>
                    <?php require_once('views/message.php'); ?>
                    <div class="card-body">
                        <table id="datatables" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên người gửi</th>
                                    <th>Email</th>
                                    <th>Tiêu đề liên hệ</th>
                                    <th>Trả lời, xóa liên hệ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($list) : foreach ($list as $key => $row): 
                                    $status = $row['contact_status'];
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="index.php?option=contact&update=<?php echo $row["contact_id"] ?>">
                                                <?php echo $row["contact_fullname"] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?option=contact&update=<?php echo $row["contact_id"] ?>"><?php echo $row["contact_email"] ?>
                                        </a>
                                    </td>
                                    <td><?php echo $row["contact_title"] ?></td>
                                    <td>
                                        <a class="btn btn-info mx-3" href="index.php?option=contact&cat=update&id=<?php echo $row["contact_id"] ?>"><?php echo $traloi[$status]; ?>
                                    </a>
                                    <a class="btn btn-info mx-3" onclick="return confirm('Bạn có muốn xóa ?')" href="index.php?option=contact&cat=deltrash&id=<?php echo $row["contact_id"] ?>"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;  endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
</div><!-- .animated -->
</div><!-- .content -->

<style>
    #datatables-contact td {
        text-align: center;
        vertical-align: middle;
    }
</style>

<?php include_once 'views/footer.php'; ?>