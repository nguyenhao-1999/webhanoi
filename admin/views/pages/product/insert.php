<?php 
$category=loadModel('category');
$listcategory=$category->category_list('index');
$listtrademark=$category->category_trademark('index');
$html_catid='';
foreach($listcategory as $cat)
{
  $html_catid.="<option value='".$cat['category_id']."'>".$cat['category_name']."</option>";
}
foreach($listtrademark as $cat)
{
  $html_trademark.="<option value='".$cat['category_id']."'>".$cat['category_name']."</option>";
}
$title="Thêm sản phẩm";
?>

<?php require_once 'views/header.php'; ?>
<section class="clearfix maincontent" >	
 <div class="container-fluid">
  <form action="index.php?option=product&cat=process" method="post" enctype="multipart/form-data">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6"><h3><?php echo $title; ?></h3></div>	
          <div class="col-md-6 text-right">	
            <button class="btn btn-sm btn-success" name="THEM" type="submit"><i class="fas fa-save"></i>Lưu</button>
            <a href="index.php?option=product" class="btn btn-sm btn-danger"><i class="fas fa-arrow-left"></i> Thoát</a>
          </div>	
        </div>
      </div>
      <div class="card-block p-3">
          <?php require_once('views/message.php'); ?>
        <div class="row">
          <div class="col-md-9">
            <fieldset class="form-group">
              <label for="tensp">Tên sản phẩm</label>
              <input type="text" name="name" class="form-control" id="tensp" required placeholder="Tên sản phẩm">
            </fieldset>
            <fieldset class="form-group">
              <label for="chitietsp">Chi tiết sản phẩm</label>
              <textarea name="detail" class="form-control" id="chitietsp" required rows="7"></textarea>
            </fieldset>
            <fieldset class="form-group">
                <label for="informations">Thông số kỹ thuật</label>
                <div id="buildyourform"></div>
                <input type="button" value="Thêm mới" class="add" id="add" />
            </fieldset>
            <fieldset class="form-group">
              <label for="mota">Mô tả sản phẩm</label>
              <textarea name="metadesc" class="form-control" id="mota" rows="2"></textarea>
            </fieldset>
            <fieldset class="form-group">
              <label for="tukhoa">Từ khóa</label>
              <textarea name="metakey" class="form-control" id="tukhoa"rows="2"></textarea>
            </fieldset>

          </div>
          <div class="col-md-3">
            <fieldset class="form-group">
              <label for="thuonghieu">Thương hiệu</label>
              <select name="thuonghieu" class="form-control" required id="thuonghieu">
                <option value="">[--Chọn thương hiệu--]</option>
                <?php echo $html_catid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="loaisp">Loại sản phẩm</label>
              <select name="catid" class="form-control" required id="loaisp">
                <option value="">[--Chọn loại sản phẩm--]</option>
                <?php echo $html_catid; ?>
              </select>
            </fieldset>
            <fieldset class="form-group">
              <label for="Gia">Giá</label>
              <input type="number" name="price" class="form-control" value="100000" min="10000" step="100" id="gia">
            </fieldset>
            <fieldset class="form-group">
              <label for="Gia">Giá khuyến mãi</label>

              <input type="number" name="pricesale" class="form-control" value="0" min="0" step="100" id="giakm">
              
            </fieldset>
            <fieldset class="form-group">
              <label for="Gia">Số lượng</label>   
              <input type="number" name="number" class="form-control" value="1" min="1" max="1000" id="soluong">

            </fieldset>
            <fieldset class="form-group">
                <img src="../public/images/noImg.jpg" alt="sss" id="uml_img_test" style="width: 150px;height: 150px; border: 1px #eee solid;">
                <div class="input-group mb-3">
                  <input type="hidden" id="ckfinder-input-1" name="img" class="form-control" required aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button type="button" id="ckfinder-popup-1">Chọn hình</button>
                </div>
              </div>
              </fieldset>
            <fieldset class="form-group">
              <label for="trangthai">Trạng thái</label>
              <select name="status" class="form-control" id="trangthai">
                <option value="1">Xuất bản</option>
                <option value="2"> Chưa xuất bản</option>
              </select>
            </fieldset>



          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</section>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  CKEDITOR.replace( 'chitietsp');


// thay đổi hình ảnh ở trang hiện tại

  $(document).ready( function () {
    $('#add-btn-informations').on('click', function(){
      $("#infomation").append('<input type="text" value="" name="informations[]" class="form-control">');
    });
  });




  $(document).ready(function() {
    $("#add").click(function() {
        var lastField = $("#buildyourform div:last");
        var intId = (lastField && lastField.length && lastField.data("idx") + 1) || 1;
        var fieldWrapper = $("<div class=\"fieldwrapper row  mb-1\" id=\"field" + intId + "\"/>");
        fieldWrapper.data("idx", intId);
        var fName = $("<div class=\"col-md-4\"><input type=\"text\" value=\"\" placeholder=\"Tiêu đề thông số\" class=\"fieldname form-control\" name=\"informations_field1[]\" /></div>");
        var fType = $("<div class=\"col-md-7\"><input type=\"text\" value=\"\" placeholder=\"Nội dung thông số\" class=\"fieldname form-control\" name=\"informations_field2[]\" /></div>");
        var removeButton = $("<input type=\"button\" class=\"btn btn-danger remove\" value=\"x\" />");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#buildyourform").append(fieldWrapper);
    });
    $("#preview").click(function() {
        $("#yourform").remove();
        var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
            var input;
            switch ($(this).find("select.fieldtype").first().val()) {
                case "checkbox":
                    input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textbox":
                    input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
                    break;
                case "textarea":
                    input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
                    break;    
            }
            fieldSet.append(label);
            fieldSet.append(input);
        });
        $("body").append(fieldSet);
    });
});
</script>
<script>
  var button1 = document.getElementById( 'ckfinder-popup-1' );

  button1.onclick = function() {
    selectFileWithCKFinder( 'ckfinder-input-1' );
  };

  function selectFileWithCKFinder( elementId ) {
  CKFinder.modal( {
    chooseFiles: true,
    width: 800,
    height: 600,
    onInit: function( finder ) {
      finder.on( 'files:choose', function( evt ) {
        var file = evt.data.files.first();
        var output = document.getElementById( elementId );
        $('#uml_img_test').attr('src', file.getUrl() );
        $('#ckfinder-input-1').val(file.getUrl());
      } );

      finder.on( 'file:choose:resizedImage', function( evt ) {
        var output = document.getElementById( elementId );
        output.value = evt.data.resizedUrl;
      } );
    }
  } );
}
</script>
  <?php require_once 'views/footer.php'; ?>