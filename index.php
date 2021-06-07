<?php
include('header.php');
?>
<div class="middle-container">

    <div class="banner-container">

        <?php
    
    for($i=0;$i<8;$i++)
    {
    
    ?>
        <a class="banner-div d-block" href="./snoopy.php" style="background:#0994b3">

            <div class="container">

                <img class="w-100" src="./images/banner.jpg" alt="">
            </div>
        </a>
        <?php
        
    }?>


    </div>


    <div class="small-banner-container-wrapper">
        <div class="container position-relative">

            <!-- <div class="row"> -->

            <ul class="small-banner-video-ul mx-auto">
                <li> <img class="small-banner" src="./images/small-banner.jpg" alt="">
                </li>
                <li>
                    <div class=" video-player-col-div">
                        <!-- <div class="position-relative"> -->
                        <div class="video-player-div foot-bg">
                            <a href="./snoopy.php" class="campaign-url"></a>

                            <div class="text-center video-title pt-1 pb-1 fw-bold d-block text-center">史路比奇幻世界</div>
                            <div class="position-relative ps-3 pe-3 video-img-div-small"
                                style="background: url(./images/still-thumbnail.jpg)">

                                <div class="pause-txt">影響放大播放中...</div>

                                <video playsinline id="vls-video-1" name="videojs" class="video-js vls-video-1" controls
                                    preload="auto" width="640" height="264" poster="./images/black.jpg" data-setup="{}">
                                    <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                    <p class="vjs-no-js">
                                        To view this video please enable JavaScript, and consider upgrading to a
                                        web browser that
                                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                            HTML5 video</a>
                                    </p>
                                </video>

                            </div>
                            <!-- <a href="./snoopy.php" class="d-block w-100 preview-video-bottom-a"></a> -->
                        </div>
                        <!-- </div> -->
                    </div>
                </li>

            </ul>

            <!-- </div> -->
        </div>
    </div>
    <div class=" foot-bg foot-bg-div   pb-lg-5 pb-md-3 pb-sm-3  pb-3 ">
        <div class="container">


            <div class="text-center">

                <div class="enlarge-video-div">
                    <a href="./snoopy.php" class="ribbon-subtitle   text-center fw-bold position-relative">
                        <img class="subtitle-left-ribbon" src="./images/subtitle-left-ribbon.png" alt="">

                        史路比奇幻世界
                        <img class="subtitle-right-ribbon" src="./images/subtitle-right-ribbon.png" alt="">
                    </a>

                    <div class="mt-4">
                        <div class="video-img-div">
                            <img class="dummy" src="./images/video-img.jpg" alt="">

                            <!-- <video playsinline id="vls-video-2" name="videojs" class="video-js vls-video-2" controls
                                preload="auto" width="640" height="264" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                <source src="https://vjs.zencdn.net/v/oceans.mp4" type="video/mp4" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports
                                        HTML5 video</a>
                                </p>
                            </video> -->

                        </div>
                    </div>
                </div>

                <a href="./snoopy.php" class="ribbon-subtitle  text-center fw-bold position-relative">
                    <img class="subtitle-left-ribbon" src="./images/subtitle-left-ribbon.png" alt="">

                    好想買史路比奇幻世界
                    <img class="subtitle-right-ribbon" src="./images/subtitle-right-ribbon.png" alt="">
                </a>

                <div class="row mt-4 gx-lg-2 gx-md-2 gx-sm-2 gx-2 ">


                    <?php for($i=0;$i<4;$i++)
                  {
                      ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6  mb-3">
                        <div class="product-div-1">
                            <div class="text-center position-relative product-img-wrapper">


                                <div class="position-absolute w-100 hover-layer text-start">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                    class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                        <li> <a href="" class="heart hover-layer-btn"><img class="heart-icon"
                                                    src="./images/heart-icon.png" alt="">加入好想買清單</a></li>
                                        <li class="hover-layer-product-detail-btn"><a href="./product-detail.php"></a>
                                        </li>
                                    </ul>

                                </div>

                                <a href="./product-detail.php">
                                    <img class="w-100" src="./images/product-foto-1.jpg" alt="">
                                </a>
                            </div>
                            <a href="./product-detail.php" target="_self">
                                <div class="product-name">日版 多啦A夢 叮噹造型曲奇餅禮盒（1盒6塊）</div>
                                <div class="product-set mt-1">1盒6塊</div>

                                <div class="recommend-rate  mt-1">
                                    好想買指數：
                                    <div class="pt-div"> <img class="pt" src="./images/green-pt.png" alt=""> <img
                                            class="pt" src="./images/green-pt.png" alt=""> <img class="pt"
                                            src="./images/green-pt.png" alt=""> <img class="pt"
                                            src="./images/green-pt.png" alt="">
                                        <img class="pt" src="./images/grey-pt.png" alt="">
                                    </div>
                                </div>
                                <div class="limited-quantity  mt-1">日本限量版1000件</div>
                                <div class="old-price price  mt-1">$79.99</div>
                                <div class="final-price"><span class="s">$</span><span class="b">9999</span><span
                                        class="s">.99</span></div>
                            </a>

                            <a href="javascript
:void(0)" class="cart-btn add mt-3"> <img src="./images/cart-icon2.png" alt="">
                                加入購物車</a>
                        </div>
                    </div>
                    <?php
                  }?>

                </div>





            </div>

        </div>

    </div>


    <div class="container">



        <?php
    for($j=0;$j<3;$j++)
    {
     ?>

        <div class="want-to-buy-div orange-border">
            <a href="./snoopy.php" class="want-to-buy-title ">

                <div class="want-to-buy-title-txt">
                    <span class="fw-bold">好想買</span>的日本零食
                </div>
                <div class="cate-foto-2-div">

                    <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                </div>
            </a>

        </div>
        <div class="want-to-buy-row orange-border">

            <ul>
                <li>
                    <a href="./snoopy.php"><img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg"
                            alt=""></a>
                </li>

                <li class="right-div">
                    <div class="row gx-lg-4 gx-md-3 gx-sm-3 gx-2  ">


                        <?php 
                        
                        for($i=0;$i<6;$i++)
                        {
                            ?>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center position-relative product-img-wrapper">


                                <div class="position-absolute w-100 hover-layer text-start">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                    class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                        <li> <a href="" class="heart hover-layer-btn"><img class="heart-icon"
                                                    src="./images/heart-icon.png" alt="">加入好想買清單</a></li>
                                        <li class="hover-layer-product-detail-btn"><a href="./product-detail.php"></a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="./product-detail.php"><img src="./images/product-foto-2.jpg" alt=""></a>
                            </div>
                            <a href="./product-detail.php" target="_self">
                                <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            </a>
                            <a href="javascript
:void(0)" class="cart-btn-2 add mt-1">
                                <img src="./images/cart-icon2.png" alt="">
                                加入購物車</a>
                        </div>

                        <?php
                        }
                        ?>



                    </div>
                </li>

            </ul>
        </div>






        <div class="want-to-buy-div green-border">
            <a href="./snoopy.php" class="want-to-buy-title ">

                <div class="want-to-buy-title-txt">
                    <span class="fw-bold">好想買</span>的日本零食
                </div>
                <div class="cate-foto-2-div">
                    <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                </div>
            </a>

        </div>
        <div class="want-to-buy-row green-border">

            <ul>
                <li>
                    <a href="./snoopy.php"><img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg"
                            alt=""></a>
                </li>

                <li class="right-div">
                    <div class="row gx-lg-4 gx-md-3 gx-sm-3 gx-2  ">


                        <?php 
                        
                        for($i=0;$i<6;$i++)
                        {
                            ?>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center position-relative product-img-wrapper">

                                <div class="position-absolute w-100 hover-layer text-start">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                    class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                        <li> <a href="" class="heart hover-layer-btn"><img class="heart-icon"
                                                    src="./images/heart-icon.png" alt="">加入好想買清單</a></li>
                                        <li class="hover-layer-product-detail-btn"><a href="./product-detail.php"></a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="./product-detail.php"><img src="./images/product-foto-2.jpg" alt=""></a>

                            </div>
                            <a href="./product-detail.php" target="_self">
                                <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            </a>
                            <a href="javascript
:void(0)" class="cart-btn-2 add mt-1">
                                <img src="./images/cart-icon2.png" alt="">
                                加入購物車</a>
                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </li>

            </ul>
        </div>








        <div class="want-to-buy-div blue-border">
            <a href="./snoopy.php" class="want-to-buy-title ">

                <div class="want-to-buy-title-txt">
                    <span class="fw-bold">好想買</span>的日本零食
                </div>
                <div class="cate-foto-2-div">
                    <img class="cate-foto-2" src="./images/cate-foto-2.jpg" alt="">
                </div>
            </a>

        </div>
        <div class="want-to-buy-row blue-border">

            <ul>
                <li>
                    <a href="./snoopy.php"><img class="want-to-buy-product-img" src="./images/cate-foto-1.jpg"
                            alt=""></a>
                </li>

                <li class="right-div">
                    <div class="row gx-lg-4 gx-md-3 gx-sm-3 gx-2  ">

                        <?php 
                        
                        for($i=0;$i<6;$i++)
                        {
                            ?>
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4 product-div-2">
                            <div class="text-center position-relative product-img-wrapper">


                                <div class="position-absolute w-100 hover-layer text-start">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="hover-layer-btn quick-view"> <img
                                                    class="eye-icon" src="./images/eye-icon.png" alt="">快速睇產品</a></li>

                                        <li> <a href="" class="heart hover-layer-btn"><img class="heart-icon"
                                                    src="./images/heart-icon.png" alt="">加入好想買清單</a></li>
                                        <li class="hover-layer-product-detail-btn"><a href="./product-detail.php"></a>
                                        </li>
                                    </ul>

                                </div>
                                <a href="./product-detail.php"> <img src="./images/product-foto-2.jpg" alt=""></a>

                            </div>
                            <a href="./product-detail.php" target="_self">
                                <div class="product-name-2">日本日本多啦A夢叮日本日本多啦A夢叮</div>
                                <div class="final-price"><span class="s">$</span> <span class="b">60.00</span></div>
                            </a>
                            <a href="javascript
:void(0)" class="cart-btn-2 add mt-1">
                                <img src="./images/cart-icon2.png" alt="">
                                加入購物車</a>
                        </div>

                        <?php
                        }
                        ?>

                    </div>
                </li>

            </ul>
        </div>

        <?php   
        }
        ?>

    </div>













</div>
</div>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>

<script type="text/javascript">
$(function() {

    resize_action()

    var myPlayer = videojs('vls-video-1');

    var videoJsButtonClass = videojs.getComponent('Button');
    var concreteButtonClass = videojs.extend(videoJsButtonClass, {


        constructor: function() {
            videoJsButtonClass.call(this, myPlayer);
        }, // notice the comma

        handleClick: function() {
            // Do your stuff
        }
    });


    var concreteButtonInstance = myPlayer.controlBar.addChild(new concreteButtonClass());
    concreteButtonInstance.addClass("vjs-enlarge");
    concreteButtonInstance.addClass("vjs-fullscreen-control");

    var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
    if (!isAndroid) {
        myPlayer.controlBar.pictureInPictureToggle.dispose();
    }


    var concreteButtonInstance = myPlayer.controlBar.addChild(new concreteButtonClass());
    concreteButtonInstance.addClass("vjs-smaller");
    concreteButtonInstance.addClass("vjs-icon-picture-in-picture-exit");
    $('.vjs-smaller').fadeOut(0);


    myPlayer.ready(function() {

        if ($(window).width() <= 1200) {
            $('.vjs-enlarge').click();
            $('.vls-video-1 .vjs-smaller').fadeOut(0);

            $('.vls-video-1  .vjs-fullscreen-control').not('.vjs-enlarge').fadeIn(0);

        }


    });


    $('.vjs-enlarge').click(function() {
        $('.video-img-div').prepend($('.video-js'));
        $('.vjs-enlarge').fadeOut(0);
        $('.vjs-smaller').fadeIn(0);
        $('.enlarge-video-div').slideDown(200, function() {
            $('.video-img-div').height($('.video-img-div').height());

        });
    })

    $('.vjs-smaller').click(function() {
        $('.video-img-div-small').prepend($('.video-js'));
        $('.vjs-enlarge').fadeIn(0);
        $('.vjs-smaller').fadeOut(0);
        $('.enlarge-video-div').fadeOut(0);


    });



    $('.banner-container').slick({
        dots: true,
        arrows: false,
        pauseOnFocus: false,
        infinite: true,
        adaptiveHeight: true,

        speed: 800,
        autoplaySpeed: 5000,
        autoplay: true,
        // fade: true,
        cssEase: 'ease-out'
        // pauseOnHover: false
    });

    $('.vls-video-1  .vjs-fullscreen-control').not('.vjs-enlarge').fadeOut(0);


    $(window).resize(function() {


        if (!isAndroid) {

            resize_action()
        }

    })

    $('.vjs-fullscreen-control[title="Fullscreen"]').click(function() {
        $('.enlarge-video-div').toggleClass('fullscreen');
    })


    function resize_action() {


        if ($(window).width() <= 1200) {
            if ($(window).width() == 1200) {
                $('.video-img-div').height(528);
                // $('.video-img-div').width(936);



            } else {
                $('.video-img-div').height($('.dummy').height());

            }


            // $('.video-img-div').prepend($('.video-js'));
            // $('.enlarge-video-div').not('.fullscreen').fadeIn(0)
            if (!$('.enlarge-video-div').hasClass('fullscreen')) {

                $('.vjs-enlarge').click()


                $('.vls-video-1 .vjs-smaller').fadeOut(0);

                $('.vls-video-1  .vjs-fullscreen-control').not('.vjs-enlarge').fadeIn(0);


            }

        } else {
            // $('.enlarge-video-div').not('.fullscreen').fadeOut(0)
            // $('.video-img-div-small').prepend($('.video-js'));
            if (!$('.enlarge-video-div').hasClass('fullscreen'))

            {
                $('.vjs-smaller').click();
                $('.vls-video-1 .vjs-smaller').fadeOut(0);
                $('.vls-video-1  .vjs-fullscreen-control').not('.vjs-enlarge').fadeOut(0);

            }

        }

    }


    document.addEventListener("fullscreenchange", function() {

        if (!document.fullscreen) {

            $('.enlarge-video-div').removeClass('fullscreen');

        }
        // console.log(document.fullscreen);
    }, false);
    document.addEventListener("mozfullscreenchange", function() {
        if (!document.mozFullScreen) {
            $('.enlarge-video-div').removeClass('fullscreen');

        }

    }, false);
    document.addEventListener("webkitfullscreenchange", function() {
        if (!document.webkitIsFullScreen) {
            $('.enlarge-video-div').removeClass('fullscreen');

        }

    }, false);




})
</script>

<style type="text/css">
@media (max-width: 1200px) {
    .categories-div {
        display: block;
        /* margin: 80px auto 0 auto; */

    }
}
</style>
<?php
include('footer.php');
?>