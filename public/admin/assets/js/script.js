// list danh sach dữ liệu từ database.net

 jQuery(document).ready( function ($) {
  $('#myTable').DataTable({
    "order": [],
    "pageLength": 10,
    "language": {
      "decimal":        "",
      "emptyTable":     "Thông tin không tồn tại",
      "info":           "Hiển từ trang _START_ đến trang _END_ tất cả _TOTAL_ mục",
      "infoEmpty":      "Không tồn tại thông tin nào",
      "infoFiltered":   "(filtered from _MAX_ total entries)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Hiển thị _MENU_ mục",
      "loadingRecords": "Đang tải xuống...",
      "processing":     "",
      "search":         "Tìm:",
      "zeroRecords":    "Không tìm thấy kết quản bạn cần",
      "paginate": {
        "first":      "Tiếp",
        "last":       "Trước",
        "next":       "Trang Tiếp",
        "previous":   "Trang Trước"
      },
      "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
      }
    },
  } );
} );