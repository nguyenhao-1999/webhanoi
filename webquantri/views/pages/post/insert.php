<?php 
$topic=loadModel('topic');
$listpost=$topic->topic_list('index');
$html_topid='';
foreach($listpost as $cat)
{
  $html_topid.="<option value='".$cat['topic_id']."'>".$cat['topic_name']."</option>";
}
$title="Thêm bài viết";
?>

<?php require_once 'views/header.php'; ?>







  <?php require_once 'views/footer.php'; ?>