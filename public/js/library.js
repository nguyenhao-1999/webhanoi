$(document).ready(function ($) {

    // Thêm class 'lazy' vào tất cả hình ảnh trên website
    //$('img').each(function () {
    //    $(this).addClass("lazy");
    //    $(this).attr("data-src", this.src);
    //    $(this).attr("src", "");
    //});
    //$(".lazy").lazyload();

    var stickyOffset = $('.sticky').offset().top;

    $(window).scroll(function () {
        var sticky = $('.sticky'),
            sticky2 = $('.header-mobile'),
            scroll = $(window).scrollTop();

        if (scroll >= stickyOffset) {
            sticky.addClass('fixed');
            sticky2.addClass('fixedMobile');
        }
        else {
            sticky.removeClass('fixed');
            sticky2.removeClass('fixedMobile');
        }
    });

    $('#trigger-mobile').click(function () {
        $(".mobile-main-menu").addClass('active');
        $(".backdrop__body-backdrop___1rvky").addClass('active');
    });
    $('#close-nav').click(function () {
        $(".mobile-main-menu").removeClass('active');
        $(".backdrop__body-backdrop___1rvky").removeClass('active');
    });
    $('.backdrop__body-backdrop___1rvky').click(function () {
        $(".mobile-main-menu").removeClass('active');
        $(".backdrop__body-backdrop___1rvky").removeClass('active');
    });
    $(window).resize(function () {
        if ($(window).width() > 1023) {
            $(".mobile-main-menu").removeClass('active');
            $(".backdrop__body-backdrop___1rvky").removeClass('active');
        }
    });
    $('.ng-has-child1 a .fa1').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.ng-has-child1').find('.ul-has-child1').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });
    $('.ng-has-child1 .ul-has-child1 .ng-has-child2 a .fa2').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.parents('.ng-has-child1 .ul-has-child1 .ng-has-child2').find('.ul-has-child2').stop().slideToggle();
        $(this).toggleClass('active')
        return false;
    });
});
/*resize img cùng cấp*/
/*$( window ).load(function() {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});*/
/*$( window ).resize(function() {
    render_size();
});
function render_size(){

    var h_1000 = $('.h_1000 img').width();
    $('.h_1000 img').height( 1.000 * parseInt(h_1000));


}*/
/*navText:["<i class=\"fa fa-long-arrow-left\"></i>","<i class=\"fa fa-long-arrow-right\"></i>"],*/
/*js zoom img ctsp*/
$(function () {
    $("#zoom1").glassCase({
        'widthDisplay': 500,
        'heightDisplay': 435,
        'nrThumbsPerRow': 4,
        'isSlowZoom': true,
        'colorIcons': '#F15129',
        'colorActiveThumb': '#F15129',
        /*'thumbsPosition': 'left'*/ /*img con float left*/
    });
});
// js back to top
if ($('#back-to-top').length) {
    var scrollTrigger = 800, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
/*js home slider banner*/
$('#slider-home').owlCarousel({
    loop: true,
    margin: 0,
    lazyLoad: true,
    autoplay: true,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1600,
    responsive: {
        0: {
            nav: false,
            dots: true,
            items: 1
        },
        600: {
            nav: false,
            dots: true,
            items: 1
        },
        1000: {
            nav: true,
            dots: false,
            items: 1
        }
    }
})
/*js home slider cong trinh*/
$('#slider-congtrinh').owlCarousel({
    loop: true,
    lazyLoad: true,
    dots: false,
    nav: true,
    autoplay: false,
    navText: ["<i class=\"fas fa-chevron-left\"></i>", "<i class=\"fas fa-chevron-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1600,
    responsive: {
        0: {
            margin: 10,
            items: 2
        },
        600: {
            margin: 10,
            items: 3
        },
        1000: {
            margin: 22,
            items: 4
        }
    }
})
/*js home slider khachangh*/
$('#slider-khachhang').owlCarousel({
    loop: true,
    lazyLoad: true,
    margin: 0,
    dots: false,
    nav: true,
    autoplay: true,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1600,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
/*slide sp home*/
$('.slide-sp').owlCarousel({
    loop: true,
    lazyLoad: true,
    dots: false,
    nav: true,
    autoplay: false,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1500,
    responsive: {
        0: {
            margin: 10,
            items: 2
        },
        600: {
            margin: 10,
            items: 3
        },
        1000: {
            margin: 20,
            items: 4
        }
    }
})
/*slide doitac*/
$('#slider-doitac').owlCarousel({
    loop: true,
    lazyLoad: true,
    dots: false,
    nav: true,
    autoplay: true,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 6000,
    autoplaySpeed: 1800,
    smartSpeed: 1500,
    responsive: {
        0: {
            margin: 10,
            items: 3
        },
        600: {
            margin: 10,
            items: 4
        },
        1000: {
            margin: 20,
            items: 7
        }
    }
})
/*slide du an*/
$('#slider-duan').owlCarousel({
    loop: true,
    lazyLoad: true,
    dots: false,
    nav: true,
    autoplay: true,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1500,
    responsive: {
        0: {
            margin: 10,
            items: 3
        },
        600: {
            margin: 10,
            items: 4
        },
        1000: {
            margin: 20,
            items: 7
        }
    }
})
/*js add class */
if ($(window).width() < 991) {
    $('.btn-click').on('click', function () {
        $(this).parent().toggleClass('open');
        $(this).parent().find('.list-link-title').slideToggle();
    });
}
/*slide du an*/
$('.slider-ctrin-popup23').owlCarousel({
    loop: true,
    lazyLoad: true,
    dots: false,
    nav: true,
    autoplay: false,
    navText: ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    autoplayTimeout: 8000,
    autoplaySpeed: 1800,
    smartSpeed: 1500,
    responsive: {
        0: {
            margin: 10,
            items: 2
        },
        600: {
            margin: 10,
            items: 3
        },
        1000: {
            margin: 10,
            items: 4
        }
    }
})
/*slide 1*/
$('.slider-ctrin-popup').owlCarousel({
    items: 1,
    loop: false,
    lazyLoad: true,
    center: true,
    margin: 10,
    nav: true,
    autoplay: false,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash'
});
/*js tab doi sang slide*/
$(".section-tab-owl").owlCarousel({
    nav: true,
    lazyLoad: true,
    slideSpeed: 600,
    paginationSpeed: 400,
    singleItem: true,
    pagination: false,
    dots: false,
    autoplay: false,
    lazyLoad: true,
    nav: true,
    navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
    margin: 30,
    autoplayTimeout: 6000,
    autoplayHoverPause: true,
    autoHeight: false,
    loop: false,
    responsive: {
        0: {
            items: 1
        },
        543: {
            items: 1
        },
        768: {
            items: 2
        },
        991: {
            items: 3
        },
        992: {
            items: 3
        },
        1024: {
            items: 3
        },
        1200: {
            items: 4
        },
        1590: {
            items: 4
        }
    }
});
$(document).ready(function () {
    function awe_tab() {
        $(".e-tabs:not(.not-dqtab)").each(function () {
            $(this).find('.tabs-title li:first-child').addClass('current');
            $(this).find('.tab-content').first().addClass('current');

            $(this).find('.tabs-title li').click(function () {
                var tab_id = $(this).attr('data-tab');
                var url = $(this).attr('data-url');
                $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);
                $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                $(this).closest('.e-tabs').find('.tab-content').removeClass('current');
                $(this).addClass('current');
                $(this).closest('.e-tabs').find("#" + tab_id).addClass('current');
            });
        });
    } window.awe_tab = awe_tab;
    $(".not-dqtab").each(function (e) {
        var $this1 = $(this);
        var datasection = $this1.closest('.not-dqtab').attr('data-section');
        $this1.find('.tabs-title li:first-child').addClass('current');
        var view = $this1.closest('.not-dqtab').attr('data-view');
        $this1.find('.tab-content').first().addClass('current');
        $this1.find('.tabs-title.ajax li').click(function () {
            var $this2 = $(this),
                tab_id = $this2.attr('data-tab'),
                url = $this2.attr('data-url');
            var etabs = $this2.closest('.e-tabs');
            etabs.find('.tab-viewall').attr('href', url);
            etabs.find('.tabs-title li').removeClass('current');
            etabs.find('.tab-content').removeClass('current');
            $this2.addClass('current');
            etabs.find("." + tab_id).addClass('current');
            //Nếu đã load rồi thì không load nữa
            /*if(!$this2.hasClass('has-content')){
                $this2.addClass('has-content');     
                getContentTab(url,"."+ datasection+" ."+tab_id,view);
            }*/
        });
    });
    //Xử lý mobile
    $('.not-dqtab .next').click(function (e) {
        var count = 0
        $(this).parents('.content').find('.tab-content').each(function (e) {
            count += 1;
        })
        var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
            res = str.replace("tab-", ""),
            datasection = $(this).closest('.not-dqtab').attr('data-section');
        res = Number(res);
        if (res < count) {
            var current = res + 1;
        } else {
            var current = 1;
        }
        action(current, datasection);
    })
    $('.not-dqtab .prev').click(function (e) {
        var count = 0
        $(this).parents('.content').find('.tab-content').each(function (e) {
            count += 1;
        })
        var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
            res = str.replace("tab-", ""),
            datasection = $(this).closest('.not-dqtab').attr('data-section'),
            res = Number(res);
        if (res > 1) {
            var current = res - 1;
        } else {
            var current = count;
        }
        action(current, datasection);
    })
    // Action mobile
    function action(current, datasection, view) {
        $('.' + datasection + ' .tab-titlexs').attr('data-tab', 'tab-' + current);
        var text = '',
            url = '',
            tab_id = '';
        $('.' + datasection + ' ul.tabs.tabs-title.hidden-xs li').each(function (e) {

            if ($(this).attr('data-tab') == 'tab-' + current) {
                var $this3 = $(this);
                title = $this3.find('span').text();
                url = $this3.attr('data-url');
                tab_id = $this3.attr('data-tab');
                //Nếu đã load rồi thì không load nữa
                /*if(!$this3.hasClass('has-content')){
                    $this3.addClass('has-content'); 

                    getContentTab(url,"."+ datasection+" ."+tab_id,view);               
                }*/
            }
        })
        $("." + datasection + " .tab-titlexs span").text(title);
        $("." + datasection + " .tab-content").removeClass('current');
        $("." + datasection + " .tab-" + current).addClass('current');
    }
});
/*js click span reply*/
$("span.reply-at").click(function () {
    $(".media-at").find(".repbox-at").slideToggle("slow", function () {

    });
})
/*js filter*/
$('.wp-icon-filter').on('click', function () {
    $('.box-filter').toggleClass('open')
    $(this).toggleClass('open')
});

$(function () {

    $('.ext-show a').click(function () {
        if ($(this).text() == 'Xem thêm') {
            $('.post_content.ext').css({ 'height': 'auto' });
            $(this).text('Thu gọn');
        }
        else if ($(this).text() == 'Thu gọn') {
            $('.post_content.ext').css({ 'height': '100px' });
            $(this).text('Xem thêm');
        }
    })

    $('.liststore li.item-order').click(function () {
        var e = $(this).data("id");
        $('div.showroom').eq(e).modal('show');
    })

    $('#btnOrder').click(function () {
        checkout();
    })

    $('.buy_now').click(function () {
        add_cart($(this).data('id'), $(this).data('returnpath'));
    })

    //$('.phone_pd_btn').click(function () {
    //    location.href = 'tel:' + $(this).text().replace(/\D+/g, '');
    //})

    $('#ATM').click(function () {
        $('.bankBox').show();
    });
    $('#COD').click(function () {
        $('.bankBox').hide();
    });
    $('#Amortization').click(function () {
        $('.bankBox').hide();
    });

    $('.pagination a').click(function () {
        page++;
        paging_product($(this).data('url'));
    })

    $('.pagination-mb a').click(function () {
        page++;
        paging_productmb($(this).data('url'));
    })

    $('.filterTopCtgr a').click(function () {
        $('.filterTopCtgr a').removeClass('active');
        $(this).addClass('active');

        filter_product($(this).data('url'));
    })

    $('.right-property li input').on('change', function () {
        $('input[type="checkbox"][name="' + $(this).attr('name') + '"]').not(this).prop('checked', false);
        filter_product($(this).data('url'));
    })

    $('.category li,.filterBrand li,.product-fs li').click(function () {
        location.href = $(this).data('url');
    })

    $('.postInfo table').addClass('table mb0');

    $('.ctgrLeft,.fix_header,.infoRightDetail').stick_in_parent();

    $('.slide-home').owlCarousel({
        lazyLoad: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        lazyLoad: true,
        loop: true,
        margin: 0
    });

    var brand = new Swiper('.slide-brand', {
        slidesPerView: 5,
        slidesPerColumn: 2,
        spaceBetween: 5,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $("#elevatezoom").elevateZoom({
        gallery: 'list_small',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        loadingIcon: '/Content/utils/elevatezoom/ajax-loader.gif'
    });
})

function add_cart(id, returnpath) {
    location.href = '/gio-hang/Add.html?ProductID=' + id + '&Quantity=1&returnpath=' + returnpath;
}

function update_cart(index, quantity, returnpath) {
    location.href = '/gio-hang/Update.html?Index=' + index + '&Quantity=' + quantity + '&returnpath=' + returnpath;
}

function delete_cart(index) {
    location.href = '/gio-hang/Delete.html?Index=' + index;
}

function change_captcha() {
    var e = Math.floor(Math.random() * 999999); document.getElementById("imgValidCode").src = "/ajax/Security.html?Code=" + e
}
/*-------------------------
    checkout one click toggle function
    --------------------------*/
var checked = $('.sin-payment input:checked')
if (checked) {
    $(checked).siblings('.payment_box').slideDown(900);
};
$('.sin-payment input').on('change', function () {
    $('.payment_box').slideUp(900);
    $(this).siblings('.payment_box').slideToggle(900);
});
