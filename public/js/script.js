jQuery(document).ready(function($) {
	$('.cwButtonClose').on('click',function(){
		$('#cwMessage').css("display", "none");
	});
});

jQuery(document).ready(function($) {
	$('#customemail').on('click',function(){		
		var input = $('#EmailRegister').val();
		$.ajax({
			url: 'ajax/contect-email.php',
			type: 'POST',
			dataType: 'JSON',
			data: {input: input},
			success:function(data) 
			{

				if(result.constructor === String){
					result = JSON.parse(result);
				}

				if (result.success) 
				{
					$('#swal2-content').text(result.msg);
					$('#cwMessage').css("display", "block");

				}else{
					$('#swal2-content').text(result.msg);
					$('#cwMessage').css("display", "block");
				}

			}
		});		
	})
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


