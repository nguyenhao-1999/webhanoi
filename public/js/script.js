jQuery(document).ready(function($) {
	$('.cwButtonClose').on('click',function(){
		$('#cwMessage').css("display", "none");
	});
});

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
					$('#swal2-content').text(result.msg);
					$('#show-img').attr("src", uri_img_success+result.img);
					$('#cwMessage').css("display", "block");

				}else{
					$('#swal2-content').text(result.msg);
					$('#show-img').attr("src", uri_img_success+result.img);
					$('#cwMessage').css("display", "block");
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
				$('#addHtml').css("display", "block");

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


