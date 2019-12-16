var page = 1;
function paging_product(url) {
    $('.loading').show();

    //atr
    var checkbox = $('.right-property li input[type="checkbox"]:checked').map(function () {
        return this.value;
    }).get();
    var atr = checkbox.join('-');

    var sort = $('#sort').val();
    var key = $('#KeySearch').val();
    url = url + '?page=' + page + '&sort=' + sort + '&atr=' + atr;
    console.log('paging:' + url);

    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        success: function (data) {
            data = $(data).find('.product-fs').html();
            data = $.trim(data);

            if (data == '')
                $('.pagination a').hide();

            $('.product-fs').append(data);
            $('.product-fs li').click(function () {
                location.href = $(this).data('url');
            })

            $('.loading').hide();
        },
        error: function () { }
    });
}

function filter_product(url) {
    $('.loading').show();

    //atr
    var checkbox = $('.right-property li input[type="checkbox"]:checked').map(function () {
        return this.value;
    }).get();
    var atr = checkbox.join('-');

    var sort = $('#sort').val();
    url = url + '?page=' + page + '&sort=' + sort + '&atr=' + atr;
    console.log('filter:' + url);

    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        success: function (data) {
            data = $(data).find('.product-fs').html();
            data = $.trim(data);

            $('.product-fs').html(data);
            $('.product-fs li').click(function () {
                location.href = $(this).data('url');
            })

            $('.loading').hide();
        },
        error: function () { }
    });
}

function checkout() {
    $('.loading').show();

    $.ajax({
        url: '/ajax/CheckOut.html',
        type: 'POST',
        data: $("#cart_form").serialize(),
        success: function (data) {
            var content = data.Html;
            var param = data.Params;

            if (content != '')
                location.href = '/dat-hang-thanh-cong.html?code=' + content;

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

            $('.loading').hide();
        },
        error: function () { }
    });
}

/*function search(keyword) {
    $.ajax({
        url: '/ajax/GetSearch.html',
        type: 'GET',
        data: 'Keyword=' + keyword,
        dataType: 'json',
        success: function (data) {
            var content = data.Html;

            if (content != '') {
                $('.resuiltSearch').html(content);
                $('.resuiltSearch').show();

                $(document).on('click', function (e) {
                    if ($(e.target).closest('.resuiltSearch').length === 0) {
                        $('.resuiltSearch').hide();
                    }
                });
            }
        },
        error: function () { }
    });
}
*/

/*function searchBrand(keyword, menuid) {
    $.ajax({
        url: '/ajax/GetBrand.html',
        type: 'GET',
        data: 'Keyword=' + keyword + '&MenuID=' + menuid,
        dataType: 'json',
        success: function (data) {
            var content = data.Html;
            if (content != '') {
                $('.filterBrand').html(content);
            }
        },
        error: function () { }
    });
}*/

/*function getEmail() {
    var EmailRegister = $("#EmailRegister").val();
    $('.loading').show();
    $.ajax({
        type: 'GET',
        url: '/ajax/GetEmail.html',
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
}*/