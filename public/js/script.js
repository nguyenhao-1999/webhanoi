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

jQuery(document).ready(function($) {
	$("#customemail").click(function(){
		var input = $('#EmailRegister').val();

		if (id.length == 4) {
			$.ajax({
				url: 'ajax/contect-email.php',
				dataType: 'json',
				type: 'POST',
				data: { 'input': input },
				success: function( result){  
					$('#swal2-content').text(result.msg);
					$('#cwMessage').css("display", "block");
				}
			});
		}else
		{
			$('#swal2-content').text(result.msg);
			$('#cwMessage').css("display", "block");
		}
	});
});


$(document).ready(function(){
	$.getScript("public/js/bootstrap.min.js");
	$.getScript("public/js/sweetalert2.all.min.js");
	$.getScript("public/js/owl.carousel.js");
	$.getScript("public/js/modernizr.custom.js");
	$.getScript("public/js/jquery.glasscase.minf195.js");
	$.getScript("public/js/lazyload.js");
	$.getScript("public/js/library.js");
});


