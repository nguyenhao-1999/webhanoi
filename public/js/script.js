$(document).ready(function(){
	$.getScript("public/js/bootstrap.min.js");
	$.getScript("public/js/sweetalert2.all.min.js");
	$.getScript("public/js/owl.carousel.js");
	$.getScript("public/js/modernizr.custom.js");
	$.getScript("public/js/jquery.glasscase.minf195.js");
	$.getScript("public/js/lazyload.js");
	$.getScript("public/js/library.js");
});


function getEmail() {
	var EmailRegister = $("#EmailRegister").val();
	$('.loading').show();
	$.ajax({
		type: 'POST',
		url: 'ajax/contect-email.php',
		data: 'EmailRegister=' + EmailRegister,
		dataType: 'json',
		success: function (data) {
			var content = data.Html;
			var param = data.Params;
			if (param != '') {
				Swal.fire({
					type: 'error',
					html: param,
					showCloseButton: true,
					showCancelButton: true,
					focusConfirm: false,
					confirmButtonText: "OK",
				})
			}
			if (content != '') {
                //Swal.fire({
                //    type: 'success',
                //    html: content,
                //})
                location.href = "/dang-ky-thanh-cong";
            }
            $('.loading').hide();
        },
        error: function () { }
    });
}




$(document).ready(function() {
	$('#customemail').on('click',function(){
		var input=$('#EmailRegister').val();
		$('#form-err-customer').addClass("swal2-container");
		$.ajax({
			url: 'ajax/contect-email.php',
			type: 'POST',
			dataType: 'json',
			data: {input: input},
		})
		.done(function() {
			console.log("success");

			if(result.constructor === String){
				result = JSON.parse(result);
			}

			if (result.success) {

				$("body").html(result.msg);
				$("#"+result.el).val();

			}else{

				$("body").html(result.msg);
				$("#"+result.el).focus("#"+result.el);

			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	})
});

