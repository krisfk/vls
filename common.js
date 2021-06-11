$(function() {
    // alert(5);
    check_window_size();
    $('.right-nav li a').mouseenter(function() {
        // alert(6);
        if ($(window).width() > 1200) {
            $('.nation-submenu').fadeOut(0);
            var submenu_color = $(this).attr('data-color');

            $(this)
                .next('.submenu')
                .find('.tri')
                .css({ 'border-bottom': '10px solid ' + submenu_color });
            $(this)
                .next('.submenu')
                .css({ border: '1px solid ' + submenu_color });

            if (!$(this).hasClass('cart-a')) {
                // $(this).next('submenu').find('tri').fadeOut(0);

                $('.right-nav .submenu').css({
                    'border-radius': '18px 18px 18px 18px',
                });

                $(this).next('.submenu').fadeIn(0);

                var d = ($(this).next('.submenu').width() + 10 - $(this).width()) / 2;
                $(this)
                    .next('.submenu')
                    .css({
                        left: -d + 'px',
                    });

                var t_d = ($(this).next('.submenu').width() + 10 - 32) / 2;
                $(this)
                    .next('.submenu')
                    .find('.tri')
                    .css({
                        'margin-left': t_d + 'px',
                    });
            } else {
                $(this).next('.submenu').fadeIn(0);

                // var d = ($(this).next('.submenu').width() + 10 - $(this).width()) / 2;
                $(this).next('.submenu').css({
                    right: '0px',
                });

                // $('.right-nav .submenu').css({ 'border-radius': '18px 5px 18px 18px' });
                $('.right-nav .submenu').css({
                    'border-radius': '18px 18px 18px 18px',
                });

                var t_d = $(this).next('.submenu').width() - 20 + 10;

                if ($(window).width() >= 1200) {
                    $(this)
                        .next('.submenu')
                        .find('.tri')
                        .css({
                            'margin-left': t_d - 20 + 'px',
                        });
                } else {
                    $(this)
                        .next('.submenu')
                        .find('.tri')
                        .css({
                            'margin-left': t_d - 20 + 12 + 'px',
                        });
                }
            }
        }
    });
    $('.right-nav li a').mouseleave(function() {
        $(this).next('.submenu').delay(200).fadeOut(0);
    });
    $('.submenu').mouseenter(function() {
        $('.submenu').fadeOut(0);
        $(this).stop().fadeIn(0);
    });
    $('.submenu').mouseleave(function() {
        if (!$(this).hasClass('search-submenu')) {
            $(this).fadeOut(0);
        }
    });

    $('#search-input').focus(function() {
        // if (!$(this).closest('.mobile-menu-container')) {
        $('.search-nav .submenu').fadeIn(0);

        // }
    });
    $('#search-input').focusout(function() {
        $('.search-nav .submenu').delay(200).fadeOut(0);
    });

    $('.nation-a').mouseenter(function() {
        if ($(window).width() > 1200) {
            var submenu_color = $(this).attr('data-color');
            $(this)
                .next('.nation-tri')
                .css({ 'border-bottom': '12px solid ' + submenu_color });

            $(this)
                .closest('.row')
                .next('.nation-submenu')
                .css({ border: '3px solid ' + submenu_color });

            $('.nation-submenu').stop();
            // $('.nation-submenu').stop();

            $(this).toggleClass('active');

            $('.nation-submenu').fadeOut(0);

            $('.nation-a').removeClass('active');
            $(this).addClass('active');
            $('.nation-tri').removeClass('appear');
            $(this).next('.nation-tri').addClass('appear');
            $(this).next().next('.nation-tri-bg').addClass('appear');
            $(this)
                .next('.nation-tri')
                .clearQueue()
                .stop()
                .animate({ opacity: '1' }, 1);
            $(this).next().next('.nation-tri-bg').animate({ opacity: '1' }, 1);
            $('.nation-submenu').fadeIn(0);

            var d = $('.categories-div-wrapper').position().top - 5;
            if ($(window).width() <= 1200) {
                d = $(this).offset().top - 1;
                $('.nation-submenu').css({
                    top: d + 'px',
                });
                //mobile
            } else if ($(window).width() >= 1200 && $(window).width() <= 1200) {
                if ($('.categories-div-wrapper').hasClass('fixed')) {
                    d += $('.categories-div').height() + 26;
                } else {
                    d += 33;
                }

                $('.nation-submenu').css({
                    top: d + 'px',
                });
            } else {
                if ($('.categories-div-wrapper').hasClass('fixed')) {
                    d += $('.categories-div').height() + 18;
                }

                $('.nation-submenu').css({
                    top: d + 'px',
                });
            }
        }

        // } else {
        // $('.nation-submenu').fadeOut(0);
        // }
    });

    $('.nation-submenu').mouseenter(function() {
        // $('.submenu').fadeOut(0);
        // alert(5);
        $(this).clearQueue().stop(); //.fadeIn(0);
        // $('.nation-tri.appear')
        // .stop();
        // alert(6);
        // $('.nation-tri.appear, .nation-tri-bg').animate({ opacity: 1 }, 1);
        $('.nation-tri.appear').clearQueue().stop().animate({ opacity: 1 }, 1);
        // $('.nation-tri.appear').css({
        //     opacity: '1 !important',
        // });
        // $(this).next().next('.nation-tri-bg').css({
        //     opacity: '1',
        // });
    });

    $('.nation-submenu').mouseleave(function() {
        $(this).fadeOut(0);
        $('.nation-tri, .nation-tri-bg').animate({ opacity: '0' }, 1);
        $('.nation-a').removeClass('active');
        // $('.nation-tri.appear').removeClass('appear');
    });
    $('.nation-a').mouseleave(function() {
        // $(this)
        //     .next('.submenu')
        //     .delay(300, function() {
        // alert(7);

        $('.nation-submenu')
            .delay(200)
            .queue(function(next) {
                // $(this).remove();
                $(this).fadeOut(0);
                // $('.nation-tri.appear').removeClass('appear');

                // $('.nation-a').removeClass('active');
                // alert(111);
                // $('.nation-tri, .nation-tri-bg').css({ opacity: '0' }, 1);
                next();
            });

        $('.nation-tri, .nation-tri-bg')
            .delay(200)
            .queue(function(next) {
                //         // alert(6);
                $(this).animate({ opacity: '0' }, 1);
                //         $('.nation-tri.appear').removeClass('appear');

                next();
            });

        // $('.nation-submenu').delay(300, function() {
        //     $(this).fadeOut(0);
        //     $(this).next('.nation-tri').css({
        //         opacity: '0',
        //     });
        //     $(this).next().next('.nation-tri-bg').css({
        //         opacity: '0',
        //     });
        // });
        // });
    });

    $(window).resize(function() {
        // $('.enlarge-video-div').removeClass('fullscreen');
        $('.mobile-menu-btn-icon-a,.mobile-search-icon-a').removeClass('active');

        $('.sticky.categories-div-wrapper,.mobile-menu-div').fadeOut(0);

        $('.lightbox-bg,.overlay-container').fadeOut(0);
        check_window_size();
        $('.categories-div-wrapper').removeClass('fixed');
        $('.middle-container').css({
            'margin-top': '0px',
        });
        $('.banner-div').css({ 'margin-top': '-21px' });
        $('.categories-div ul').css({ margin: '' });

        if (typeof myPlayer !== 'undefined') {
            // myPlayer.pause();
        }

        if (typeof myPlayer2 !== 'undefined') {
            // myPlayer2.pause();
        }

        $('.nation-a').removeClass('active');

        $('.nation-tri').css({
            opacity: '0',
        });
        $('.nation-submenu').fadeOut(0);

        if ($(window).width() < 1200) {
            // slick-initialized
            if (!$('.mobile-product-slide').hasClass('slick-initialized') &&
                $('.mobile-product-slide').length
            ) {
                $('.mobile-product-slide').slick({
                    dots: true,
                });
            }
        }
    });

    if ($(window).width() < 1200) {
        // slick-initialized

        if ($('.mobile-product-slide').length) {
            $('.mobile-product-slide').slick({
                dots: true,
                arrows: false,
            });
        }
        // }
    }

    $('.mobile-menu-container ul li a.arrow').click(function() {
        $('.mobile-menu-container ul li a.arrow').removeClass('active');
        $('.mobile-menu-container ul li a.arrow').next().next('ul').fadeOut(0);

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next().next('ul').fadeIn(200);
        } else {
            $(this).next().next('ul').fadeOut(0);
        }
    });

    $('.mobile-menu-btn-icon-a').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.mobile-menu-div').fadeIn(200);
            $('.mobile-bg').fadeIn(0);
        } else {
            $('.mobile-menu-div').fadeOut(0);
        }
    });

    $('.mobile-search-icon-a').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.mobile-search').fadeIn(0);
        } else {
            $('.mobile-search').fadeOut(0);
        }
        // $('.search-nav .submenu').fadeIn(0);
        // $(this).toggleClass('active');
        // if ($(this).hasClass('active')) {
        //     $('.mobile-menu-div').fadeIn(200);
        //     $('.mobile-bg').fadeIn(0);
        // } else {
        //     $('.mobile-menu-div').fadeOut(0);
        // }
    });

    $('.mobile-bg,.mobile-menu-div .close-btn').click(function() {
        $('.mobile-menu-div').fadeOut(0);
        $('.mobile-bg').fadeOut(0);
        $('.mobile-menu-btn-icon-a,.mobile-search-icon-a').removeClass('active');
    });

    // $('.mobile-bg').click(function() {})

    $('.search-input-2-close-btn').click(function() {
        $('#search-input-2').val('');
    });

    $('.product-img-wrapper').mouseenter(function() {
        if ($(window).width() > 1200) {
            var h = $(this).height();

            $(this).find('.hover-layer').css({ display: 'table' });
            $(this).find('.hover-layer').css({ opacity: '0' });
            $(this).find('.hover-layer').animate({ opacity: '1' }, 200);

            $(this)
                .find('.hover-layer')
                .attr('style', 'height: ' + h + 'px !important;display:table;');

            // $(this).find('.hover-layer').height(h);

            var btn_w = $(this).find('.heart.hover-layer-btn').outerWidth();

            // heart hover-layer-btn
            // $(this).find('.hover-layer .hover-layer-btn').width(btn_w);
            // alert(btn_w);
            $(this)
                .find('.hover-layer .hover-layer-btn')
                .attr('style', 'width:' + btn_w + 'px !important');
            // .width(btn_w);

            // $(this).find('.hover-layer .hover-layer-btn').height();
            // $(this).find('.hover-layer .hover-layer-btn').closest('li').next('li').find('.heart.hover-layer-btn').height();
            // hover-layer-btn
        }
    });

    $('.hover-layer').mouseleave(function() {
        $(this).fadeOut(0);
    });

    $('.product-detail-table .quantity-ui td input').keypress(function(e) {
        return e.charCode >= 48 && e.charCode <= 57;
    });

    $('.quantity-btn-plus').click(function() {
        // alert(4);
        var ele = $(this).closest('.quantity-ui').find('input');
        var ori_val = ele.val();
        ele.val(Number(ori_val) + 1);
    });

    $('.quantity-btn-minus').click(function() {
        var ele = $(this).closest('.quantity-ui').find('input');
        var ori_val = ele.val();
        ele.val(Math.max(1, Number(ori_val) - 1));
    });

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        // console.log(
        //     scroll +
        //     ' ' +
        //     ($('.middle-container').height() -
        //         $('.categories-div-wrapper').height() -
        //         $('.top-menu-div').height() -
        //         $('.footer-div').height())
        // );
        if (
            scroll >
            $('.middle-container').height() -
            $(window).height() +
            $('.categories-div-wrapper').height() +
            $('.top-menu-div').height() +
            50
        ) {
            $('.back-to-top-btn').fadeIn(200);
        } else {
            $('.back-to-top-btn').fadeOut(200);
        }

        if ($(window).width() >= 1200) {
            if (
                scroll >= $('.categories-div').offset().top - 25 &&
                !$('.categories-div-wrapper').hasClass('fixed')
            ) {
                $('.sticky-cart-btn').fadeIn(200);

                $('.sticky.categories-div-wrapper').fadeIn(0);
                // $('.categories-div-wrapper').addClass('fixed');
                // $('.middle-container').css({
                //     'margin-top': $('.categories-div').height() + 30 + 'px',
                // });
                // $('.banner-div').css({ 'margin-top': '0px' });
                // $('.categories-div ul').css({ margin: '0px' });
            } else if (
                scroll <
                $('.categories-div').height() + 20
                //  &&
                // $('.categories-div-wrapper').hasClass('fixed')
            ) {
                $('.sticky-cart-btn').fadeOut(200);

                // $('.categories-div-wrapper').removeClass('fixed');
                $('.sticky.categories-div-wrapper').fadeOut(0);

                // $('.middle-container').css({
                //     'margin-top': '0px',
                // });
                // $('.banner-div').css({ 'margin-top': '0px' });
                // $('.categories-div ul').css({ margin: '' });
            }
        } else {
            // if (scroll > 20) {
            $('body').addClass('mobile');
            // $('.top-menu-div').addClass('fixed');
            // }
        }
    });

    $('.back-to-top-btn').click(function() {
        $('html,body').animate({ scrollTop: 0 }, 200);
    });

    $('.share-cart-a').click(function() {
        $('.lightbox-bg,.share-cart-container').fadeIn(200);
    });

    $('.close-btn,.lightbox-bg').click(function() {
        $('.lightbox-bg,.overlay-container').fadeOut(200);
        $('.msg-box').removeClass('stay');
    });

    $('.hover-layer-btn.quick-view').click(function() {
        $('.lightbox-bg,.quick-product-view').fadeIn(200);
    });

    $('.new-address-btn').click(function() {
        $('.lightbox-bg,.new-address-container').fadeIn(200);
    });

    $('.cart-btn.add ,.cart-btn-2.add ').click(function() {
        $('.lightbox-bg,.msg-box').fadeIn(200);
        setTimeout(() => {
            $('.msg-box').addClass('stay');
        }, 200);

        $('.msg-txt').html('已加入購物⾞');

        if ($(this).hasClass('quick-add')) {
            setTimeout(function() {
                $('.msg-box').fadeOut(200);
                $('.msg-box').removeClass('stay');
            }, 1500);
        } else {
            setTimeout(function() {
                $('.lightbox-bg').click();
            }, 1500);
        }
    });

    $('.quick-product-view').click(function() {
        // $('.msg-box.stay').fadeOut(0);
        // setTimeout(() => {
        // $('.msg-box.stay').dequeue().fadeOut(0);
        // }, 100);
        $('.msg-box.stay').fadeOut(0);
        $('.msg-box.stay').removeClass('stay');
    });

    $('.heart.hover-layer-btn .want.cart-btn').click(function() {
        $('.lightbox-bg,.msg-box').fadeIn(200);
        setTimeout(() => {
            $('.msg-box').addClass('stay');
        }, 200);

        $('.msg-txt').html('已加入好想買清單');

        if ($(this).hasClass('quick-add')) {
            setTimeout(function() {
                $('.msg-box').fadeOut(200);
                $('.msg-box').removeClass('stay');
            }, 1500);
        } else {
            setTimeout(function() {
                $('.lightbox-bg').click();
            }, 1500);
        }
    });
});

// for (i = 0; i < $('.hover-layer').length; i++) {
//     var hover_obj = $('.hover-layer').eq(i);
//     hover_obj.height(hover_obj.closest('.product-img-wrapper').height());
// }

function check_window_size() {
    if ($(window).width() < 1200) {
        $('body').addClass('mobile');
        // $('a[target="_blank"]').attr('target', '_self');
        $('.top-space').height($('.top-menu-div').height());
    } else {
        $('body').removeClass('mobile');
        // $('a[target="_self"]').attr('target', '_blank');

        $('.top-space').height(0);
    }
}