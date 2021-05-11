$(function() {
    $('.right-nav li a').mouseenter(function() {
        // $('.submenu').stop().fadeOut(0);
        $('.nation-submenu').fadeOut(0);
        // $('.nation-tri').css({
        //     opacity: '0',
        // });
        if (!$(this).hasClass('cart-a')) {
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

            var t_d = $(this).next('.submenu').width();
            $(this)
                .next('.submenu')
                .find('.tri')
                .css({
                    'margin-left': t_d - 20 + 'px',
                });
        }
    });
    $('.right-nav li a').mouseleave(function() {
        $(this).next('.submenu').delay(300).fadeOut(0);
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
        $('.nation-submenu').stop();
        $(this).toggleClass('active');
        // $('.nation-tri,.nation-tri-bg').css({
        //     opacity: '0',
        // });
        // $('.nation-tri, .nation-tri-bg').animate({ opacity: '1' }, 1);

        $('.nation-submenu').fadeOut(0);

        // if ($(this).hasClass('active')) {
        $('.nation-a').removeClass('active');
        $(this).addClass('active');
        $(this).next('.nation-tri').addClass('appear');
        $(this).next().next('.nation-tri-bg').addClass('appear');
        $(this).next('.nation-tri').animate({ opacity: '1' }, 1);
        $(this).next().next('.nation-tri-bg').animate({ opacity: '1' }, 1);
        $('.nation-submenu').fadeIn(0);

        var d = $(this).offset().top - 13;

        if ($(window).width() <= 991) {
            d += 20;
        }
        if ($(window).width() >= 991 && $(window).width() <= 1200) {
            d += 33;
        }

        $('.nation-submenu').css({
            top: d + 'px',
        });
        // } else {
        // $('.nation-submenu').fadeOut(0);
        // }
    });

    $('.nation-submenu').mouseenter(function() {
        // $('.submenu').fadeOut(0);

        $(this).stop().fadeIn(0);
        $('.nation-tri, .nation-tri-bg').stop();
        // $(this).next('.nation-tri').css({
        //     opacity: '1',
        // });
        // $(this).next().next('.nation-tri-bg').css({
        //     opacity: '1',
        // });
    });

    $('.nation-submenu').mouseleave(function() {
        $(this).fadeOut(0);
        $('.nation-tri, .nation-tri-bg').animate({ opacity: '0' }, 1);
        $('.nation-a').removeClass('active');
    });
    $('.nation-a').mouseleave(function() {
        // $(this)
        //     .next('.submenu')
        //     .delay(300, function() {
        //         alert(7);

        $('.nation-submenu')
            .delay(500)
            .queue(function(next) {
                // $(this).remove();
                $(this).fadeOut(0);
                $('.nation-a').removeClass('active');

                $('.nation-tri, .nation-tri-bg').animate({ opacity: '0' }, 1);
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
        if (typeof myPlayer !== 'undefined') {
            myPlayer.pause();
        }

        if (typeof myPlayer2 !== 'undefined') {
            myPlayer2.pause();
        }

        $('.nation-a').removeClass('active');

        $('.nation-tri').css({
            opacity: '0',
        });
        $('.nation-submenu').fadeOut(0);

        if ($(window).width() < 991) {
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

    if ($(window).width() < 991) {
        // slick-initialized

        if ($('.mobile-product-slide').length) {
            $('.mobile-product-slide').slick({
                dots: true,
            });
        }
        // }
    }

    $('.mobile-menu-container ul li a.level-1').click(function() {
        $('.mobile-menu-container ul li a.level-1').removeClass('active');
        $('.mobile-menu-container ul li a.level-1').next('ul').fadeOut(0);

        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next('ul').fadeIn(200);
        } else {
            $(this).next('ul').fadeOut(0);
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

    $('.mobile-bg').click(function() {
        $('.mobile-menu-div').fadeOut(0);
        $('.mobile-bg').fadeOut(0);
        $('.mobile-menu-btn-icon-a,.mobile-search-icon-a').removeClass('active');
    });

    // $('.mobile-bg').click(function() {})

    $('.search-input-2-close-btn').click(function() {
        $('#search-input-2').val('');
    });

    $('.product-img-wrapper').mouseenter(function() {
        // alert(60);
        $(this).find('.hover-layer').css({ display: 'table' });
        $(this).find('.hover-layer').css({ opacity: '0' });
        $(this).find('.hover-layer').animate({ opacity: '1' }, 200);
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

    // $('.quantity-btn-plus').closest('.quantity-ui').find('input').val()

    // $('.lvjs-fullscreen-control.vjs-control.vjs-button')
});