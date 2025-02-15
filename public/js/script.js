var uri_img_success = 'public/images/';

jQuery(document).ready(function($) {
	$('#customemail').on('click',function(){		
		var input = $('#EmailRegister').val();
		$.ajax({
			url: 'ajax/contect-email.php',
			type: 'POST',
			dataType: 'JSON',
			data: {input: input},
			success:function(result) 
			{

				if(result.constructor === String){
					result = JSON.parse(result);
				}

				if (result.success) 
				{
					Swal.fire({
						type: 'success',
						title: "Thông báo",
						text: result.msg,
						showCloseButton: true,
						showCancelButton: true,
						focusConfirm: false,
						confirmButtonText: "OK",
					})

				}else{

					Swal.fire({
						type: 'error',
						title: "Thông báo",
						text: result.msg,
						showCloseButton: true,
						showCancelButton: true,
						focusConfirm: false,
						confirmButtonText: "OK",
					})
				}

			}
		});		
	})
});

// tim kiếm
function doSearch() {
	var keyword = $('#keyword').val();
	if (keyword.length < 2 || keyword == 'Nhập từ khóa tìm kiếm') {
		Swal.fire({
			type: 'error',
			title: "Thông báo",
			text: "Từ khóa phải nhiều hơn 1 ký tự.",
			showCloseButton: true,
			showCancelButton: true,
			focusConfirm: false,
			confirmButtonText: "OK",
		})
		return;
	}
	location.href = 'tim-kiem.html?keyword=' + keyword;
}

$(document).ready(function(){
	$('#keyword').keyup(function(){
		var keyword = $(this).val();
		$.ajax({
			url: 'ajax/search-form.php',
			type: 'POST',
			dataType: 'JSON',
			data: {keyword: keyword},
			success:function(result) 
			{

				if(result.constructor === String){
					result = JSON.parse(result);
				}
				$('#addHtml').html(result.success);
				$('#addHtml').show();

				$(document).on('click', function (e) {
					if ($(e.target).closest('#addHtml').length === 0) {
						$('#addHtml').hide();
					}
				});

			}
		}); 
	});
});

// kiểm tra giỏ hàng đã có sản phẩm hay chưa

$(document).ready(function(){
	$('#check-cart').on('click', function(){
		$.ajax({
			url: 'ajax/check-cart.php',
			type: 'POST',
			success:function(result) 
			{
				if(result.constructor === String){
					result = JSON.parse(result);
				}

				if (Number(result.success) > 0) {
					location.href = home_url+'gio-hang.html';
				}else{
					Swal.fire({
						type: 'error',
						title: "Thông báo",
						text: "Giỏ hàng không có sản phẩm.",
						showCloseButton: true,
						showCancelButton: true,
						focusConfirm: false,
						confirmButtonText: "OK",
					})
					return;
				}
				

			}
		}); 
	});
});



// include

$(document).ready(function(){
	$.getScript("public/js/bootstrap.min.js");
	$.getScript("public/js/sweetalert2.all.min.js");
	$.getScript("public/js/owl.carousel.js");
	$.getScript("public/js/modernizr.custom.js");
	$.getScript("public/js/jquery.glasscase.minf195.js");
	$.getScript("public/js/lazyload.js");
	$.getScript("public/js/library.js");
});


